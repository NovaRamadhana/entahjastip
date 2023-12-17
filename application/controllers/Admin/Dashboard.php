<?php

class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Penjual/PenjualModel');
    }

    function index(){
        $data = [
            'penjual_diterima' => $this->PenjualModel->countPenjualDiterima(),
            'pending_penjual' => $this->PenjualModel->countPenjualPending(),
            'jumlah_produk' => ''
        ];
        $this->load->view('Admin/adminpage_v', $data);
    }
}