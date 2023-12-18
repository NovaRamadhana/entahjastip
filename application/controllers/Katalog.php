<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Katalog extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('KatalogModel');
        // $this->load->library('session');
    }

    function index(){
        $data['judul'] = 'Katalog';
        $data['produk'] = $this->KatalogModel->getKatalog();
        $this->load->view('katalog_v', $data);
    }
}