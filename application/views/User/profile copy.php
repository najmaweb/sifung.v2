<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('commons/header');?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php $this->load->view('commons/navbar');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view('commons/sidebar');?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li>
                <button type="button" class="btn btn-danger btn-block" id="btnChangePassword">Ganti Password</button>
              </li>
              &nbsp;
              <li><button type="button" class="btn btn-primary btn-block" id="btnSaveProfile" data-toggle="modal" data-target="#modal-penambahan">
              <i class="fa fa-save"></i>
                &nbsp;Simpan</button>
              </li>
              &nbsp;
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="/assets/vendor/adminLTE/dist/img/AdminLTELogo.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $pegwdata->fnme;?></h3>

                <p class="text-muted text-center"><?php echo $pegwdata->jbtn;?></p>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Profile Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="cmbJabatanFungsional">Jabatan Fungsional</label>
                    <?php echo form_dropdown('jbfg',$fungsi,1,'id="cmbJabatanFungsional" class="form-control"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                  </div>
                  <div class="form-group">
                    <label for="cmbJenjangFungsional">Jenjang Fungsional</label>
                    <?php echo form_dropdown('jbfg',$jenjang,1,'id="cmbJenjangFungsional" class="form-control"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>






    <!-- /.col -->
        </div>
        <!-- /.row -->



        <!-- begin new row-->
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>

        <!-- end new row-->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('commons/footer');?>
  <?php $this->load->view('User/modal-gantipassword');?>
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/assets/vendor/adminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/vendor/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/vendor/adminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/assets/vendor/adminLTE/dist/js/demo.js"></script>
<script src="/assets/js/commons.js"></script>
<script src="/assets/vendor/adminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/vendor/adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script>unip="<?php echo $_SESSION['user'];?>"</script>
<script>
  /*$('#tblCapaian').DataTable({
    ajax:{
      url:'/profile/capai',
      //dataSrc:'staff'
    }
  });*/
  console.log("test ...",unip)
  $('#btnChangePassword').click(function(){
    console.log('call change password popup')
    $('#changePassword').modal()
  })
  $('#btnUpdatePassword').click(function(){
    if($('#txtpassword1').val()===$('#txtpassword2').val()){
      $.ajax({
        url:'/test3/resetpassword',
        type:'post',
        data:{
          unip:unip,
          password:$('#txtpassword1').val()
        },
        dataType:'json'
      })
      .done(res=>{
        console.log("Success",res)
        alert('Sukses mengganti Password')
      })
      .fail(err=>{
        console.log("Error",err)
      })
    }else{
      alert('Password yang anda isikan tidak sama')
    }
  })
</script>
</body>
</html>
