<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Navbar');
        $this->load->library('session');
    }

    function index(){
        $data['judul'] = 'Profil Perusahaan';
        $data['kategori'] = $this->Navbar->getCategories();
        $data['userlogin'] = $this->session->userdata('logged_in');
        $this->load->view('profil_v',$data);
    }
}