<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('commons/header');?>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Capaian</h3>
                  <a href="javascript:void(0);">View Report</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">Banyaknya Aktifitas per Tanggal Ops </span>
                    <!--<span>Capaian</span>-->
                  </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <!--<span class="text-success">
                      <i class="fas fa-arrow-up"></i> 12.5%
                    </span>
                    <span class="text-muted">Since last week</span>-->
                  </p>
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="timetotal-chart" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-danger"></i> Total waktu <Header></Header>
                  </span>

                  <span>
                    <!--<i class="fas fa-square text-gray"></i> Total-->
                  </span>
                </div>
              </div>
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Capaian</h3>
                  <a href="javascript:void(0);">View Report</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">Kd Butir vs Banyaknya Header</span>
                    <!--<span>Capaian</span>-->
                  </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <!--<span class="text-success">
                      <i class="fas fa-arrow-up"></i> 33.1%
                    </span>
                    <span class="text-muted">Since last month</span>-->
                  </p>
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="bar-chart" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> Banyaknya Header
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Total Header
                  </span>
                </div>
              </div>
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php $this->load->view('commons/footer');?>

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/assets/vendor/adminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/assets/vendor/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="/assets/vendor/adminLTE/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="/assets/vendor/adminLTE/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/assets/vendor/adminLTE/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/assets/js/dashboard/dashboardv2.js"></script>
<script>
  $.ajax({
    url:'/rincian/tgopstoamount',
    dataType:'json'
  })
  .done(res=>{
    console.log("Success retrieve data 3",res)
    reloadBarChart({
      kdbutirs:res.map(x=>{
      return(x.tgops) 
    }),
      data1:res.map(x=>{
      return(x.cnt) 
    }),
    componentid:"timetotal-chart",backgroundColor:'#ff00ff'
    })
  })
  .fail(err=>{
    console.log("Error retrieve data 3",err)
  })
  $.ajax({
    url:'/capaian/get_butirs',
    dataType:'json'
  })
  .done(res=>{
    console.log("Success get butirs",res)
  })
  .fail(err=>{
    console.log("Err get butirs",err)
  })
  getButirs = callback => {
    callback({"kdbutirs":["D2022","D2033","D2035"]})
  }



  getButirs(butirs=>{
    $.ajax({
    url:'/rincian/tgopstoamountdetail',
    dataType:'json',
    data:butirs,
    type:'post'
  })
  .done(res=>{
    console.log('ReS',res)
    console.log("butirs",butirs.kdbutirs.map(butir=>{
      return {"data":res.map(x=>{

        return (x['cnt'+butir])
      })}
    }))
    temp = butirs.kdbutirs.map(butir=>{
      return {"data":res.map(x=>{

        return (x['cnt'+butir])
      })}
    })

    chartParams = {
      kdbutirs:res.map(x=>{
      return(x.tgops) 
      }),
        data1:res.map(x=>{
        return(x.cntD2035) 
      }),
        data2:res.map(x=>{
        return(x.cntD2033) 
      }),
        data3:res.map(x=>{
        return(x.cntD2022) 
      }),
      componentid:"bar-chart",backgroundColor:'#007bff'
    }
    reloadBarChart(chartParams)
  })
  .fail(err=>{
    console.log('Error get datas',err)
  })

  })
</script>
</body>
</html>
