<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request-Frorm</title>
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets\node_modules\bootstrap\dist\css\bootstrap.min.css">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%), url('../../assets/img/bg-masthead.jpg');
        background-size: cover;
    }

    .container {
        position: relative;
        max-width: 700px;
        width: 100%;
        background: #fff;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .container header {
        font-size: 1.5rem;
        color: #333;
        font-weight: 500;
        text-align: center;
    }

    .container .form {
        margin-top: 30px;
    }

    .form .input-box {
        width: 100%;
        margin-top: 20px;
    }

    .input-box label {
        color: #333;
    }

    .form .input-box input {
        position: relative;
        height: 50px;
        width: 100%;
        outline: none;
        font-size: 1rem;
        color: #707070;
        margin-top: 8px;
        border: 1px solid #ddd;
        border-radius: 6px;
        padding: 0 15px;
    }

    .form .column {
        display: flex;
        column-gap: 15px;
    }

    .form button {
        height: 55px;
        width: 100%;
        background-color: #f4623a;
        margin-top: 20px;
    }
</style>

<body>
    <section class="container">
        <?= $this->session->flashdata('msg');?>
        <header>Request Form</header>
        <form name="form-request" method="post" action="<?php echo base_url('Request/insert') ?>" class="form">
            <!-- informasi barang  -->
            <!-- <div class="input-box">
                <label for="#">ID Request</label>
                <input type="text" name="id_request"  placeholder="Masukkan Nama Barang">
            </div> -->
            
            <div class="input-box">
                <label for="#">Nama Produk</label>
                <input type="text" name="nama_produk"  placeholder="Masukkan Nama Barang">
            </div>

            <div class="input-box">
                <label for="#">Deskripsi Produk</label>
                <input type="text" name="deskripsi_produk" placeholder="Masukkan Spesifik Barang">
            </div>

            <div class="input-box">
                <label for="#">Alamat Produk</label>
                <input type="text" name="alamat_produk" placeholder="Masukkan Spesifik Barang">
            </div>

            <div class="column">
                <!-- <div class="input-box">
                    <label for="#">Merk Produk</label>
                    <input type="text" name="alamat_produk" placeholder="Masukkan Merk Barang">
                </div> -->

                <div class="input-box">
                    <label for="#">Link Gambar Produk</label>
                    <input type="text" name="link_produk" placeholder="Masukkan Link Gambar Barang">
                </div>
            </div>

            <!-- <div class="input-box">
                <label for="#">Jumlah Produk</label>
                <input type="number" name="jumlah_produk" placeholder="Masukkan Jumlah Barang">
            </div> -->

            <!-- infromasi pembeli -->
            <!-- <div class="input-box">
                <label for="#">Nama Penerima</label>
                <input type="text" placeholder="Masukkan Nama Penerima" value="acaya" readonly>
            </div>

            <div class="input-box">
                <label for="#">Email</label>
                <input type="text" placeholder="Masukkan Email Penerima" value="acaya@gmail.com" readonly>
            </div>

            <div class="input-box">
                <label for="#">NO Telepon</label>
                <input type="number" placeholder="Masukkan No Telepon Penerima" value="089834345" readonly>
            </div> -->
            <button type="submit" name="kirim">KIRIM REQUEST</button>
        </form>
        <br>
            <a href="<?= base_url() ?>" class="btn btn-success" >Go Home</a>
    </section>

</body>

</html>