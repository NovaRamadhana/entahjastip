<?php

class Daftarbelanja extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('PesananModel');
        //$this->load->library('session');
    }

    function index(){
        if(isset($this->session->userdata('logged_in')['login'])){
            $logged_in = $this->session->userdata('logged_in');
            if(isset($logged_in['admin'])){
                $data = [
                    'belanja' => $this->PesananModel->getPesanan(),
                ];
            } else {
                $data = [
                    'belanja' => $this->PesananModel->getPesananId($logged_in['id_user']),
                ];
            }
            $ata['judul'] = 'Daftar Belanja';
            $this->load->view('Admin/daftarbelanja_v.php', $data);
        } else redirect(base_url());
    }

    function detailpesan($id){
        if(isset($this->session->userdata('logged_in')['login'])){
            $logged_in = $this->session->userdata('logged_in');
            if(isset($logged_in['admin'])){
                $data = [
                    'detail_belanja' => $this->PesananModel->getDetailPesanan($id),
                ];
            } else {
                $data = [
                    'detail_belanja' => $this->PesananModel->getDetailPesanan($id),
                ];
            }
            $this->load->view('Admin/detailpesan_v.php', $data);
        } else redirect(base_url());
    }

    function hapus($id){
        $result = $this->PesananModel->delete($id);
        if($result > 0){
            $this->session->set_flashdata('msg', 
            '<div class="alert alert-success" role="alert">
                Daftar Belanja dengan ID '.$id.' terhapus~!
            </div>');
        }
        else{
            $this->session->set_flashdata('msg', 
            '<div class="alert alert-danger" role="alert">
                Gagal menghapus.
            </div>' );
        }
        redirect(base_url('Penjual/Daftarbelanja'));
    }
}