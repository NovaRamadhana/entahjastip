<?php

class ProdukModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function countProduk(){
        return $this->db->count_all('produk');
    }
<<<<<<< HEAD

    function countProdukId($id){
        return $this->db->where('id_penjual', $id)->count_all_results('produk');
    }

    function countStatusProduk($id){
        // return $this->db    ->select('COUNT() AS jumlah_ready')
        //                     ->join('status_produk', 'produk.id_status = status_produk.id_status')
        //                     ->where('penjual.id_penjual = produk.id_penjual');
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
=======
>>>>>>> 9ab1435bfc82e79afb79a0e72a481f39f428c98c
}