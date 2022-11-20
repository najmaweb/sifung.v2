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
                    <span class="text-bold text-lg">Kd Butir vs Total waktu </span>
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
<script>
  reloadBarChart = obj => {
    var ticksStyle = {
    fontColor: '#495057',
    fontStyle: 'bold'
  }
    var mode = 'index'
    var intersect = true

    var $barChart = $('#'+obj.componentid)
  // eslint-disable-next-line no-unused-vars
  var barChart = new Chart($barChart, {
    type: 'bar',
    data: {
      labels: obj.kdbutirs,
      datasets: [
        {
          backgroundColor: obj.backgroundColor,
          borderColor: '#007bff',
          data: obj.data1
        },
        {
          backgroundColor: '#ced4da',
          borderColor: '#ced4da',
          data: obj.data2
        }
      ]
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        mode: mode,
        intersect: intersect
      },
      hover: {
        mode: mode,
        intersect: intersect
      },
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          // display: false,
          gridLines: {
            display: true,
            lineWidth: '4px',
            color: 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks: $.extend({
            beginAtZero: true,
            callback: function (value) {
              return value
            }
          }, ticksStyle)
        }],
        xAxes: [{
          display: true,
          gridLines: {
            display: false
          },
          ticks: ticksStyle
        }]
      }
    }
  })

  }
  $.ajax({
    url:'/capaian/get_datas3',
    dataType:'json'
  })
  .done(res=>{
    console.log("Success retrieve data 3",res)
    //timetotal-chart


    reloadBarChart({
      kdbutirs:res.data.map(x=>{
      return(x.kdbutir) 
    }),
      data1:res.data.map(x=>{
      return(x.x) 
    }),
    componentid:"timetotal-chart",backgroundColor:'#ff00ff'
    })



  })
  .fail(err=>{
    console.log("Error retrieve data 3",err)
  })
  $.ajax({
    url:'/capaian/get_datas',
    dataType:'json'
  })
  .done(res=>{
    reloadBarChart({
      kdbutirs:res.data.map(x=>{
      return(x.kdbutir) 
    }),
      data1:res.data.map(x=>{
      return(x.bnyheader) 
    }),
      data2:res.data.map(x=>{
      return(x.total) 
    }),
    componentid:"bar-chart",backgroundColor:'#007bff'
    })
  })
  .fail(err=>{
    console.log('Error get datas',err)
  })
</script>
</body>
</html>
