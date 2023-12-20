<?php

class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Penjual/PenjualModel');
        $this->load->model('ProdukModel');
        $this->load->model('PesananModel');
        $this->load->model('TransaksiModel');
        //$this->load->library('session');
    }

    function index(){
        if(isset($this->session->userdata('logged_in')['login'])){
            $logged_in = $this->session->userdata('logged_in');
            if (isset($this->session->userdata('logged_in')['admin'])){
                $data = [
                    'status' => 'admin',
                    'penjual_diterima' => $this->PenjualModel->countPenjualDiterima(),
                    'pending_penjual' => $this->PenjualModel->countPenjualPending(),
                    'pesanan_masuk' => $this->PesananModel->hitungPesanankePenjual()->total_pesanan,
                    'pendapatan_kotor' => $this->PesananModel->hitungPendapatanKotor()->pendapatan_kotor,
                    'produk_ready' => $this->ProdukModel->countStatusProduk()->jumlah_ready,
                    'produk_preorder' => $this->ProdukModel->countStatusProduk()->jumlah_preorder,
                    'produk_soldout' => $this->ProdukModel->countStatusProduk()->jumlah_soldout,
                    'jumlah_produk' => $this->ProdukModel->countProduk(),
                    'total_pesanan' => $this->PesananModel->countPesanan(),
                    'total_transaksi' => $this->TransaksiModel->countTransaksi(),
                ];
            } else if ($this->session->userdata('logged_in')['penjual']) {
                $data = [
                    'status' => 'Penjual',
                    'pesanan_masuk' => $this->PesananModel->hitungPesanankePenjualId($logged_in['id_penjual'])->total_pesanan,
                    'pendapatan_kotor' => $this->PesananModel->hitungPesanankePenjualId($logged_in['id_penjual'])->pendapatan_kotor,
                    'produk_ready' => $this->ProdukModel->countStatusProdukId($logged_in['id_penjual'])->jumlah_ready,
                    'produk_preorder' => $this->ProdukModel->countStatusProdukId($logged_in['id_penjual'])->jumlah_preorder,
                    'produk_soldout' => $this->ProdukModel->countStatusProdukId($logged_in['id_penjual'])->jumlah_soldout,
                    'jumlah_produk' => $this->ProdukModel->countProdukId($logged_in['id_penjual']),
                    'total_pengeluaran' => $this->PesananModel->hitungPengeluaranId($logged_in['id_user'])->pengeluaran,
                    'total_pesanan' => $this->PesananModel->countPesananId($logged_in['id_user']),
                    'total_transaksi' => $this->TransaksiModel->countTransaksiId($logged_in['id_user']),
                ];
            } else {
                $data = [
                    'status' => 'Pengguna',
                    'total_pengeluaran' => $this->PesananModel->hitungPengeluaranId($logged_in['id_user'])->pengeluaran,
                    'total_pesanan' => $this->PesananModel->countPesananId($logged_in['id_user']),
                    'total_transaksi' => $this->TransaksiModel->countTransaksiId($logged_in['id_user']),
                ];
            }
            $data['logged_in']  = $logged_in;
            $this->load->view('Admin/adminpage_v', $data);
        } else redirect(base_url());
    } 
}