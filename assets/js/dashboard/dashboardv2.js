reloadBarChart = obj => {
  console.log('OBJ KDBUTIRS',obj.kdbutirs)
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
        },
        {
          backgroundColor: '#F1C40F',
          borderColor: '#F1C40F',
          data: obj.data3
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
