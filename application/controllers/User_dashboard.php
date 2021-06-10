<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_dashboard extends CI_Controller {

	public function index()
	{
		$this->template->load('user/index', 'user/user_dashboard');
	}

	// public function cekLogin(){
	// 	if($this->fungsi->user_login() == null) {
	// 		echo "<a href='".site_url('auth/login')."'>Sign in</a> |  
	// 		<a href=".site_url('auth/login')."> Register</a>";
	// 	  }else{
	// 		echo ucfirst($this->fungsi->user_login()->username)." | 
	// 		<a href='".site_url('auth/logout')."'> Log out</a>";
	// 	}
	// }
}
