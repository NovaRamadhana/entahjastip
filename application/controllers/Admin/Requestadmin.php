<?php

class Requestadmin extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('RequestModel');
    }

    function index(){
        $logged_in = $this->session->userdata('logged_in');
        if(isset($logged_in['admin'])){
            $data = [
                'request' => $this->RequestModel->get_request(),
            ];
            $this->load->view('Admin/requestadmin_v.php', $data);
        } else redirect(base_url());
    }
}