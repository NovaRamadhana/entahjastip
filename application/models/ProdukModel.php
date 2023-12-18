<?php

class ProdukModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function countProduk(){
        return $this->db->count_all('produk');
    }

    function countProdukId($id){
        return $this->db->where('id_penjual', $id)->count_all_results('produk');
    }

    function daftarProduk(){
        return $this->db->get('produk')->result();
    }

    function daftarProdukId($id){
        return $this->db->where('id_penjual', $id)->get('produk')->result();
    }

    function countStatusProduk(){
        $query = $this->db  ->select(   
                                        "(SELECT COUNT(produk.id_produk) FROM produk
                                        JOIN status_stok ON status_stok.id_stok = produk.id_stok
                                        WHERE status_stok.nama_status = 'Pre-Order') AS jumlah_preorder,
                                        (SELECT COUNT(produk.id_produk) FROM produk
                                        JOIN status_stok ON status_stok.id_stok = produk.id_stok
                                        WHERE status_stok.nama_status = 'Ready') AS jumlah_ready,
                                        (SELECT COUNT(produk.id_produk) FROM produk
                                        JOIN status_stok ON status_stok.id_stok = produk.id_stok
                                        WHERE status_stok.nama_status = 'Sold Out') AS jumlah_soldout
                                    ")
                            ->get();

        return $query->row();
    }

    function countStatusProdukId($id){
        $query = $this->db  ->select(   
                                        "(SELECT COUNT(produk.id_produk) FROM produk
                                        JOIN status_stok ON status_stok.id_stok = produk.id_stok
                                        WHERE produk.id_penjual = '$id' AND status_stok.nama_status = 'Pre-Order') AS jumlah_preorder,
                                        (SELECT COUNT(produk.id_produk) FROM produk
                                        JOIN status_stok ON status_stok.id_stok = produk.id_stok
                                        WHERE produk.id_penjual = '$id' AND status_stok.nama_status = 'Ready') AS jumlah_ready,
                                        (SELECT COUNT(produk.id_produk) FROM produk
                                        JOIN status_stok ON status_stok.id_stok = produk.id_stok
                                        WHERE produk.id_penjual = '$id' AND status_stok.nama_status = 'Sold Out') AS jumlah_soldout
                                    ")
                            ->get();

        return $query->row();
    }
}