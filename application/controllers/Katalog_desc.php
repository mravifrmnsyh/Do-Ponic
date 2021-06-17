<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Katalog_desc extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('barang_model');
		$this->load->library('form_validation');
        $this->load->library('typography');
	}
    
	public function index()
	{
		$data['barang'] = $this->barang_model->tampil_data_semua()->result();
		$data['row'] = $this->barang_model->get();
		$this->template->load('user/theme', 'user/katalog_desc', $data);					
	}
}