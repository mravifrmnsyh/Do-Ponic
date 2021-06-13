<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function index()
	{
		$this->template->load('user/theme', 'user/kontak');
	}
}
