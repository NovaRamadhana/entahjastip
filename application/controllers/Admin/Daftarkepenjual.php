<?php

class Daftarkepenjual extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Penjual/PenjualModel');
    }

    function index(){
        $logged_in = $this->session->userdata('logged_in');
        
        if ($logged_in['user'] && $logged_in['penjual'] == false ){
            $data['hasil'] = $this->PenjualModel->cekDaftar($logged_in['user']);
            $this->load->view('Admin/daftarkepenjual_v.php', $data);
        } else redirect(base_url());
    }

    function insert(){
        $logged_in = $this->session->userdata('logged_in');
        $data = $this->input->post();
        $data['id_user'] = $logged_in['id_user'];
        $id_prefix = 'M';
        $number = 1;
        $tempId = $id_prefix.$number;
        while($this->PenjualModel->cekId($tempId)){
            $number++;
            $tempId = $id_prefix.$number;
        }
        $data['id_penjual'] = $tempId;
        $result = $this->PenjualModel->insert($data);
        if($result > 0){
            $this->session->set_flashdata('msg', 
            '<div class="alert alert-success" role="alert">
                Pengajuan atas nama '.$data['nama_pemilik'].' masuk~!
            </div>');
        }
        else{
            $this->session->set_flashdata('msg', 
            '<div class="alert alert-danger" role="alert">
                Gagal mengajukan.
            </div>' );
        }
        redirect(base_url('Penjual/Daftarkepenjual'));
    }

}