<?php

class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Penjual/PenjualModel');
        $this->load->model('ProdukModel');
        $this->load->model('PesananModel');
<<<<<<< HEAD
        $this->load->library('session');
=======
>>>>>>> 72b2bdac697103dc8c0d15379507f633cb78dab4
    }

    function index(){
        $data = [
            'penjual_diterima' => $this->PenjualModel->countPenjualDiterima(),
            'pending_penjual' => $this->PenjualModel->countPenjualPending(),
            'jumlah_produk' => $this->ProdukModel->countProduk(),
            'total_pesanan' => $this->PesananModel->countPesanan(),
            'total_transaksi' => ''
        ];
        $this->load->view('Admin/adminpage_v', $data);
    }
}