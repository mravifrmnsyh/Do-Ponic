<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_dashboard extends CI_Controller {

	public function index()
	{
		$this->template->load('user/index', 'user/user_dashboard');
	}
}
