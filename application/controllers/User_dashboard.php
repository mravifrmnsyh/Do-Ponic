<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_dashboard extends CI_Controller {

	public function index()
	{
		$data['barang'] = $this->barang_model->tampil_data()->result();
		$this->template->load('user/index', 'user/user_dashboard', $data);
	}
}
