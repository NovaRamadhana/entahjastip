<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Entah Jastip</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?= base_url('Admin/Dashboard'); ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Akun
</div>
<li class="nav-item">
    <!-- <a class="nav-link" href="<?//= base_url('Admin/Profilakun'); ?>">
        <i class="fas fa-fw fa-light fa-user"></i>
        <span>Profil Akun</span>
    </a> -->
    <?php if(isset($this->session->userdata('logged_in')['user']) && $this->session->userdata('logged_in')['penjual'] == false) { ?>
        <a class="nav-link" href="<?= base_url('Admin/Daftarkepenjual'); ?>">
            <i class="fa-regular fa-fw fa-user"></i>
            <span>Daftar Menjadi Penjual</span>
        </a>
    <?php } ?>
    <?php if(isset($this->session->userdata('logged_in')['admin'])) { ?>
        <a class="nav-link" href="<?= base_url('Admin/Daftarakunuser'); ?>">
            <i class="fa-regular fa-fw fa-user"></i>
            <span>Daftar Akun User</span>
        </a>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePenjual"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Daftar Akun Penjual</span>
        </a>
        <div id="collapsePenjual" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Pilihan:</h6> -->
                <a class="collapse-item" href="<?= base_url('Penjual/DaftarPenjualDiterima'); ?>">
                    <i class="fas fa-fw fa-light fa-user"></i>
                    <span>Diterima</span>
                </a>
                <a class="collapse-item" href="<?= base_url('Penjual/DaftarPenjualDitolak'); ?>">
                    <i class="fas fa-fw fa-light fa-trash"></i>
                    <span>Ditolak</span>
                </a>
                <a class="collapse-item" href="<?= base_url('Penjual/DaftarPenjualPending'); ?>">
                    <i class="fas fa-fw fa-light fa-exclamation-triangle"></i>
                    <span>Pending</span>
                </a>
            </div>
        </div>
    <?php } ?>
</li>

<?php if (isset($this->session->userdata('logged_in')['admin']) || $this->session->userdata('logged_in')['penjual'] ) { ?>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Produk
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Admin/Daftarproduk'); ?>">
            <!-- <i class="fas fa-fw fa-light fa-card-shopping"></i> -->
            <i class="fa-solid fa-fw fa-seedling"></i>
            <span>Daftar Produk</span>
        </a>
    </li>

    <?php if (isset($this->session->userdata('logged_in')['admin'])) { ?>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Admin/Requestadmin'); ?>">
            <!-- <i class="fas fa-fw fa-light fa-card-shopping"></i> -->
            <i class="fa-solid fa-fw fa-list"></i>
            <span>Daftar Request</span>
        </a>
    </li>
    <?php } ?>
<?php } ?>

<!-- Divider -->
<hr class="sidebar-divider">

<div class="sidebar-heading">
    Belanjaan
</div>
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('Admin/Daftarbelanja'); ?>">
        <!-- <i class="fas fa-fw fa-light fa-card-shopping"></i> -->
        <i class="fa-solid fa-fw fa-cart-shopping"></i>
        <span>Daftar Belanja</span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Akses
</div>

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('Login/logout') ?>">
        <i class="fa-sharp fa-solid fa-door-open"></i>
        <span>Log Out</span>
    </a>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->