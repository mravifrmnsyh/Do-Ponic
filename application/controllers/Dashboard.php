<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		cekTidakLogin();
		cekAdmin();
		$this->load->model('user_model');
		$this->load->model('supplier_model');
		$this->load->model('barang_model');
		
	}

	public function index()
	{
		cekTidakLogin();
		$data['user'] = $this->user_model->jumlahUser();
		$data['sup'] = $this->supplier_model->jumlahSup();
		$data['brg'] = $this->barang_model->jumlahBrg();
		$this->template->load('admin/template', 'admin/dashboard', $data);
	}
}
