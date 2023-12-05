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
        <style>
            .pendiri {
              display: flex;
              justify-content: center;
            }
            
            .orang {
              margin: auto;
            }
            
            .orang img {
              width: 150px;
              height: 150px;
              border-radius: 50%;
            }
            
            .orang h5 {
              text-align: center;
              font-size: 12px;
              margin: 7px;
            }
            
            h4 {
              margin-bottom: 20px;
              display: flex;
              justify-content: center;
            }
        </style>
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <?php $this->load->view('navbarGuest_v')?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Kenalan Yuk</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Mengenal lebih dekat mengenai Entah Jastip</p>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Tentang Kami</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4"> Entah Jastip merupakan usaha yang di dirikan oleh pemuda-pemudi memiliki paras yang oke dan berakhlak mulia 
         mereka memutuskan untuk membangun usaha entah jastip ini pada 31 februari 2020 yang bergerak di bidang jasa 
        yang membantu pelanggan dalam pembelian makanan & minuman yang diinginkan tanpa perlu datang langsung 
        ke rumah makan / menunggu makanan hingga jadi di tempat. Hal ini akan memudahkan pelanggan dalam 
        memenuhi kebutuhan akan makanan dengan praktis dan mudah</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Layanan yang kami sediakan</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Kualitas Juara</h3>
                            <p class="text-muted mb-0">Kami memastikan kualitas hidangan untuk anda </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Akses Mudah</h3>
                            <p class="text-muted mb-0">Memberikan kemudahan dalam mengakses layanan kami</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Global</h3>
                            <p class="text-muted mb-0">Pesan dari mana saja dan kapan saja</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Made with Love</h3>
                            <p class="text-muted mb-0">Segenap hati pelayanan kami berikan kepada anda <3</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <h4>Sosok Hebat Pendiri Entah Jastip</h4>
        <div class="pendiri">

            <div class="orang">
            <img src="assets/img/portfolio/fullsize/cowok.jpg" alt="">
            <h5>Raihan Rafi Listyan Putra</h5>
            <h5>21081010226<h5>
            </div>
            
            <div class="orang">
            <img src="assets/img/portfolio/fullsize/cowok.jpg" alt="">
                <h5>Muhamad Fauzi</h5>
                <h5>21081010233<h5>
            </div>
            <div class="orang">
            <img src="assets/img/portfolio/fullsize/cowok.jpg" alt="">
                <h5>Muhammad Nova Ramadhana </h5>
                <h5>21081010235<h5>
            </div>
            <div class="orang">
            <img src="assets/img/portfolio/fullsize/cewek.jpg" alt="">
                <h5>Acaya Fazrin</h5>
                <h5>21081010236<h5>
            </div>
            <div class="orang">
            <img src="assets/img/portfolio/fullsize/cowok.jpg" alt="">
                <h5>Firman Rizky Ramadhan</h5>
                <h5>21081010238<h5>
            </div>
          </div> 
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2023 - Entah Jastip</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!--<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>-->
    </body>
</html>
