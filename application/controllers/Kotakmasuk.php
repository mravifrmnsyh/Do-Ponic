<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kotakmasuk extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		cekTidakLogin();
		$this->load->model('kotakmasuk_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['row'] = $this->kotakmasuk_model->get();
		$this->template->load('admin/template', 'admin/kotakmasuk', $data);
	}

    public function hapus($id){
        $this->kotakmasuk_model->del($id);
        if($this->db->affected_rows()>0){
			echo "<script>alert('Data Berhasil Dihapus');</script>";
		}
		echo "<script>window.location='".site_url('kotakmasuk')."';</script>";
    }

	public function tambah(){
		$pesan = new stdClass();
		$pesan->id_user = null;
		$pesan->nama = null;
		$pesan->email = null;
		$pesan->subjek = null;
		$pesan->pesan = null;
		$data = array(
			'page' => 'kirim',
			'row' => $pesan
		);
		$this->template->load('user/theme', 'user/kontak', $data);
	}

	public function proses(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['kirim'])){
			$this->kotakmasuk_model->add($post);
		} 
		if($this->db->affected_rows()>0){
			echo "<script>alert('Pesan Berhasil Dikirim');</script>";
			echo "<script>window.location='".site_url('kontak')."';</script>";
		}
		echo "<script>alert('Silakan login untuk kirim pesan!!');</script>";
		echo "<script>window.location='".site_url('login')."';</script>";
	}
}