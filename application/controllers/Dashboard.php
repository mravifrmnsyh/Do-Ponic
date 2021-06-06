<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		cekTidakLogin();
		$this->template->load('admin/template', 'admin/dashboard');
	}
}
