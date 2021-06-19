<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra extends CI_Controller {
	
	public function index()
	{
		$data['supplier'] = $this->supplier_model->get();
		$this->template->load('user/theme', 'user/mitra', $data);
	}
}