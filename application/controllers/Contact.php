<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Navbar');
        $this->load->model('ContactModel');
    }

    function index(){
        $data['judul'] = 'Contact';
        $data['kategori'] = $this->Navbar->getCategories();
        $this->load->view('contact_v', $data);
    }

    function send(){
        if($this->input->post()){
            $data = $this->input->post();
            unset($data['input_message']);
            $suff_id = 'CM';
            $number = 1;
            $temp_id = $suff_id.$number;

            while($this->ContactModel->cekID($temp_id)){
                $number++;
                $temp_id = $suff_id.$number;
            }
            $data['id_cmsg'] = $temp_id;

            $result = $this->ContactModel->insert($data);
            if($result > 0){
                $this->session->set_flashdata('msg', 
                    '<div class="alert alert-success" role="alert">
                        Pesan berhasil tersampaikan~ terima kasih, akan kami tanggapi dengan serius ^_^ !!
                    </div>');
                redirect(base_url('Contact'));
            } else {
                $this->session->set_flashdata('msg', 
                    '<div class="alert alert-danger" role="alert">
                        Pesanmu belum tersampaikan :( Coba lagi nanti~ ^^
                    </div>' );
                redirect(base_url('Contact'));
            }
        }

        redirect(base_url('Contact'));
    }
}