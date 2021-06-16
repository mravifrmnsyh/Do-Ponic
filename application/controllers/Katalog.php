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
}
