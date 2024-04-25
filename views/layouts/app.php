<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIYUDIS | <?= $this->renderSection('title') ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <?= $this->renderSection('style') ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      <div class="user-panel d-flex">
        <div class="image">
          <img src="<?= base_url('assets/img/default.png') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block warna-ketiga">Admin FTI</a>
        </div>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4 bg-warna">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link pb-0 mb-0">
      <img src="<?= base_url('assets/img/logo-fti.png') ?>" alt="Logo" class="brand-image img-circle elevation-3 border">
      <span class="brand-text font-weight-light">
      <div style="font-size: 12px; color: black; font-weight: bold">Fakultas Teknologi Industri</div>
      <div style="font-size: 10px; color: black; font-weight: bold">Sistem Informasi Manajeman Yudisium</div>
    </span>
    <hr>
    </a>

    <?= $this->include('layouts/menu_mhs') ?>
    <?= $this->include('layouts/menu_fti') ?>
    <?= $this->include('layouts/menu_pustaka') ?>
    <?= $this->include('layouts/menu_keuangan') ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper pt-5 mt-3">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $this->renderSection('title') ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a class="warna-ketiga" href="#">Dashboard</a></li>
              <li class="breadcrumb-item active"><?= $this->renderSection('title') ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <?= $this->renderSection('content') ?>

    </div>
  <!-- /.content-wrapper -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Modal Content Goes Here
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
          <!-- Additional buttons can be added here -->
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Berkas -->
  <div class="modal fade" id="modalBerkas" tabindex="-1" role="dialog" aria-labelledby="modalBerkasLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalBerkasLabel">Berkas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <embed src="<?= base_url('assets/img/logo-fti.png') ?>" type="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
          <!-- Additional buttons can be added here -->
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Detail Berkas -->
  <div class="modal fade" id="detailBerkas" tabindex="-1" role="dialog" aria-labelledby="detailBerkasLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detailBerkasLabel">Detail Berkas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <embed src="<?= base_url('assets/img/logo-fti.png') ?>" type="">
          <embed src="<?= base_url('assets/img/logo-fti.png') ?>" type="">
          <embed src="<?= base_url('assets/img/logo-fti.png') ?>" type="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
          <!-- Additional buttons can be added here -->
        </div>
      </div>
    </div>
  </div>

    <footer class="main-footer fixed-bottom">
        <strong>Copyright &copy; 2024 <a href="#">SIYUDIS</a>.</strong> All rights reserved.
    </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/jszip/jszip.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/pdfmake/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/pdfmake/vfs_fonts.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/dist/js/adminlte.min.js') ?>"></script>
<script src="<?= base_url('assets/js/script.js') ?>"></script>
<!-- Page specific script -->
<script>
    
$(document).ready(function() {
  var table = $('#example1').DataTable({
    "responsive": false,
    "lengthChange": false,
    "buttons": [{
                            extend: 'copy',
                            text: '<i class="fas fa-copy"></i> Copy',
                            className: 'btn btn-dark mb-3',
                            exportOptions: {
                                columns: [':not(:last-child)']
                            },
                        },
                        {
                            extend: 'csv',
                            text: '<i class="fas fa-file-csv"></i> CSV',
                            className: 'btn btn-dark mb-3',
                            exportOptions: {
                                columns: [':not(:last-child)']
                            },
                        },
                        {
                            extend: 'excel',
                            text: '<i class="fas fa-file-excel"></i> Excel',
                            className: 'btn btn-dark mb-3',
                            exportOptions: {
                                columns: [':not(:last-child)']
                            },
                        },
                        {
                            extend: 'pdf',
                            text: '<i class="fas fa-file-pdf"></i> PDF',
                            className: 'btn btn-dark mb-3',
                            exportOptions: {
                                columns: [':not(:last-child)']
                            },
                        },
                        {
                            extend: 'print',
                            text: '<i class="fas fa-print"></i> Print',
                            className: 'btn btn-dark mb-3',
                            exportOptions: {
                                columns: [':not(:last-child)']
                            },
                        },
                        {
                            extend: 'colvis',
                            text: '<i class="fas fa-eye"></i> Colvis',
                            className: 'btn btn-dark mb-3',
                            exportOptions: {
                                columns: [':not(:last-child)']
                            }
                        }
                    ],
    "order": [[4, 'asc']],
    "columnDefs": [
      { "targets": [4], "orderable": false }
    ]
  });

  $('#filterStatus').on('change', function() {
    var val = $(this).val();
    table.column(5).search(val ? '^' + val + '$' : '', true, false).draw();
  });
  table.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});
</script>
<?= $this->renderSection('script') ?>
</body>
</html>

