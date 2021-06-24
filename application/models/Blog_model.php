<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Model {

	public function index()	{		
		$data['row'] = $this->artikel_model->get();
		$this->template->load('user/theme','user/blog', $data);		
	}
}