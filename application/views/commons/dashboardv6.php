<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sifung | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/vendor/adminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/vendor/adminLTE/dist/css/adminlte.min.css">
</head>
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
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col (LEFT) -->
          <div class="col-md-12">
            <!-- LINE CHART -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Frekwensi Kegiatan Harian</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!--barchart and stacked barchart removed here-->
          </div>
          <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->



        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <table id="tResumeRincian">
                <thead>
                  <tr>
                    <th>Jenis Kegiatan</th>
                    <th>Januari</th>
                    <th>Februari</th>
                    <th>Maret</th>
                    <th>April</th>
                    <th>Mei</th>
                    <th>Juni</th>
                    <th>Juli</th>
                    <th>Agustus</th>
                    <th>September</th>
                    <th>Oktober</th>
                    <th>Nopember</th>
                    <th>Desember</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>D2035</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>20</td>
                    <td>25</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://xs31.sikawanlife.net/Dashboard">Sifung</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Add Content Here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/assets/vendor/adminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/vendor/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/assets/vendor/adminLTE/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/vendor/adminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/assets/vendor/adminLTE/dist/js/demo.js"></script>
<script src="/assets/js/commons.js"></script>
<!-- Page specific script -->
<script>
  getRandomColor = _=> {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
      color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
  }
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.

    $.ajax({
        url:'/dashboard/hehe',
        dataType:'json'
      })
      .done(res=>{
        console.log('res',res)
        datasets = res.data.map(data=>{
          return {
            label:data.kdbutir,
            backgroundColor:getRandomColor,
            fill:false,
            borderColor:getRandomColor,
            borderDash:[5,5],
            data:[data.jan,data.feb,data.mar,data.apr,data.may,data.jun,data.jul,data.ags,data.sep,data.okt,data.nop,data.des]
          }
        })
        console.log(datasets)
        var areaChartData = {
          labels  : ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul','Ags','Sep','Okt','Nop','Des'],
          datasets: datasets
        }
        var lineChartData = $.extend(true, {}, areaChartData)
        //lineChartData.datasets[0].fill = false;
        //lineChartData.datasets[1].fill = false;

        var lineChart = new Chart(lineChartCanvas, {
          type: 'line',
          data: lineChartData,
          options: {
            maintainAspectRatio : false,
            datasetFill:false,
            legednd:{
              display:false
            },
            title:{
              display:true
            },
            responsive:true,
            interaction:{
              intersect:true
            },
            scales: {
            xAxes: [{
              gridLines : {
                display : true,
              }
            }],
            yAxes: [{
              gridLines : {
                display : true,
              }
            }]
          }
        }//lineChartOptions
      })

      })
      .fail(err=>{
        console.log('err',err)
      })
      /*var areaChartData = {
        labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }*/

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    //var lineChartData = $.extend(true, {}, areaChartData)
    /*lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;*/
    lineChartOptions.datasetFill = false
      })
</script>
<script src="/assets/vendor/adminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/vendor/adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/vendor/adminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/vendor/adminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/assets/vendor/adminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script>
  $('#tResumeRincian').DataTable({
    paging:false,
    lengthChange:false,searching:false,info:false,
    ajax:{
      url:'/dashboard/hehe'
    },
    columns:[
      {"data":"kdbutir"},
      {"data":"jan"},
      {"data":"feb"},
      {"data":"mar"},
      {"data":"apr"},
      {"data":"may"},
      {"data":"jun"},
      {"data":"jul"},
      {"data":"ags"},
      {"data":"sep"},
      {"data":"okt"},
      {"data":"nop"},
      {"data":"des"}
    ]
  });
      
</script>
</body>
</html>
