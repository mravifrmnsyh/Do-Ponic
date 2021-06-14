<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	function __construct(){
		parent::__construct();
		cekTidakLogin();
		$this->load->model('user_model');
		$this->load->library('form_validation');
	}

    public function index()
	{
		$data['row'] = $this->user_model->get();
		$this->template->load('user/theme', 'user/profil', $data);
	}

	public function ubah($id){
		$post = $this->input->post(null, TRUE);
		$config['upload_path']          = './assets/gambar/user';
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 2048;
		$this->load->library('upload', $config);
		$post['level'] = 2;
		$post['id_user'] = $id;
		
		if($_FILES['foto']['name']!=null){
			if($this->upload->do_upload('foto')){
				$item = $this->user_model->get($post['id_user'])->row();
				if($item->foto != null){
					$target_file = './assets/gambar/user/'.$item->foto;
					unlink($target_file);
				}

				$post['foto'] = $this->upload->data('file_name');
				$this->user_model->edit($post);
				if($this->db->affected_rows()>0){
					echo "<script>alert('Data Berhasil Disimpan');</script>";
					// $this->session->set_flashdata('success', 'Data berhasil disimpan');
				}
			}else{
				echo "<script>alert('Data gagal disimpan');</script>";
				// $this->session->set_flashdata('success', 'Data berhasil disimpan');
			}
			echo "<script>window.location='".site_url('profil')."';</script>";
			// redirect('users');
		} else {
			$post['foto'] = null;
			$this->user_model->edit($post);
			echo "<script>
			alert('Data berhasil disimpan');
			window.location='".site_url('profil')."';
			</script>";
		}
	}
}
