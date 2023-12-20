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
        <style>
            body{
    
    background-color:#B3E5FC;
    border-radius: 10px;

}


.card{
  width: 400px;
  border: none;
  border-radius: 10px;
   
  background-color: #fff;
}

.stats{

      background: #f2f5f8 !important;

    color: #000 !important;
}
.articles{
  font-size:10px;
  color: #a1aab9;
}
.number1{
  font-weight:500;
}
.followers{
    font-size:10px;
  color: #a1aab9;

}
.number2{
  font-weight:500;
}
.rating{
    font-size:10px;
  color: #a1aab9;
}
.number3{
  font-weight:500;
}
        </style>
    </head>

    <body>
    <div class="container mt-5 d-flex justify-content-center">

<div class="card p-3">

    <div class="d-flex align-items-center">

        <div class="image">
    <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="155" >
    </div>

    <div class="ml-3 w-100">
        
       <h4 class="mb-0 mt-0"><?= $nama ?></h4>

       <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">

        <div class="d-flex flex-column">

            <span class="articles">Pesanan</span>
            <span class="number1">5</span>
            
        </div>
        
        <div class="d-flex flex-column">

            <span class="articles">Status Akun</span>
            <span class="number1"><?= $status ?></span>
            
        </div>
           
       </div>


       <div class="button mt-2 d-flex flex-row align-items-center">

        <a class="btn btn-primary btn-sm" href="<?= base_url('Home') ?>">Kembali</a>


           
       </div>


    </div>

        
    </div>
    
</div>
 
</div>
    </body>