<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Navbar');
    }

    function index(){
        $data['judul'] = 'Profil Perusahaan';
        $data['kategori'] = $this->Navbar->getCategories();
        $this->load->view('profil_v',$data);
    }
}