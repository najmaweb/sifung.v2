<!DOCTYPE html>
<html lang="en">
  <?php $this->load->view("commons/header");?>
  <body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php $this->load->view("commons/navbar");?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view("commons/sidebar");?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li><button type="button" class="btn btn-success btn-block" id="btnAddRequest" data-toggle="modal" data-target="#modal-penambahan">
                <i class="fa fa-plus"></i> &nbsp;Penambahan</button>
              </li>
              &nbsp;
              <li><button type="button" class="btn btn-warning btn-block" id="btnLogout" data-toggle="modal" data-target="#modal-penambahan">
                <img src="/assets/vendor/adminLTE/square-up-right-solid.svg" alt="" srcset="" width="20px" height="20px">
                &nbsp;Keluar</button>
              </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Capaian</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="capaian" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Pelaksana</th>
                    <th>Kd Butir</th>
                    <th>Target</th>
                    <th>Periode</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>D.1.001.1</td>
                    <td></td>
                    <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-default">Pilih Submenu</button>
                      <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="#">View</a>
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Hapus</a>
                      </div>
                    </div>

                    </td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Pelaksana</th>
                    <th>Kd Butir</th>
                    <th>Target</th>
                    <th>Periode</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view("commons/footer");?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

<?php $this->load->view("frontend/modal-penambahan");?>
<script>let curuser='<?php echo $_SESSION['user']?>'</script>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="/assets/vendor/adminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/vendor/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="/assets/vendor/adminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/vendor/adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/vendor/adminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/vendor/adminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/assets/vendor/adminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/assets/vendor/adminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/assets/vendor/adminLTE/plugins/jszip/jszip.min.js"></script>
<script src="/assets/vendor/adminLTE/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/assets/vendor/adminLTE/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/assets/vendor/adminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/assets/vendor/adminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/assets/vendor/adminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/vendor/adminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/assets/vendor/adminLTE/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#capaian").DataTable({
//      "responsive": true, "lengthChange": false, "autoWidth": false,
      "ajax":'/capaian/getdatas',
      "columns": [
        {"data":"pelaksana"},
        {"data":"kdbutir"},
        {"data":"target"},
        {"data":"period"},
      ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
    
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

/*
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

*/
  });
</script>
<script src="/assets/js/commons.js"></script>
<script src='/assets/js/list.js'></script>
</body>
</html>
