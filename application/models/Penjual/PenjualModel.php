<?php

class PenjualModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function getAjuan($status){
        return $this->db->get_where('penjual', array('status_ajuan' => $status))->result();
    }

    function updateAjuan($id, $status){
        $this->db->update('penjual', $status, array('id_penjual' => $id));
        return $this->db->affected_rows();
    }

    function countPenjualPending(){
        return $this->db->where('status_ajuan', 'Proses')->get('penjual')->num_rows();
    }

    function countPenjualDiterima(){
        return $this->db->where('status_ajuan', 'Diterima')->get('penjual')->num_rows();
    }

    function delete($id){
        $this->db->delete('penjual', array('id_penjual' => $id));
        return $this->db->affected_rows();
    }
}