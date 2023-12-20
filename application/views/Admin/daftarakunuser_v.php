<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $judul ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

</head>
<body id="page-top" >
    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php $this->load->view('Admin/adminsidebar_v'); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Daftar Akun</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Akun Aktif</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="align-middle" >
                                            <th>ID User</th>
                                            <th>Username</th>
                                            <th>E-mail</th>
                                            <th>Created Date</th>
                                            <th>last Login</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID User</th>
                                            <th>Username</th>
                                            <th>E-mail</th>
                                            <th>Created Date</th>
                                            <th>last Login</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($daftar_akun as $data){ ?>
                                        <tr>
                                            <td><?php echo $data->id_user ?></td>
                                            <td><?php echo $data->username ?></td>
                                            <td><?php echo $data->email ?></td>
                                            <td><?php echo $data->created_date ?></td>
                                            <td><?php echo $data->last_login ?></td>
                                            <!-- <td class="d-flex justify-content-between" >
                                                <a href="#" class="btn btn-warning btn-icon-split btn-sm">
                                                    <span class="icon text-white-20">
                                                        <i class="fas fa-edit"></i>
                                                    </span>
                                                    <span class="text">Edit</span>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-icon-split btn-sm">
                                                    <span class="icon text-white-20">
                                                        <i class="fas fa-trash"></i>
                                                    </span>
                                                    <span class="text">Delete</span>
                                                </a>
                                            </td> -->
                                        </tr>
                                        <?php }; ?>
                                    <tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    
    
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/js/sb-admin-2.min.js'); ?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('vendor/chart.js/Chart.min.js'); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/js/demo/chart-area-demo.js'); ?>"></script>
    <script src="<?= base_url('assets/js/demo/chart-pie-demo.js'); ?>"></script>

    <script src="https://kit.fontawesome.com/05aa69f7a4.js" crossorigin="anonymous"></script>
</body>