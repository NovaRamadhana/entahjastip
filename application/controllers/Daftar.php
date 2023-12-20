<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('PenggunaModel');
        $this->load->model('Penjual/PenjualModel');
        $this->load->library('session');
    }
    function index(){
        if($this->input->post()){
            $data = $this->input->post();
            if(!empty($data['email'])){
                // Cek data daftar ke database
                $result = $this->PenggunaModel->cekLogin($data);

                if ($result == false){
                    // Mencari user_id tersedia
                    $userpre_id = 'U';
                    $number = 1;
                    $temp_id = $userpre_id.$number;
                    while ($this->PenggunaModel->cekId($temp_id)){
                        $number++;
                        $temp_id = $userpre_id.$number;
                    }
                    $data['id_user'] = $temp_id;
                    $this->PenggunaModel->insert($data);

                    // Set Data untuk Session
                    $userData = [
                        'login' => true,
                        'user' => true,
                        'id_user' => $temp_id,
                        'penjual' => $this->PenjualModel->getonePenjualDiterima('email', $data['email']),
                    ];

                    // Set session karena langsung login begitu berhasil
                    $this->session->set_userdata('logged_in', $userData);
                    redirect(base_url());
                } else {
                    $this->session->set_flashdata('msg', 
                    '<div class="alert alert-danger" role="alert">
                        Data sudah ada.
                    </div>' );
                    redirect(base_url('Daftar'));
                }
            }
        } else {
            $data['judul'] = 'Daftar';
            $this->load->view('Login/daftarpengguna_v', $data);
        }
    } 
    
    function penjual(){
        $data['judul'] = 'Daftar';
        $this->load->view('Login/daftarpenjual_v', $data);
    }
}