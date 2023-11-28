<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Navbar extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    public function getCategories() {
        $query = $this->db->get('kategori_produk');
        return $query->result();
    }
}