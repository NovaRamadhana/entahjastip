<?php

class ContactModel extends CI_Model{
    function __construct() {
        parent::__construct();
    }

    function insert($data){
        $this->db->insert('contact_msg', $data);
        return $this->db->affected_rows();
    }

    function cekID($id){
        $this->db->where('id_cmsg', $id);
        $query = $this->db->get('contact_msg');

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}