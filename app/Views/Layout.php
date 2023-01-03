<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>REKAM MEDIS | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url() ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url() ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url() ?>/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url() ?>/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url() ?>/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/plugins/select2-4.1/css/select2.min.css">


</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="<?= base_url() ?>/dist/img/image_2022-11-04_194911530-removebg-preview.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">REKAM MEDIS</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url() ?>/dist/img/lisa.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?= session()->get('nama') . " | " . session()->get('poli') ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <?php if (session()->get('role') == 'Admin') : ?>
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Pasien
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('pasien') ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Daftar Pasien</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('pasien/add') ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tambah Pasien</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Poli
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('poli') ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Daftar Poli</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('poli/add') ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tambah Poli</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Petugas Medis
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('petugas_medis') ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Daftar Petugas Medis</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('petugas_medis/add') ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tambah Petugas Medis</p>
                    </a>
                  </li>
                </ul>
              </li>
            <?php endif; ?>
            <?php if (session()->get('role') == 'Perawat') : ?>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Rekam Medis
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('rekammedis') ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Daftar Rekam Medis</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('rekammedis/add') ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tambah Rekam Medis</p>
                    </a>
                  </li>
                <?php endif ?>
                <?php if (session()->get('role') == 'Dokter') : ?>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        Rekam Medis
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="<?= base_url('diagnosa') ?>" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Daftar Rekam Medis</p>
                        </a>
                      </li>

                      </p>
                      </a>
                  </li>
                <?php endif ?>
                </ul>
              <li class="nav-item">
                <a href="<?= base_url('logout') ?>" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Logout
                  </p>
                </a>
              </li>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
            </div><!-- /.col -->
            <div class="col-sm-6">

            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content" style="padding:20px; min-height:100vh; background-image: url('/klinik.jpg'); ">
        <div class="container-fluid">
          <?= $this->renderSection('views'); ?>
          <!-- Small boxes (Stat box) -->

          <!-- /.card -->
      </section>
      <!-- /.Left col -->
      <!-- right col (We are only adding the ID to make the widgets sortable)-->
      <section class="col-lg-5 connectedSortable">
        <!-- /.card -->
      </section>
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url() ?>/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url() ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="<?= base_url() ?>/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="<?= base_url() ?>/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="<?= base_url() ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="<?= base_url() ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?= base_url() ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?= base_url() ?>/plugins/moment/moment.min.js"></script>
  <script src="<?= base_url() ?>/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?= base_url() ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="<?= base_url() ?>/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url() ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>/dist/js/adminlte.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script src="<?= base_url() ?>/plugins/select2-4.1/js/select2.min.js"></script>

  <!-- AdminLTE for demo purposes -->
  <!-- <script src="dist/js/demo.js"></script> -->
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- <script src="dist/js/pages/dashboard.js"></script> -->

  <script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
      $('#pasien_id').select2({
        placeholder: "select a Pasien"
      })
    });
  </script>
</body>

</html>