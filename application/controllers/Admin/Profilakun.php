<?php

class Profilakun extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->load->view('Admin/profilakun_v');
    }
}