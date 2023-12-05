<?php

class Request extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('RequestModel');
    }

    //menampilkan data mahasiswa
    function index()
    {
        //ambil data dari model
        // $data['judul'] = "ReQuest Form";
        $data['request_produk'] = $this->RequestModel->get_request();
        //ambil template tampilan dari view
        $this->load->view('request_v', $data);
    }

    function insert()
    {
        if ($this->input->post()) {
            $data_input_user = $this->input->post();
            //print_r($data_input_user);
            //exit;

            $suff_id = 'RQ';
            $number = 1;
            $temp_id = $suff_id.$number;

            while($this->RequestModel->cekID($temp_id)){
                $number++;
                $temp_id = $suff_id.$number;
            }
            $data_input_user['id_request'] = $temp_id;

            $result =  $this->RequestModel->insert_request($data_input_user);
            if ($result > 0) {
                //sukses
                $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
                Success! Data berhasil disimpan
              </div>
              ');
            } else {
                //err
                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                Error! Data gagal disimpan
              </div>
              ');
            }
            redirect('Request');
        } else {
            // $data['judul'] = "WEB HOSTING";
            redirect('Request');
        }

        // $this->request_m->insert_request($this->input->post);
        // redirect('Request');
    }

    // public function update($kode = null)
    // {
    //     if ($this->input->post()) {
    //         //proses update
    //         $update_data = $this->input->post();
    //         $this->TanamanModel->update($update_data);
    //         redirect('tanaman');
    //     } else {
    //         $data['judul'] = "UPDATE DATA TANAMAN";
    //         $data['tanaman'] = $this->TanamanModel->get_one($kode);
    //         $this->load->view('tanaman/v_update', $data);
    //     }
    // }

    // function delete($kode)
    // {
    //     $this->TanamanModel->delete($kode);
    //     redirect('tanaman');
    // }
}
