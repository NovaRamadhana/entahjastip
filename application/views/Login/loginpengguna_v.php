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
  
    <link href="<?= base_url('assets\node_modules\bootstrap\dist\css\bootstrap.min.css') ?>" rel="stylesheet">

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
    <link href="<?= base_url('assets\css\login.css') ?>" rel="stylesheet">
  </head>
  <body class="text-center">
    <main class="form-signin w-100 m-auto">
      <form method='post' action="<?= base_url('Login/pengguna') ?>">
        <img class="mb-4" src="<?= base_url('assets/img/portfolio/fullsize/akun.png') ?>" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Login akun</h1>
        <?= $this->session->flashdata('msg');?>
        <!-- <div class="form-floating">
          <input type="text" class="form-control" id="emailUsername" name="emailUsername" placeholder="Email atau Username" required>
          <label for="emailUsername" id="emailUsenameLabel" >Email atau Username</label>
        </div> -->
        <div class="form-floating">
          <input type="text" class="form-control" id="" name="email" placeholder="Email" required>
          <label for="" id="" >Email</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
          <label for="floatingPassword">Password</label>
        </div>

        <input class="btn btn-primary btn-lg" type="submit" href="<?= base_url('Login/pengguna') ?>">
        <a class="btn btn-primary btn-lg" href="<?= base_url('Daftar') ?>">Daftar Akun</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
      </form>
    </main>
    <script src="<?= base_url('assets\node_modules\bootstrap\dist\js\bootstrap.bundle.min.js') ?>" ></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const emailUsernameInput = document.getElementById('emailUsername');
        const label = document.querySelector('[for="emailUsername"]');
        let oldCursorPosition = 0;

        emailUsernameInput.addEventListener('input', function() {
          const inputValue = this.value;
          oldCursorPosition = this.selectionStart;
          
          if(inputValue == ''){
            label.textContent = 'Email / Username';
            emailUsernameInput.setAttribute('type', 'text');
            emailUsernameInput.setAttribute('type', 'text');
            //emailUsernameInput.setAttribute('placeholder', 'Email atau Username');
          } else if (inputValue.includes('@')) {
            label.textContent = 'Email';
            emailUsernameInput.setAttribute('type', 'email');
            emailUsernameInput.setAttribute('name', 'email');
            //emailUsernameInput.setAttribute('placeholder', 'Email');
          } else {
            label.textContent = 'Username';
            emailUsernameInput.setAttribute('type', 'text');
            emailUsernameInput.setAttribute('name', 'id_user');
            //emailUsernameInput.setAttribute('placeholder', 'Username');
          }
        });
      });


    //   document.addEventListener('DOMContentLoaded', function() {
    //   const emailUsernameInput = document.getElementById('emailUsername');
    //   const inputTypeSelect = document.getElementById('inputType');

    //   emailUsernameInput.addEventListener('input', function() {
    //     const inputValue = this.value;
    //     const label = document.querySelector('[for="emailUsername"]');
    //     if (inputValue.includes('@')) {
    //       inputTypeSelect.value = 'email';
    //       label.textContent = 'Email';
    //       emailUsernameInput.setAttribute('type', 'email');
    //       emailUsernameInput.setAttribute('placeholder', 'Email');
    //     } else {
    //       inputTypeSelect.value = 'username';
    //       label.textContent = 'Username';
    //       emailUsernameInput.setAttribute('type', 'text');
    //       emailUsernameInput.setAttribute('placeholder', 'Username');
    //     }
    //   });

    //   // Pilih input default saat halaman dimuat
    //   inputTypeSelect.addEventListener('change', function() {
    //     const selectedOption = this.value;
    //     if (selectedOption === 'email') {
    //       emailUsernameInput.setAttribute('type', 'email');
    //       emailUsernameInput.setAttribute('placeholder', 'Email');
    //     } else if (selectedOption === 'username') {
    //       emailUsernameInput.setAttribute('type', 'text');
    //       emailUsernameInput.setAttribute('placeholder', 'Username');
    //     }
    //   });
    // });
    </script>
  </body>
</html>
