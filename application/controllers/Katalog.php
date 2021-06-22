<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Katalog extends CI_Controller {

	public function index()
	{
		$data['barang'] = $this->barang_model->tampil_data_semua()->result();	
		if(isset($_POST['alat'])){
			$data['barang'] = $this->barang_model->tampil_data('alat')->result();
			
		}else if(isset($_POST['bibit'])){
			$data['barang'] = $this->barang_model->tampil_data('bibit')->result();
			
		}else if(isset($_POST['buah'])){
			$data['barang'] = $this->barang_model->tampil_data('buah')->result();
		}
		$this->template->load('user/theme', 'user/katalog', $data);
	}

	public function detail($id){
		$data['dat'] = $this->barang_model->get()->result();
		$data['row'] = $this->barang_model->detail_brg($id);
		$this->template->load('user/theme', 'user/katalog_desc', $data);
	}

	public function tambahKeranjang($id){
		$barang = $this->barang_model->find($id);

		$data = array(
			'id' => $barang->id_brg,
			'qty' => 1,
			'price' => $barang->harga,
			'name' => $barang->nama_brg
		);
		$this->cart->insert($data);
		redirect('katalog');
	}

	public function detailKeranjang(){
		$this->template->load('user/theme', 'user/keranjang');
	}

	public function hapusKeranjang(){
		$this->cart->destroy();
		redirect('katalog/detailKeranjang');
	}

	public function hapusProduk($id){
		$this->cart->remove($id);
		redirect('katalog/detailKeranjang');
	}

	public function checkout(){
		$this->template->load('user/theme', 'user/checkout');
	}

	public function prosesBayar(){
		$this->load->model('invoice_model');
		$proses = $this->invoice_model->index();
		if($proses){
			$this->cart->destroy();
			redirect('user_dashboard');
		} else{
			redirect('katalog/chechout');
		}
	}
}
