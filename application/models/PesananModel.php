<?php

class PesananModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function countPesanan(){
        return $this->db->count_all('pesanan');
    }

    function hitungPesanankePenjual(){
        $query = $this->db  ->select('SUM(detail_pesanan.jumlah) as total_pesanan, SUM(detail_pesanan.jumlah*produk.harga) as pendapatan_kotor,')
                            ->from('penjual')
                            ->join('produk', 'penjual.id_penjual = produk.id_penjual')
                            ->join('detail_pesanan', 'produk.id_produk = detail_pesanan.id_produk')
                            ->join('pesanan', 'detail_pesanan.id_pesanan = pesanan.id_pesanan')
                            ->join('status_stok', 'produk.id_stok = status_stok.id_stok')
                            ->group_by('penjual.id_penjual')
                            ->get();

        return $query->row();
    }

    function getPesanan(){
        $query = $this->db->get('pesanan');

        return $query->result();
    }

    function getPesananId($id){
        $query = $this->db->where('id_user', $id)->get('pesanan');

        return $query->result();
    }

    function getDetailPesanan($id){
        return $this->db    ->join('produk', 'produk.id_produk = detail_pesanan.id_produk')
                            ->where('id_pesanan', $id)->get('detail_pesanan')->result();
    }

    function hitungPesanankePenjualId($id){
        $query = $this->db  ->select('SUM(detail_pesanan.jumlah) as total_pesanan, SUM(detail_pesanan.jumlah*produk.harga) as pendapatan_kotor,')
                            ->from('penjual')
                            ->join('produk', 'penjual.id_penjual = produk.id_penjual')
                            ->join('detail_pesanan', 'produk.id_produk = detail_pesanan.id_produk')
                            ->join('pesanan', 'detail_pesanan.id_pesanan = pesanan.id_pesanan')
                            ->join('status_stok', 'produk.id_stok = status_stok.id_stok')
                            ->where('penjual.id_penjual', $id)
                            ->group_by('penjual.id_penjual')
                            ->get();

        return $query->row();
    }

    function countPesananId($id){
        return $this->db->where('id_user', $id)->count_all_results('pesanan');
    }
}