<?php

class UserModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function get(){
        return $this->db->get('pengguna')->result();
    }
}