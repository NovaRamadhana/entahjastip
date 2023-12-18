<?php

class TransaksiModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function countTransaksi(){
        return $this->db    ->join('pesanan', 'pesanan.id_pesanan = pembayaran.id_pesanan')
                            ->where('pembayaran.status_bayar', 'y')
                            ->count_all_results('pembayaran');
    }

    function countTransaksiId($id){
        return $this->db    ->join('pesanan', 'pesanan.id_pesanan = pembayaran.id_pesanan')
                            ->where('pesanan.id_user', $id)
                            ->where('pembayaran.status_bayar', 'y')
                            ->count_all_results('pembayaran');
    }
}