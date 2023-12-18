<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('PenggunaModel');
        $this->load->model('Penjual/PenjualModel');
        $this->load->model('Admin/AdminModel');
    }

    function index(){
        if(isset($_SESSION['logged_in'])){
            redirect(base_url());
        }
        $data['judul'] = 'Login';
        $this->load->view('pilihlogin_v', $data);
    }

    function pengguna(){
        if(isset($_SESSION['logged_in'])){
            redirect(base_url());
        }
        if($this->input->post()){
            $data = $this->input->post();
            if(!empty($data['email'])){
                $result = $this->PenggunaModel->getOne($data);
<<<<<<< HEAD
                $isPenjual = $this->PenjualModel->cekonePenjualDiterima('email', $data['email']);
=======
>>>>>>> 9ab1435bfc82e79afb79a0e72a481f39f428c98c
                if ($result->num_rows() > 0){
                    $userData = [
                        'login' => true,
                        'user' => true,
<<<<<<< HEAD
                        'penjual' => $isPenjual,
                        'id_user' => $result->row()->id_user,
                        'nama' => $result->row()->username,
                    ];
                    
                    if ($userData['penjual']){
                        $dataPenjual = $this->PenjualModel->getonePenjualDiterima('email', $data['email']);
                        $userData['id_penjual'] = $dataPenjual->id_penjual;
                    }

=======
                        'penjual' => $this->PenjualModel->getonePenjualDiterima('email', $data['email']),
                        'id_user' => $result->row()->id_user,
                        'nama' => $result->row()->username,
                    ];
>>>>>>> 9ab1435bfc82e79afb79a0e72a481f39f428c98c
                    $this->session->set_userdata('logged_in', $userData);
                    redirect(base_url());
                } else {
                    $this->session->set_flashdata('msg', 
                    '<div class="alert alert-danger" role="alert">
                        Data salah.
                    </div>' );
                    redirect(base_url('Login/pengguna'));
                }
            }
        } else {
            $data['judul'] = 'Login';
            $data = $this->load->view('Login/loginpengguna_v', $data);
        }
    }

    function penjual(){
        $data['judul'] = 'Login';
        $this->load->view('Login/loginpenjual_v', $data);
    }
    function admin(){
        if(isset($this->session->userdata('logged_in')['admin'])){
            $this->session->set_flashdata('msg', 
                    '<p>Sudah Login~</p>' );
            redirect(base_url());
        }
        if($this->input->post()){
            $data = $this->input->post();
            if(!empty($data['username_admin'])){
                $result = $this->AdminModel->getOne($data);
                if ($result->num_rows() > 0){
                    $userData = [
                        'login' => true,
                        'admin' => true,
                        'username_admin' => $result->username_admin,
                        'nama' => $result->nama,
                        'email' => $result->email
                    ];
                    $this->session->set_userdata('logged_in', $userData);
                    redirect(base_url());
                } else {
                    $this->session->set_flashdata('msg', 
                    '<div class="alert alert-danger" role="alert">
                        Akun tidak ada.
                    </div>' );
                    redirect(base_url('Login/admin'));
                }
            }
        } else {
            $data['judul'] = 'Login Admin';
            $this->load->view('Login/loginadmin_v', $data);
        }   
    }

    function logout(){
        $this->session->unset_userdata('logged_in');
        redirect(base_url());
    }
}