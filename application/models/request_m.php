<?php

class request_m extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_request()
    {
        //pakai RAW SQL
        //---------------
        // $sql = "SELECT * FROM mhs";
        // $data = $this->db->query($sql);
        // return $data->result();

        //pakai Query Builder
        return $this->db->get('request_produk')->result();
        // SELECT * FROM mhs
    }

    // function insert_tanaman($data)
    // {
    //     //$sql = "INSERT INTO mhs VALUES (?,?,?,?)";
    //     //$this->db->query($sql, array($data['nrp'], $data['nama'], $data['jenis_kelamin'], $data['alamat']));

    //     $insert_data = array(
    //         'kode' => $data['kode'],
    //         'nama' => $data['nama'],
    //         'kategori' => $data['kategori'],
    //         'tanggal_tanam' => $data['tanggal_tanam'],
    //         'ukuran' => $data['ukuran'],
    //         'jenis_pupuk' => $data['jenis_pupuk']
    //     );

    //     $this->db->insert('acaya_tanaman', $insert_data);
    //     return $this->db->affected_rows();
    // }

    // function get_one($kode)
    // {
    //     // $sql = "SELECT * FROM mhs WHERE nrp = ?";
    //     // $data = $this->db->query($sql, array($nrp));
    //     // return $data->result();

    //     //return $this->db->get_where('mhs', array('nrp' => $nrp))->result();
    //     $this->db->where('kode', $kode);
    //     return $this->db->get('acaya_tanaman')->result();
    // }

    // function update($data)
    // {
    //     // $sql = "UPDATE mhs 
    //     //         SET nama = ?, jenis_kelamin = ?, alamat = ? 
    //     //         WHERE nrp = ?";
    //     // $this->db->query($sql, array($data['nama'], $data['jenis_kelamin'], $data['alamat'], $data['nrp']));

    //     $data_update = array(
    //         'nama' => $data['nama'],
    //         'kategori' => $data['kategori'],
    //         'tanggal_tanam' => $data['tanggal_tanam'],
    //         'ukuran' => $data['ukuran'],
    //         'jenis_pupuk' => $data['jenis_pupuk']
    //     );

    //     $this->db->where('kode', $data['kode']);
    //     $this->db->update('acaya_tanaman', $data_update);
    // }

    // function delete($kode)
    // {
    //     // $sql = "DELETE FROM mhs WHERE nrp = ?";
    //     // $this->db->query($sql, array($nrp));

    //     $this->db->where('kode', $kode);
    //     $this->db->delete('acaya_tanaman');
    // }
}
