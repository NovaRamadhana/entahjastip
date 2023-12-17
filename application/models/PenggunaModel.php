<?php

class PenggunaModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function getOne($data){
        return $this->db    ->where('email', $data['email'])
                            ->get('pengguna');
    }

    function cekId($id){
        $query = $this->db  ->where('id_user', $id)
                            ->get('pengguna');

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function insert($data){
        $this->db->insert('pengguna', $data);
    }
}