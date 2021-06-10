<?php

function cekSudahLogin(){
    $ci =& get_instance();
    $user_session  = $ci->session->userdata('userid');
    if($user_session){
        redirect("user_dashboard");
    }
}

function cekTidakLogin(){
    $ci =& get_instance();
    $user_session  = $ci->session->userdata('userid');
    if(!$user_session){
        redirect("auth/login");
    }
}

function cekAdmin(){
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login()->level != 1){
        redirect('user_dashboard');
    }
}