<?php

class PenggunaModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function getOne($data){
        return $this->db    ->where('email', $data['email'])
<<<<<<< HEAD
                            ->where('password', $data['password'])
=======
>>>>>>> 9ab1435bfc82e79afb79a0e72a481f39f428c98c
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