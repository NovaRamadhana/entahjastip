<?php

class PesananModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function countPesanan(){
        return $this->db->count_all('pesanan');
    }
}