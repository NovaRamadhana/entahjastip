<?php

class Daftarakunuser extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Admin/UserModel');
    }

    function index(){
        $data = [
            'judul' => 'Daftar Akun',
            'daftar_akun' => $this->UserModel->get()
        ];
        $this->load->view('Admin/daftarakunuser_v', $data);
    }
}