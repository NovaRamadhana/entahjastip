<?php defined('BASEPATH') OR exit('No direct script access allowed') ; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Keranjang </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="assets/css/styles.css" rel="stylesheet" />

        <style>
            html{
                height: 100%;
            }

            body{
                position: relative;
                margin: 0;
                min-height: 100%;
                padding-bottom: 8rem;
            }
            footer{
                position: absolute;
                right: 0;
                left: 0;
                bottom:0;
            }
        </style>
    </head>

    <body>


<!-- Ini Cart -->
<div class="container-fluid">
    <h4>Cart</h4>

   <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>NO</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total Belanja</th>
        </tr>

        <?php
        $no=1;
        foreach ($this->cart->contents() as $items) :?>
        <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $items['name'] ?></td> 
            <td><?php echo $items['qty'] ?></td> 
            <td>Rp.<?php echo number_format ($items['price'], 0, ',','.')  ?></td> 
            <td>Rp.<?php echo number_format ($items['subtotal'], 0, ',','.')  ?></td> 
        </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="4"></td>
            <td><?php echo number_format ($this->cart->total(), 0, ',','.')  ?></td>
        </tr>

    </table>

    <div align ="right">
        <a href="<?php echo base_url ('Katalog/hapus_keranjang')?>"><div class="btn btn-sm btn-danger">Hapus Cart</div></a>
        <a href="<?php echo base_url ('Katalog')?>"><div class="btn btn-sm btn-primary">Lanjut Belanja</div></a>
        <a href="<?php echo base_url ('Katalog/checkout')?>"><div class="btn btn-sm btn-primary">Lanjut Bayar</div></a>
        
    </div>

</div>

</body>

<!-- ini cart selesai -->


        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2023 - Entah Jastip</div></div>
        </footer>


        <!-- Bootstrap core JS-->
        <script src="assets\node_modules\bootstrap\dist\js\bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js"></script>

</html>