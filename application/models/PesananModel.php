<?php

class PesananModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function countPesanan(){
        return $this->db->count_all('pesanan');
    }

<<<<<<< HEAD
    function hitungPendapatanKotor(){
        $query = $this->db  ->select('*, SUM(detail_pesanan.jumlah*produk.harga) as pendapatan_kotor,')
                            ->from('pesanan')
                            ->join('detail_pesanan', 'detail_pesanan.id_pesanan = pesanan.id_pesanan')
                            ->join('produk', 'produk.id_produk = detail_pesanan.id_produk')
                            // ->join('pesanan', 'detail_pesanan.id_pesanan = pesanan.id_pesanan')
                            // ->join('status_stok', 'produk.id_stok = status_stok.id_stok')
                            ->get();

        return $query->row();
    }

=======
>>>>>>> 89945f3206e0d30d9d9157ce105a90fa40368a8a
    function hitungPesanankePenjual(){
        $query = $this->db  ->select('SUM(detail_pesanan.jumlah) as total_pesanan, SUM(detail_pesanan.jumlah*produk.harga) as pendapatan_kotor,')
                            ->from('penjual')
                            ->join('produk', 'penjual.id_penjual = produk.id_penjual')
                            ->join('detail_pesanan', 'produk.id_produk = detail_pesanan.id_produk')
                            ->join('pesanan', 'detail_pesanan.id_pesanan = pesanan.id_pesanan')
                            ->join('status_stok', 'produk.id_stok = status_stok.id_stok')
                            ->group_by('penjual.id_penjual')
                            ->get();

        return $query->row();
    }

    function getPesanan(){
<<<<<<< HEAD
        $query = $this->db  ->select('pesanan.*, SUM(detail_pesanan.jumlah*produk.harga) as pengeluaran_pesanan')
                            ->join('detail_pesanan', 'detail_pesanan.id_pesanan = pesanan.id_pesanan')
                            ->join('produk', 'produk.id_produk = detail_pesanan.id_produk')
                            ->group_by('pesanan.id_pesanan')
                            ->get('pesanan');
=======
        $query = $this->db->get('pesanan');
>>>>>>> 89945f3206e0d30d9d9157ce105a90fa40368a8a

        return $query->result();
    }

    function getPesananId($id){
<<<<<<< HEAD
        $query = $this->db  ->select('pesanan.*, SUM(detail_pesanan.jumlah*produk.harga) as pengeluaran_pesanan')
                            ->join('detail_pesanan', 'detail_pesanan.id_pesanan = pesanan.id_pesanan')
                            ->join('produk', 'produk.id_produk = detail_pesanan.id_produk')
                            ->where('id_user', $id)
                            ->group_by('pesanan.id_pesanan')
                            ->get('pesanan');
=======
        $query = $this->db->where('id_user', $id)->get('pesanan');
>>>>>>> 89945f3206e0d30d9d9157ce105a90fa40368a8a

        return $query->result();
    }

    function getDetailPesanan($id){
<<<<<<< HEAD
        return $this->db    ->select('*, SUM(detail_pesanan.jumlah*produk.harga) as pengeluaran_detailpesanan')
                            ->join('produk', 'produk.id_produk = detail_pesanan.id_produk')
                            ->where('id_pesanan', $id)
                            ->group_by('produk.id_produk')
                            ->get('detail_pesanan')->result();
=======
        return $this->db    ->join('produk', 'produk.id_produk = detail_pesanan.id_produk')
                            ->where('id_pesanan', $id)->get('detail_pesanan')->result();
>>>>>>> 89945f3206e0d30d9d9157ce105a90fa40368a8a
    }

    function hitungPesanankePenjualId($id){
        $query = $this->db  ->select('SUM(detail_pesanan.jumlah) as total_pesanan, SUM(detail_pesanan.jumlah*produk.harga) as pendapatan_kotor,')
                            ->from('penjual')
                            ->join('produk', 'penjual.id_penjual = produk.id_penjual')
                            ->join('detail_pesanan', 'produk.id_produk = detail_pesanan.id_produk')
                            ->join('pesanan', 'detail_pesanan.id_pesanan = pesanan.id_pesanan')
                            ->join('status_stok', 'produk.id_stok = status_stok.id_stok')
                            ->where('penjual.id_penjual', $id)
                            ->group_by('penjual.id_penjual')
                            ->get();

        return $query->row();
    }

<<<<<<< HEAD
    function hitungPengeluaranId($id){
        $query = $this->db  ->select('SUM(detail_pesanan.jumlah) as total_pesanan, SUM(detail_pesanan.jumlah*produk.harga) as pengeluaran,')
                            ->from('pesanan')
                            ->join('detail_pesanan', 'pesanan.id_pesanan = detail_pesanan.id_pesanan')
                            ->join('produk', 'produk.id_produk = detail_pesanan.id_produk')
                            ->join('pengguna', 'pengguna.id_user = pesanan.id_user')
                            ->where('pesanan.id_user', $id)
                            ->group_by('pesanan.id_user')
                            ->get();

        return $query->row();
    }

    function countPesananId($id){
        return $this->db->where('id_user', $id)->count_all_results('pesanan');
    }

    function delete($id){
        $this->db->delete('pesanan', array('id_pesanan' => $id));
    }
=======
    function countPesananId($id){
        return $this->db->where('id_user', $id)->count_all_results('pesanan');
    }
>>>>>>> 89945f3206e0d30d9d9157ce105a90fa40368a8a
}