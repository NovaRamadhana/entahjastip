<?php

class DaftarPenjualDitolak extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Penjual/PenjualModel');
    }

    function index(){
        $data = [
            'judul' => 'Akun Penjual Tertolak',
            'daftar_akun' => $this->PenjualModel->getAjuan('Ditolak')
        ];
        $this->load->view('Admin/penjualditolak_v.php', $data);
    }

    function terima($id){
        $data['status_ajuan'] = 'Diterima';
        $result = $this->PenjualModel->updateAjuan($id, $data);
        if($result > 0){
            $this->session->set_flashdata('msg', 
            '<div class="alert alert-success" role="alert">
                Data '.$id.' berhasil diterima
            </div>');
        }
        else{
            $this->session->set_flashdata('msg', 
            '<div class="alert alert-danger" role="alert">
                Pengubahan gagal
            </div>' );
        }
        redirect(base_url('Penjual/DaftarPenjualDitolak'));
    }

    function delete($id){
        $result = $this->PenjualModel->delete($id);
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
        redirect(base_url('Penjual/DaftarPenjualDitolak'));
    }
}