<?php

class Daftarproduk extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('ProdukModel');
        //$this->load->library('session');
    }

    function index(){
        $logged_in = $this->session->userdata('logged_in');
        if(isset($logged_in)){
            if (isset($logged_in['admin'])){
                $data = [
                    'produk' => $this->ProdukModel->daftarProduk(),
                ];
            }
            else if ($logged_in['penjual']){
                $data = [
                    'produk' => $this->ProdukModel->daftarProdukId($logged_in['id_penjual']),
                ];
            }
 
            $this->load->view('Admin/daftarproduk_v', $data);
        }
       else redirect(base_url());
    }
}