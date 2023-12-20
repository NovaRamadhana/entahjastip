<?php

class RiwayatTransaksi extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('TransaksiModel');
    }

    function index(){
        $logged_in = $this->session->userdata('logged_in');
        if(isset($logged_in)){
            if(isset($logged_in['admin'])){
                $data = [
                    
                ];
            } else {
                $data = [

                ];
            }
            $this->load->view('Admin/riwayattransaksi_v.php', $data);
        } else redirect(base_url());
    }
}