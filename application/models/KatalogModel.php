<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KatalogModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    public function getKatalog() {
        $query = $this->db->get('produk');
        return $query->result();
    }
}