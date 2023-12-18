<?php defined('BASEPATH') OR exit('No direct script access allowed') ; ?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="<?= base_url() ?>">Entah Jastip</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('Profil') ?>">About</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('Request') ?>">Requests</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown">Category</a>
                    <ul class="dropdown-menu">
                        <?php foreach($kategori as $data){ ?>
                            <li><a class="dropdown-item" href="#"><?= $data->nama_kategori ?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('Contact') ?>">Contact</a></li>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9ab1435bfc82e79afb79a0e72a481f39f428c98c
		        <?php if(isset($userlogin)) { ?>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('Login/logout') ?>">Logout</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('Admin/Dashboard') ?>">Admin</a></li>
                <?php } else { ?>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('Login') ?>">Login</a></li>
                <?php } ?>      
<<<<<<< HEAD
=======
=======
		        <li class="nav-item"><a class="nav-link" href="<?= base_url('Login') ?>">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('Admin/Dashboard') ?>">Admin</a></li>
>>>>>>> 72b2bdac697103dc8c0d15379507f633cb78dab4
>>>>>>> 9ab1435bfc82e79afb79a0e72a481f39f428c98c
            </ul>
        </div>
    </div>
</nav>