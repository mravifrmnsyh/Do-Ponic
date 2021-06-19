<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kotakmasuk extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		cekTidakLogin();
		cekAdmin();
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
			$this->session->set_flashdata('success', 'Data berhasil dihapus');
		}
		redirect('kotakmasuk');
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
			$this->session->set_flashdata('success', 'Pesan berhasil dikirim');
			redirect('kontak');
		}
		$this->session->set_flashdata('warning', 'Login untuk kirim pesan');
		redirect('login');
		}
}