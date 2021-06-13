<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		cekTidakLogin();
		cekAdmin();
		$this->load->model('user_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['row'] = $this->user_model->get();
		$this->template->load('admin/template', 'admin/users', $data);
	}

	public function tambah(){

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules('password1', 'Password Kofirmasi', 'required|matches[password]',
			array('matches' => '%s tidak sesuai dengan password')
		);
		$this->form_validation->set_rules('level', 'Level', 'required');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');
		$this->form_validation->set_message('min_length', '%s minimal 5 karakter');

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');


		if($this->form_validation->run()==FALSE){
			$this->template->load('admin/template', 'admin/user_tambah');
		}else{
			$post = $this->input->post(null, TRUE);
			$this->user_model->add($post);
 			if($this->db->affected_rows()>0){
				echo "<script>alert('Data Berhasil Disimpan');</script>";
				// $this->session->set_flashdata('success', 'Data berhasil disimpan');
			}
			echo "<script>window.location='".site_url('users')."';</script>";
			// redirect('users');
		}

	}

	public function ubah($id){

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]');
		if($this->input->post('password')){
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
			$this->form_validation->set_rules('password1', 'Password Kofirmasi', 'required|matches[password]',
				array('matches' => '%s tidak sesuai dengan password')
			);
		}
		if($this->input->post('password1')){
			$this->form_validation->set_rules('password1', 'Password Kofirmasi', 'required|matches[password]',
				array('matches' => '%s tidak sesuai dengan password')
			);
		}
		$this->form_validation->set_rules('level', 'Level', 'required');

		$this->form_validation->set_message('required', '%s tidak boleh kosong');
		$this->form_validation->set_message('min_length', '%s minimal 5 karakter');

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');


		if($this->form_validation->run()==FALSE){	
			$query = $this->user_model->get($id);
			if($query->num_rows()>0){
				$data['row'] = $query->row();
				$this->template->load('admin/template', 'admin/user_edit', $data);
			}else{
				echo "<script>alert('Data tidak ditemukan');";
				echo "window.location='".site_url('users')."';</script>";
				// redirect('users');
			}
		}else{
			$post = $this->input->post(null, TRUE);
			$this->user_model->edit($post);
 			if($this->db->affected_rows()>0){
				echo "<script>alert('Data Berhasil Disimpan');</script>";
				// $this->session->set_flashdata('success', 'Data berhasil disimpan');
			}
			echo "<script>window.location='".site_url('users')."';</script>";
			// redirect('users');
		}

	}
	public function hapus(){
		$id = $this->input->post('id_user');
		$this->user_model->del($id);
		if($this->db->affected_rows()>0){
			echo "<script>alert('Data Berhasil Dihapus');</script>";
		}
		echo "<script>window.location='".site_url('users')."';</script>";
	}

	public function jumlah(){
		$data['total'] = $this->user_model->jumlahUser();
		$this->template->load('', 'admin/dashboard', $data);
	}
}
