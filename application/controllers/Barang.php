<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		cekTidakLogin();
		cekAdmin();
		$this->load->model('barang_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['row'] = $this->barang_model->get();
		$this->template->load('admin/template', 'admin/barang', $data);
	}

    public function hapus($id){
        $this->barang_model->del($id);
        if($this->db->affected_rows()>0){
			echo "<script>alert('Data Berhasil Dihapus');</script>";
		}
		echo "<script>window.location='".site_url('barang')."';</script>";
    }

	public function tambah(){
		$barang = new stdClass();
		$barang->id_brg = null;
		$barang->nama_brg = null;
		$barang->keterangan = null;
		$barang->kategori = null;
		$barang->harga = null;
		$barang->stok = null;
		$data = array(
			'page' => 'tambah',
			'row' => $barang
		);
		$this->template->load('admin/template', 'admin/barang_form', $data);
	}

	public function ubah($id){
		$query = $this->barang_model->get($id);
		if($query->num_rows()>0){
			$barang = $query->row();
			$data = array(
				'page' => 'ubah',
				'row' => $barang
			);
			$this->template->load('admin/template', 'admin/barang_form', $data);
		}else{
			echo "<script>alert('Data tidak ditemukan');";
			echo "window.location='".site_url('barang')."';</script>";
		}
	}

	public function proses(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['tambah'])){
			$this->barang_model->add($post);
		}else if(isset($_POST['ubah'])){
			$this->barang_model->edit($post);
		} 
		if($this->db->affected_rows()>0){
			echo "<script>alert('Data Berhasil Disimpan');</script>";
		}
		echo "<script>window.location='".site_url('barang')."';</script>";

	}
}