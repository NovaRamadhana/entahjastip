<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Katalog extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('KatalogModel');
        $this->load->library('session');
    }

    function index(){
        $data['judul'] = 'Katalog';
        $data['produk'] = $this->KatalogModel->getKatalog();
        $data['userlogin'] = $this->session->userdata('logged_in');
        $this->load->view('katalog_v', $data);
    }
<<<<<<< HEAD
    
    function checkout()
    {
        $data['judul'] = 'pembayaran';
        $this->load->view('checkout_shipping');
    }
    
    function tambah_keranjang ($id){
        $produk = $this-> KatalogModel->find($id);

        $data = array(
            'id'      => $produk->id_produk,
            'qty'     => 1,
            'price'   => $produk->harga,
            'name'    => $produk->nama_produk,
    );
    
    $this->cart->insert($data);
    redirect('Katalog');
    }

    public function detail_keranjang(){
        $data['judul'] = 'Keranjang';
        $this->load->view('keranjang_v');
    }

    public function hapus_keranjang(){
        $this->cart->destroy();
        redirect("Katalog/detail_keranjang");

    }

=======
>>>>>>> 89945f3206e0d30d9d9157ce105a90fa40368a8a
}