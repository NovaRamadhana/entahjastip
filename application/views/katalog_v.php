<?php defined('BASEPATH') OR exit('No direct script access allowed') ; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= $judul ?></title>
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
        <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    </head>
    <body>
        <!-- Navigation-->
        <?php $this->load->view('navbarGuest_v')?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Katalog Produk </h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Seseorang tidak bisa berpikir dengan baik, mencintai dengan baik, dan tidur nyenyak jika belum makan dengan baik.</p>
                        <!-- <a class="btn btn-primary btn-xl" href="<?= base_url('Profil') ?>">Find Out More</a> -->
                    </div>
                </div>
            </div>
        </header>
        <!-- product page -->
        <section>
            <div class="container py-5">
                <div class="row text-center">
                    <?php foreach ($produk as $data) : ?>
<<<<<<< HEAD
                        <div class="card mx-2 mb-3" style="width: 16rem;">
=======
                        <div class="card mb-5" style="width: 16rem;">
>>>>>>> 89945f3206e0d30d9d9157ce105a90fa40368a8a
                            <img src="<?php echo base_url().'/assets/img/katalog/'.$data->img ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $data->nama_produk ?></h5>
                                <small><?php echo $data->deskripsi ?></small><br>
                                <span class="badge text-bg-warning">Rp. <?php echo $data->harga ?></span><br><br>
<<<<<<< HEAD
                                <?php echo anchor ('Katalog/tambah_keranjang/' .$data->id_produk,'<div class="btn btn-primary">Add To Cart</div>')?>
=======
                                <a href="#" class="btn btn-primary">Add To Cart</a>
>>>>>>> 89945f3206e0d30d9d9157ce105a90fa40368a8a
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Ada hal yang ditanyakan? atau ada saran? Customer Service siap melayani 24 jam!</p>
                    </div>
                </div>
                
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                </div>
            </div>
        </section>
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
    </body>
</html>
