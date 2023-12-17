<?php

class DaftarPenjualDiterima extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Penjual/PenjualModel');
    }

    function index(){
        $data = [
            'judul' => 'Pendaftar Akun Penjual',
            'daftar_akun' => $this->PenjualModel->getAjuan('Diterima')
        ];
        $this->load->view('Admin/penjualditerima_v.php', $data);
    }

    function tolak($id){
        $data['status_ajuan'] = 'Ditolak';
        $result = $this->PenjualModel->updateAjuan($id, $data);
        if($result > 0){
            $this->session->set_flashdata('msg', 
            '<div class="alert alert-success" role="alert">
                Status akun penjual '.$id.' menjadi ditolak
            </div>');
        }
        else{
            $this->session->set_flashdata('msg', 
            '<div class="alert alert-danger" role="alert">
                Gagal mengubah.
            </div>' );
        }
        redirect(base_url('Penjual/DaftarPenjualDiterima'));
    }
}