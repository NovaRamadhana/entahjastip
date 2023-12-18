<?php

class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Penjual/PenjualModel');
        $this->load->model('ProdukModel');
        $this->load->model('PesananModel');
<<<<<<< HEAD
        $this->load->model('TransaksiModel');
=======
>>>>>>> 9ab1435bfc82e79afb79a0e72a481f39f428c98c
        $this->load->library('session');
    }

    function index(){
<<<<<<< HEAD
        if(isset($this->session->userdata('logged_in')['login'])){
            $logged_in = $this->session->userdata('logged_in');
            if (isset($this->session->userdata('logged_in')['admin'])){
                $data = [
                    'status' => 'admin',
                    'penjual_diterima' => $this->PenjualModel->countPenjualDiterima(),
                    'pending_penjual' => $this->PenjualModel->countPenjualPending(),
                    'jumlah_produk' => $this->ProdukModel->countProduk(),
                    'total_pesanan' => $this->PesananModel->countPesanan(),
                    'total_transaksi' => ''
                ];
            } else if ($this->session->userdata('logged_in')['penjual']) {
                $data = [
                    'status' => 'Penjual',
                    'pesanan_masuk' => $this->PesananModel->hitungPesanankePenjual($logged_in['id_penjual'])->total_pesanan,
                    'pendapatan_kotor' => $this->PesananModel->hitungPesanankePenjual($logged_in['id_penjual'])->pendapatan_kotor,
                    'produk_ready' => $this->ProdukModel->countStatusProduk($logged_in['id_penjual'])->jumlah_ready,
                    'produk_preorder' => $this->ProdukModel->countStatusProduk($logged_in['id_penjual'])->jumlah_preorder,
                    'produk_soldout' => $this->ProdukModel->countStatusProduk($logged_in['id_penjual'])->jumlah_soldout,
                    'jumlah_produk' => $this->ProdukModel->countProdukId($logged_in['id_penjual']),
                    'total_pesanan' => $this->PesananModel->countPesananId($logged_in['id_user']),
                    'total_transaksi' => $this->TransaksiModel->countTransaksiId($logged_in['id_user']),
                ];
            } else {
                $data = [
                    'status' => 'Pengguna',
                    'total_pesanan' => $this->PesananModel->countPesananId($logged_in['id_user'])
                ];
            }
            $data['logged_in']  = $logged_in;
            $this->load->view('Admin/adminpage_v', $data);
        } else redirect(base_url());
    } 
=======
        $data = [
            'penjual_diterima' => $this->PenjualModel->countPenjualDiterima(),
            'pending_penjual' => $this->PenjualModel->countPenjualPending(),
            'jumlah_produk' => $this->ProdukModel->countProduk(),
            'total_pesanan' => $this->PesananModel->countPesanan(),
            'total_transaksi' => ''
        ];
        $this->load->view('Admin/adminpage_v', $data);
    }
>>>>>>> 9ab1435bfc82e79afb79a0e72a481f39f428c98c
}