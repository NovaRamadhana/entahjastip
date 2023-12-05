<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        $data['judul'] = 'Login';
        $this->load->view('login_v', $data);
    }
  
}