<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Katalog extends CI_Controller {

	public function index()
	{
        $data['barang'] = $this->barang_model->tampil_data()->result();
		$this->template->load('user/theme', 'user/katalog', $data);
	}
}
