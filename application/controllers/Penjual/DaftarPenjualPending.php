<?php

class DaftarPenjualPending extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Penjual/PenjualModel');
    }

    function index(){
        $data = [
            'judul' => 'Pendaftar Akun Penjual',
            'daftar_akun' => $this->PenjualModel->getAjuan('Proses')
        ];
        $this->load->view('Admin/penjualpending_v.php', $data);
    }

    function tolak($id){
        $data['status_ajuan'] = 'Ditolak';
        $result = $this->PenjualModel->updateAjuan($id, $data);
        if($result > 0){
            $this->session->set_flashdata('msg', 
            '<div class="alert alert-success" role="alert">
                Pengajuan '.$id.' ditolak
            </div>');
        }
        else{
            $this->session->set_flashdata('msg', 
            '<div class="alert alert-danger" role="alert">
                Gagal mengubah.
            </div>' );
        }
        redirect(base_url('Penjual/DaftarPenjualPending'));
    }

    function terima($id){
        $data['status_ajuan'] = 'Diterima';
        $result = this->PenjualModel->updateAjuan($id, $data);
        if($result > 0){
            $this->session->set_flashdata('msg', 
            '<div class="alert alert-success" role="alert">
                Data '.$id.' berhasil terhapus
            </div>');
        }
        else{
            $this->session->set_flashdata('msg', 
            '<div class="alert alert-danger" role="alert">
                Data belum terhapus
            </div>' );
        }
        redirect(base_url('Penjual/DaftarPenjualPending'));
    }
}