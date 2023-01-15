<!DOCTYPE html>
<html lang="en">
  <?php $this->load->view("commons/header");?>
  <link rel="stylesheet" href="/assets/vendor/adminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="/assets/vendor/adminLTE/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="/assets/vendor/adminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="/assets/vendor/adminLTE/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="/assets/vendor/adminLTE/plugins/toastr/toastr.min.css">

  <style>
    #rincian thead tr th{
      text-align: center;
    }
    #header tfoot tr th{
      text-align: center;
    }
    .dt-right{
      text-align:center;
    }
    .dt-center{
      text-align:center;
    }
    .btn-sifung{
      width: 100px;
    }
    div.row{
      margin-bottom: 15px;
    }
  </style>
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
                <h3 class="card-title_" id="rtest">Rincian Kegiatan</h3>
                <h5><?php echo '(' . $header->kdsubutir . ') ' . $header->butiranak;?></h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="rincian" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th></th>
                    <th>Tgl Operasional</th>
                    <th>No Operasional</th>
                    <th>Jenis Kegiatan</th>
                    <th>Media Pembawa</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  </tbody>
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
<?php $this->load->view("rincian/modal-konfirmasi");?>

<?php $this->load->view("rincian/modal-warning");?>
<script>let curuser='<?php echo $_SESSION['user']?>'</script>
<script>let kdsubutir='<?php echo $header->kdsubutir;?>'</script>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="/assets/vendor/adminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/vendor/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<link rel="stylesheet" href="/assets/vendor/adminLTE/plugins/daterangepicker/daterangepicker.css">

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
<script src="/assets/vendor/adminLTE/plugins/moment/moment.min.js"></script>

<script src="/assets/vendor/adminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<script src="/assets/vendor/adminLTE/plugins/inputmask/jquery.inputmask.min.js"></script>
<script src="/assets/vendor/adminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="/assets/vendor/adminLTE/plugins/select2/js/select2.full.min.js"></script>
<!-- SweetAlert2 -->
<script src="/assets/vendor/adminLTE/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="/assets/vendor/adminLTE/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/vendor/adminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/assets/vendor/adminLTE/dist/js/demo.js"></script>
<!-- Page specific script -->
<script src="/assets/js/commons.js"></script>
<script src="/assets/js/sifungalert.js"></script>
<script src="/assets/js/validation.js"></script>
<script>var jjfg="<?php echo $_SESSION['jjfg']?>"</script>
<script>var jbfg="<?php echo $_SESSION['jbfg']?>"</script>
<script>let urt=<?php echo $urt;?></script>
<script>let parent=<?php echo $parent;?></script>
<script>let kdbutir = "<?php echo $header->kdbutir;?>"</script>



<?php switch($header->kdsubutir){
  case "a":
    $this->load->view("rincian/modal-adda/main");
    $this->load->view("rincian/modal-edita/main");?>
    <script>
    </script>
    <script src='/assets/js/rincian/lista.js?v=6'></script>
    <?php
    break;
  case "b":?>
    <?php
    $this->load->view("rincian/modal-addb/main");
    $this->load->view("rincian/modal-editb/main");//bikin layar ga penuh
    ?>
    <script src='/assets/js/rincian/listb.js?v=10'></script>
    <?php
    break;
}?>

<?php switch($header->kdsubutir){
  case "a":
?>
  
  <?php break;?>
<?php case "b":?>

  <?php break;?>
<?php }?>
</body>
</html>
