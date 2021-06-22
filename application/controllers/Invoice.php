<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {
    
	public function index()
	{
        cekTidakLogin();
		cekAdmin();
        $this->load->model('invoice_model');
		$data['row'] = $this->invoice_model->tampilData();
		$this->template->load('admin/template', 'admin/invoice', $data);		
	}
}