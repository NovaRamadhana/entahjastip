<?php

class PenjualModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function getAjuan($status){
        return $this->db->get_where('penjual', array('status_ajuan' => $status))->result();
    }

    function cekonePenjualDiterima($atribut, $data){
        return $this->db  ->select('*')
                            ->join('pengguna', 'pengguna.id_user = penjual.id_user')
                            ->where('pengguna.'.$atribut, $data)
                            ->where('penjual.status_ajuan', 'Diterima')
                            ->get('penjual')->num_rows() > 0;

        // if ($query->affected_rows() > 0) {
        //     return true;
        // } else {
        //     return false;
        // }
    }

    function getonePenjualDiterima($atribut, $data){
        return $this->db    ->select('*')
                            ->join('pengguna', 'pengguna.id_user = penjual.id_user')
                            ->where('pengguna.'.$atribut, $data)
                            ->where('penjual.status_ajuan', 'Diterima')
                            ->get('penjual')->row();
    }

<<<<<<< HEAD
=======


>>>>>>> 89945f3206e0d30d9d9157ce105a90fa40368a8a
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

<<<<<<< HEAD
    function cekDaftar($id){
        $query = $this->db  ->where('id_user', $id)
                            ->get('penjual');

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function cekId($id){
        $query = $this->db  ->where('id_penjual', $id)
                            ->get('penjual');

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function insert($data){
        $this->db->insert('penjual', $data);
    }

=======
>>>>>>> 89945f3206e0d30d9d9157ce105a90fa40368a8a
    function delete($id){
        $this->db->delete('penjual', array('id_penjual' => $id));
        return $this->db->affected_rows();
    }
}