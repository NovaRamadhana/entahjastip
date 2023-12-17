<?php

class AdminModel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

    function getOne($data){
        return $this->db    ->where('username_admin', $data['username_admin'])
                            ->where('password', $data['password'])
                            ->get('admin');
    }
}