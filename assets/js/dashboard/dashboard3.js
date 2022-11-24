/* global Chart:false */
renderGraphic = obj => {
  console.log("frek",obj)
  var $visitorsChart = $('#frekwensi_kegiatan_harian')
  // eslint-disable-next-line no-unused-vars
  var visitorsChart = new Chart($visitorsChart, {
    data: {
      labels: obj.tgops,//['18th', '20th', '22nd', '24th', '26th', '28th', '30th'],
      datasets: [{
        type: 'line',
        data: obj.vops,//[100, 120, 170, 167, 180, 177, 160],
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        pointBorderColor: '#007bff',
        pointBackgroundColor: '#007bff',
        fill: false
        // pointHoverBackgroundColor: '#007bff',
        // pointHoverBorderColor    : '#007bff'
      },
      {
        type: 'line',
        data: obj.vops,//[60, 80, 170, 167, 80, 77, 100],
        backgroundColor: 'tansparent',
        borderColor: '#ced4da',
        pointBorderColor: '#ced4da',
        pointBackgroundColor: '#ced4da',
        fill: false
        // pointHoverBackgroundColor: '#ced4da',
        // pointHoverBorderColor    : '#ced4da'
      }]
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        mode: obj.mode,
        intersect: obj.intersect
      },
      hover: {
        mode: obj.mode,
        intersect: obj.intersect
      },
      legend: {
        display: true
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
            suggestedMax: 15
          }, obj.ticksStyle)
        }],
        xAxes: [{
          display: true,
          gridLines: {
            display: false
          },
          ticks: obj.ticksStyle
        }]
      }
    }
  })

}

$(function () {
  'use strict'



  
  var ticksStyle = {
    fontColor: '#495057',
    fontStyle: 'bold'
  }

  var mode = 'index'
  var intersect = true
  console.log("testzzz")
  $.ajax({
    url:'/dashboard/get',
    dataType:'json'
  })
  .done(res=>{
    console.log('dashboardgot',res)
    renderGraphic({
      tgops : res.res.map(daily=>{
        return daily.tgops
      }),
      vops : res.res.map(daily=>{
        return daily.frek
      }),
      mode:mode,intersect:intersect,ticksStyle:ticksStyle
    })
  })
  .fail(err=>{
    console.log('err dashboard',err)
  })

})
// lgtm [js/unused-local-variable]
