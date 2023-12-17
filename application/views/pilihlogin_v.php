<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title><?= $judul ?></title>
    <!-- <a href="<?php //echo site_url('controllers/login/index') ?>"></a> -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    <link href="assets\node_modules\bootstrap\dist\css\bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
  <link href="assets\css\login.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  
    <img class="mb-4" src="assets/img/portfolio/fullsize/akun.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Pilih login sebagai</h1>

    <a class="w-100 btn btn-lg btn-primary mb-1" href="<?= base_url('Login/pengguna') ?>">Pengguna</a>
    <a class="w-100 btn btn-lg btn-primary mb-1" href="<?= base_url('Login/admin') ?>">Admin</a>
    <br>
    <a class="w-50 btn btn-sm btn-outline-primary mb-1" href="<?= base_url() ?>">Kembali ke Home</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
</main>


    
  </body>
</html>
