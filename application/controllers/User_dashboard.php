<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_dashboard extends CI_Controller {

	public function index()
	{
		$data['barang'] = $this->barang_model->tampil_data_semua();
		$data['row'] = $this->barang_model->get();
		$data['artikel'] = $this->artikel_model->get();
		$data['desc'] = $this->artikel_model->artikelDesc();
		$this->template->load('user/index', 'user/user_dashboard', $data);
	}
}
