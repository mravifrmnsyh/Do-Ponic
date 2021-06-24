<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('artikel_model');
		$this->load->library('form_validation');
		$this->load->library('typography');
	}

	public function index()
	{
		$data['row'] = $this->artikel_model->get();
		$this->template->load('admin/template', 'admin/artikel', $data);		
	}

    public function hapus($id){
		$item = $this->artikel_model->get($id)->row();
		if($item->gambar != null){
			$target_file = './assets/gambar/artikel/'.$item->gambar;
			unlink($target_file);
		}

        $this->artikel_model->del($id);
        if($this->db->affected_rows()>0){
			$this->session->set_flashdata('success', 'Data berhasil dihapus');
		}
		redirect('artikel');
    }

	public function tambah(){
		$artikel = new stdClass();
		$artikel->id_artikel = null;
		$artikel->date = null;
		$artikel->judul = null;
		$artikel->tag = null;
		$artikel->deskripsi = null;
		$artikel->gambar = null;

		$data = array(
			'page' => 'tambah',
			'row' => $artikel
		);
		$this->template->load('admin/template', 'admin/artikel_form', $data);
	}

	public function detail($id){
		$data['row'] = $this->artikel_model->detail($id);
		$data['desc'] = $this->artikel_model->artikelDesc();
		$this->template->load('user/theme', 'user/artikel', $data);
	}
	

	public function ubah($id){
		$query = $this->artikel_model->get($id);
		if($query->num_rows()>0){
			$artikel = $query->row();
			$data = array(
				'page' => 'ubah',
				'row' => $artikel
			);
			$this->template->load('admin/template', 'admin/artikel_form', $data);
		}else{
			$this->session->set_flashdata('gagal', 'Data tidak ditemukan');
			redirect('artikel');
		}
	}
	
	public function proses(){
		$config['upload_path']          = './assets/gambar/artikel';
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 5000;
		$this->load->library('upload', $config);
		
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['tambah'])){
			if($_FILES['gambar']['name']!=null){
				if($this->upload->do_upload('gambar')){
					$post['gambar'] = $this->upload->data('file_name');
					$this->artikel_model->add($post);
					$this->session->set_flashdata('success', 'Data berhasil disimpan');
					redirect('artikel');
				}else{
					$this->session->set_flashdata('gagal', 'Data gagal disimpan');
					redirect('artikel');
				}
			} else {
				$post['gambar'] = null;
				$this->artikel_model->add($post);
				$this->session->set_flashdata('success', 'Data berhasil disimpan');
				redirect('artikel');
			}
		
		}else if(isset($_POST['ubah'])){
			if($_FILES['gambar']['name']!=null){
				if($this->upload->do_upload('gambar')){
					$item = $this->artikel_model->get($post['id_artikel'])->row();
					if($item->gambar != null){
						$target_file = './assets/gambar/artikel/'.$item->gambar;
						unlink($target_file);
					}

					$post['gambar'] = $this->upload->data('file_name');
					$this->artikel_model->edit($post);
					$this->session->set_flashdata('success', 'Data berhasil disimpan');
					redirect('artikel');
				}else{
					$this->session->set_flashdata('gagal', 'Data gagal disimpan');
					redirect('artikel');
				}
			} else {
				$post['gambar'] = null;
				$this->artikel_model->edit($post);
				$this->session->set_flashdata('success', 'Data berhasil disimpan');
				redirect('artikel');
			}
		}
	}
}