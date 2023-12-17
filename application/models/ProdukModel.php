<?php

class ProdukModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function countProduk(){
        return $this->db->count_all('produk');
    }
}