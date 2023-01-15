<!DOCTYPE html>
<html lang="en">
  <?php $this->load->view("commons/header");?>
  <link rel="stylesheet" href="/assets/vendor/adminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="/assets/vendor/adminLTE/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="/assets/vendor/adminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <style>
    #capaian thead tr th{
      text-align: center;
    }
    #capaian tfoot tr th{
      text-align: center;
    }
    .dt-right{
      text-align:center;
    }
    .btn-sifung{
      width: 100px;
    }
    @media screen and (max-width:800px) {
      .taksi{
        display:none;
      }
      .dt-right{
        text-align: center;
        width:max-content;
      }
      .btn-sifung{
        width: 80px;
      }
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
                <h3 class="card-title">Daftar Capaian</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="capaian" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="5%">ID</th>
                    <th width="5%">Kode</th>
                    <th width="50">Butir Kegiatan</th>
                    <th width="5%">Target</th>
                    <th width="5%">Capaian</th>
                    <th width="5%">Persentase</th>
                    <th width="5%">Total AK</th>
                    <th width="25%" class="taksi">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Kode</th>
                    <th>Butir Kegiatan</th>
                    <th>Target</th>
                    <th>Capaian</th>
                    <th>Persentase</th>
                    <th>Total AK</th>
                    <th class="taksi">Aksi</th>
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
<?php $this->load->view("capaian/modal-penambahan");?>
<?php $this->load->view("capaian/modal-konfirmasi");?>
<?php $this->load->view("commons/modal-notifikasi");?>
<?php $this->load->view("capaian/modal-edit");?>
<script>let curuser='<?php echo $_SESSION['user']?>'</script>
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
<script src="/assets/vendor/adminLTE/plugins/select2/js/select2.full.min.js"></script>

<script src="/assets/vendor/adminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<script src="/assets/vendor/adminLTE/plugins/inputmask/jquery.inputmask.min.js"></script>
<script src="/assets/vendor/adminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/vendor/adminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/assets/vendor/adminLTE/dist/js/demo.js"></script>
<!-- Page specific script -->
<script src="/assets/js/commons.js"></script>
<script src="/assets/js/validation.js"></script>
<script>var jjfg="<?php echo $_SESSION['jjfg']?>"</script>
<script>var jbfg="<?php echo $_SESSION['jbfg']?>"</script>
<script>
console.log('user',curuser)
console.log("lists.js loaded");
var tblcapaian = $("#capaian").DataTable({
    "responsive": true, "lengthChange": false, "autoWidth": false,
    "ajax":'/capaian/get_datas',
    "dom":"Bfrtip",
    "buttons":[
      {
          text: '<i class="fa fa-plus"></i> &nbsp; Penambahan',
          action: function ( e, dt, node, config ) {
            $('#modal-penambahan').modal();
          },
          attr:{class: "btn btn-success"}
      }
    ],
    "columns": [
      {"data":"id"},
      {"data":"kdbutir"},
      {"data":"nmbutir"},
      {"data":"target"},
      {"data":"bnyrincian"},
      {"data":"persentase"},
      {"data":"total"},
    ],
    "columnDefs": [ 
      {
          "targets": 7,
          "data": null,
          "defaultContent": "<button class='btnedit btn btn-warning btn-sifung'>Edit</button>&nbsp;<button class='btnremove btn btn-danger btn-sifung'>Hapus</button>&nbsp;<button class='btnkelola btn btn-primary btn-sifung'>Kelola</button>"
      },
      {"visible":false,targets:0},
      { width: "10px", targets: 7 },
      {className:"dt-right",targets: [4,5,6,7]}
     ]

  })
  $('#btnRemoveCapaian').click(function(){
    selected = $('#capaian tr.selected')
    console.log('selected',selected)
    idcapaian = tblcapaian.row(selected).data().id;
    crud.doAjax({
      url:'/capaian/remove',
      data:{id:idcapaian}
    },res=>{
      console.log('Result of removal',res)
      selected.remove();
    })

  });
  $('#capaian tbody').on('click','button.btnremove',function(){
    $('#capaian tbody tr').removeClass('selected')
    let x = $(this).stairUp({level:2})
    x.addClass('selected')
    console.log('selected 1',x)
    idcapaian = tblcapaian.row(x).data().id;
    console.log("data1",idcapaian)

    $('#modal-konfirmasi').modal();
  })
  $('#capaian tbody').on('click','button.btnkelola',function(){
    $('#capaian tbody tr').removeClass('selected')
    let x = $(this).stairUp({level:2})
    x.addClass('selected')
    console.log('selected 1',x)
    idcapaian = tblcapaian.row(x).data().id;
    console.log("data1",idcapaian)
    window.location.href = '/kegiatan/show/'+idcapaian
  })
$('#dtpmasapenilaianawal').datetimepicker({
format:'DD/MM/yyyy'
});
$('#dtpmasapenilaianakhir').datetimepicker({
format:'DD/MM/yyyy'
});
$('.dtp').datetimepicker({
format:'DD/MM/yyyy'
})
$("#test").click(function(){
console.log($('#dtpmasapenilaian').val())
})
$("#btnAddRequest").click(function(){
$('#modal-penambahan').modal();
});
$('[data-mask]').inputmask()
$("#capaian").on('click','tbody .btnedit',function(){
$('#capaian tbody tr').removeClass('selected')
let x = $(this).stairUp({level:2})
x.addClass('selected')
console.log('selected 1',x.html())
idcapaian = tblcapaian.row(x).data().id;
crud.doAjax({
  url:'/capaian/get_edit',
  data:{
    'id':idcapaian
  },
  type:'post'
},res=>{
  data = res.res.data
  console.log('selectedRowGot',res.res.data)
  console.log('Aawal',data[0].awal)
  $('#cmbEditButirKegiatan').val(data[0].kdbutir).trigger('change')
  $('#txtEditTarget').val(data[0].target)
  $('#dtpeditmasapenilaianawal').data('datetimepicker').date(data[0].awalen)
  $('#dtpeditmasapenilaianakhir').data('datetimepicker').date(data[0].akhiren)
  $('#modal-edit').modal()
})
})

</script>
<script src='/assets/js/capaian/list.js?v=1'></script>
</body>
</html>
