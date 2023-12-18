<?php

class PenjualModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function getAjuan($status){
        return $this->db->get_where('penjual', array('status_ajuan' => $status))->result();
    }

<<<<<<< HEAD
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



=======
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

>>>>>>> 9ab1435bfc82e79afb79a0e72a481f39f428c98c
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