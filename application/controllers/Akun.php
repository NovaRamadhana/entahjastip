<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Navbar');
    }

    function index(){
        $logged_in = $this->session->userdata('logged_in');
        $data = [
            'judul' => 'Profilakun',
            'nama' => $logged_in['nama'],
        ];
        $data['judul'] = 'Profilakun';
        if(isset($logged_in['admin'])){
            $data['status'] = 'admin';
        } else if ($logged_in['penjual']){
            $data['status'] = 'penjual';
        } else $data['status'] = 'pengguna';
        
        $this->load->view('akun_v',$data);
    }
}