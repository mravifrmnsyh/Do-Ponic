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
			echo "<script>alert('Data tidak ditemukan');";
			echo "window.location='".site_url('barang')."';</script>";
		}
	}
	public function detail($id){
		$data['dat'] = $this->barang_model->get()->result();
		$data['row'] = $this->barang_model->detail_brg($id);
		$this->template->load('user/theme', 'user/katalog_desc', $data);
	}
	
	public function proses(){
		$config['upload_path']          = './assets/gambar/barang';
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 2048;
		$this->load->library('upload', $config);
		
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['tambah'])){
			if($_FILES['gambar']['name']!=null){
				if($this->upload->do_upload('gambar')){
					$post['gambar'] = $this->upload->data('file_name');
					$this->barang_model->add($post);
					echo "<script>alert('Data Berhasil Disimpan');</script>";
					echo "<script>window.location='".site_url('barang')."';</script>";
				}else{
					echo "<script>alert('Data Gagal Disimpan');</script>";
					echo "<script>window.location='".site_url('barang')."';</script>";
				}
			} else {
				$post['gambar'] = null;
				$this->barang_model->add($post);
				echo "<script>
				alert('Data berhasil disimpan');
				window.location='".site_url('barang')."';
				</script>";
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
					echo "<script>alert('Data Berhasil Disimpan');</script>";
					echo "<script>window.location='".site_url('barang')."';</script>";
				}else{
					echo "<script>alert('Data Gagal Disimpan');</script>";
					echo "<script>window.location='".site_url('barang')."';</script>";
				}
			} else {
				$post['gambar'] = null;
				$this->barang_model->edit($post);
				echo "<script>
				alert('Data berhasil disimpan');
				window.location='".site_url('barang')."';
				</script>";
			}
		}
	}
}