<?php

class Request extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('request_m');
	    $this->load->model('Navbar');
    }

    //menampilkan data mahasiswa
    function index()
    {
        //ambil data dari model
        $data['judul'] = "ReQuest Form";
        $data['request_produk'] = $this->request_m->get_request();
	    $data['kategori'] = $this->Navbar->getCategories();
        //ambil template tampilan dari view
        $this->load->view('request_v', $data);
    }

    // function insert()
    // {
    //     if ($this->input->post()) {
    //         $data_input_user = $this->input->post();
    //         //print_r($data_input_user);
    //         //exit;
    //         $result =  $this->TanamanModel->insert_tanaman($data_input_user);
    //         if ($result > 0) {
    //             //sukses
    //             $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
    //             Success! Data berhasil disimpan
    //           </div>
    //           ');
    //         } else {
    //             //err
    //             $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
    //             Error! Data gagal disimpan
    //           </div>
    //           ');
    //         }
    //         redirect('tanaman/index');
    //     } else {
    //         $data['judul'] = "INPUT DATA TANAMAN";
    //         $this->load->view('tanaman/v_form', $data);
    //     }
    // }

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
