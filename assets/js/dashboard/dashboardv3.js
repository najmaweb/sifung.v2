/* global Chart:false */
renderGraphic = obj => {
  console.log("frek",obj)
  labels = obj.map(ob=>{
    if(typeof ob.tgops === 'string'|| ob.tgops instanceof String)
    {return "he"}else
    {return ob.tgops}
  })
  //SomeArrayValues.filter(x=> x.id !== idNameDetailsColorDto.id).map(ids => (ids.id))
  console.log('labels',labels)
  var $visitorsChart = $('#frekwensi_kegiatan_harian')
  // eslint-disable-next-line no-unused-vars
  var visitorsChart = new Chart($visitorsChart, {
    data: {
      labels: obj[0].tgops,
      datasets: obj.map(ob=>{
        return {
          type: 'line',
          data: ob.vops,//[100, 120, 170, 167, 180, 177, 160],
          backgroundColor: 'transparent',
          borderColor: ob.borderColor,
          pointBorderColor: '#007bff',
          pointBackgroundColor: '#007bff',
          fill: false,
          label:ob.label
          // pointHoverBackgroundColor: '#007bff',
          // pointHoverBorderColor    : '#007bff'
        } 
      })
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        mode: obj[0].mode,
        intersect: obj[0].intersect
      },
      hover: {
        mode: obj[0].mode,
        intersect: obj[0].intersect
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
          }, obj[0].ticksStyle)
        }],
        xAxes: [{
          display: true,
          gridLines: {
            display: false
          },
          ticks: obj[0].ticksStyle
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
  
  $.ajax({
    url:'/dashboard/get',
    dataType:'json'
  })
  .done(res=>{
    console.log('dashboardgot',res)
    const subutirs = [...new Set(res.res.map(re=>{return re.kdsubutir}))]
    renderGraphic(subutirs.map(subutir=>{
      return {
        tgops:res.res.map(daily=>{
          if(daily.kdsubutir === subutir){
            return daily.tgops
          }
        }),
        vops:res.res.map(daily=>{
          if(daily.kdsubutir === subutir){
            return daily.frek
          }
        }),
        mode:mode,intersect:intersect,ticksStyle:ticksStyle,label:subutir,
        borderColor:randomizeColor()
      }
    }))
  })
  .fail(err=>{
    console.log('err dashboard',err)
  })
  
})
// lgtm [js/unused-local-variable]
