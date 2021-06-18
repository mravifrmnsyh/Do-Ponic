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
        $this->artikel_model->del($id);
        if($this->db->affected_rows()>0){
			echo "<script>alert('Data Berhasil Dihapus');</script>";
		}
		echo "<script>window.location='".site_url('artikel')."';</script>";
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
		$data['dat'] = $this->artikel_model->get()->result();
		$data['row'] = $this->artikel_model->detail($id);
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
			echo "<script>alert('Data tidak ditemukan');";
			echo "window.location='".site_url('artikel')."';</script>";
		}
	}
	
	public function proses(){
		$config['upload_path']          = './assets/gambar/artikel';
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 2048;
		$this->load->library('upload', $config);
		
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['tambah'])){
			if($_FILES['gambar']['name']!=null){
				if($this->upload->do_upload('gambar')){
					$post['gambar'] = $this->upload->data('file_name');
					$this->artikel_model->add($post);
					echo "<script>alert('Data Berhasil Disimpan');</script>";
					echo "<script>window.location='".site_url('artikel')."';</script>";
				}else{
					echo "<script>alert('Data Gagal Disimpan');</script>";
					echo "<script>window.location='".site_url('artikel')."';</script>";
				}
			} else {
				$post['gambar'] = null;
				$this->artikel_model->add($post);
				echo "<script>
				alert('Data berhasil disimpan');
				window.location='".site_url('artikel')."';
				</script>";
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
					echo "<script>alert('Data Berhasil Disimpan');</script>";
					echo "<script>window.location='".site_url('artikel')."';</script>";
				}else{
					echo "<script>alert('Data Gagal Disimpan');</script>";
					echo "<script>window.location='".site_url('artikel')."';</script>";
				}
			} else {
				$post['gambar'] = null;
				$this->artikel_model->edit($post);
				echo "<script>
				alert('Data berhasil disimpan');
				window.location='".site_url('artikel')."';
				</script>";
			}
		}
	}
}