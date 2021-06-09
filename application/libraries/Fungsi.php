<?php

class Fungsi{
    protected $ci;

    function __construct(){
        $this->ci =& get_instance();
    }

    function user_login(){
        $this->ci->load->model('user_model');
        $user_id = $this->ci->session->userdata('userid');
        if($user_id!=0){
            $user_data = $this->ci->user_model->get($user_id)->row();
        }else{
            $user_data = null;
        }
        return $user_data;
    }
}