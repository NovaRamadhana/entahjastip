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
<<<<<<< HEAD
    
    public function find($id){
        $result =$this ->db->where('id_produk', $id)
                       ->limit(1)
                       ->get('produk');
        
        if($result->num_rows() >0){
            return  $result->row();
        }else{
            return array();
        }
    }
    
=======
>>>>>>> 89945f3206e0d30d9d9157ce105a90fa40368a8a
}