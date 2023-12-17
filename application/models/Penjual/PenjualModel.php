<?php

class PenjualModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function getAjuan($status){
        return $this->db->get_where('penjual', array('status_ajuan' => $status))->result();
    }

<<<<<<< HEAD
    function getonePenjualDiterima($atribut, $data){
        //$query = $this->db->get_where('penjual', array('id_user' => $id));

        $query = $this->db  ->select('*')
                            ->from('penjual')
                            ->join('pengguna', 'pengguna.id_user = penjual.id_user')
                            ->where('pengguna.'.$atribut, $data)
                            ->where('penjual.status_ajuan', 'Diterima');

        if ($query->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

=======
>>>>>>> 72b2bdac697103dc8c0d15379507f633cb78dab4
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