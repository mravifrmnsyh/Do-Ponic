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
		$item = $this->barang_model->get($id)->row();
		if($item->gambar != null){
			$target_file = './assets/gambar/barang/'.$item->gambar;
			unlink($target_file);
		}

        $this->barang_model->del($id);
		$error = $this->db->error();
		if($error['code'] != 0){
			$this->session->set_flashdata('gagal', 'Data tidak dapat dihapus(sudah berelasi)');
		}else {
			$this->session->set_flashdata('success', 'Data berhasil dihapus');
		}
		redirect('barang');
    }

	public function tambah(){
		$barang = new stdClass();
		$barang->id_brg = null;
		$barang->nama_brg = null;
		$barang->keterangan = null;
		$barang->kategori = null;
		$barang->harga = null;
		$barang->stok = null;
		$barang->gambar = null;

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
			$this->session->set_flashdata('gagal', 'Data tidak ditemukan');
			redirect('barang');
		}
	}
	
	public function proses(){
		$config['upload_path']          = './assets/gambar/barang';
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 5000;
		$this->load->library('upload', $config);
		
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['tambah'])){
			if($_FILES['gambar']['name']!=null){
				if($this->upload->do_upload('gambar')){
					$post['gambar'] = $this->upload->data('file_name');
					$this->barang_model->add($post);
					$this->session->set_flashdata('success', 'Data berhasil disimpan');
					redirect('barang');
				}else{
					$this->session->set_flashdata('gagal', 'Data gagal disimpan');
					redirect('barang');
				}
			} else {
				$post['gambar'] = null;
				$this->barang_model->add($post);
				$this->session->set_flashdata('success', 'Data berhasil disimpan');
				redirect('barang');
			}
		
		}else if(isset($_POST['ubah'])){
			if($_FILES['gambar']['name']!=null){
				if($this->upload->do_upload('gambar')){
					$item = $this->barang_model->get($post['id_brg'])->row();
					if($item->gambar != null){
						$target_file = './assets/gambar/barang/'.$item->gambar;
						unlink($target_file);
					}

					$post['gambar'] = $this->upload->data('file_name');
					$this->barang_model->edit($post);
					$this->session->set_flashdata('success', 'Data berhasil disimpan');
					redirect('barang');
				}else{
					$this->session->set_flashdata('gagal', 'Data gagal disimpan');
					redirect('barang');
				}
			} else {
				$post['gambar'] = null;
				$this->barang_model->edit($post);
				$this->session->set_flashdata('success', 'Data berhasil disimpan');
				redirect('barang');
			}
		}
	}
}