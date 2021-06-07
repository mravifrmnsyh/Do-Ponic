<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		cekTidakLogin();
		cekAdmin();
		$this->load->model('supplier_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['row'] = $this->supplier_model->get();
		$this->template->load('admin/template', 'admin/supplier', $data);
	}

    public function hapus($id){
        $this->supplier_model->del($id);
        if($this->db->affected_rows()>0){
			echo "<script>alert('Data Berhasil Dihapus');</script>";
		}
		echo "<script>window.location='".site_url('supplier')."';</script>";
    }

	public function tambah(){
		$supplier = new stdClass();
		$supplier->id_supplier = null;
		$supplier->nama = null;
		$supplier->alamat = null;
		$supplier->telepon = null;
		$supplier->deskripsi = null;
		$data = array(
			'page' => 'tambah',
			'row' => $supplier
		);
		$this->template->load('admin/template', 'admin/supplier_form', $data);
	}

	public function ubah($id){
		$query = $this->supplier_model->get($id);
		if($query->num_rows()>0){
			$supplier = $query->row();
			$data = array(
				'page' => 'ubah',
				'row' => $supplier
			);
			$this->template->load('admin/template', 'admin/supplier_form', $data);
		}else{
			echo "<script>alert('Data tidak ditemukan');";
			echo "window.location='".site_url('supplier')."';</script>";
		}
	}

	public function proses(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['tambah'])){
			$this->supplier_model->add($post);
		}else if(isset($_POST['ubah'])){
			$this->supplier_model->edit($post);
		} 
		if($this->db->affected_rows()>0){
			echo "<script>alert('Data Berhasil Disimpan');</script>";
		}
		echo "<script>window.location='".site_url('supplier')."';</script>";

	}
}