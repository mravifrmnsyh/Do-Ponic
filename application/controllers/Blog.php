<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{		
		$data['row'] = $this->artikel_model->artikelDesc();
		$this->template->load('user/theme', 'user/blog', $data);
    }
}
