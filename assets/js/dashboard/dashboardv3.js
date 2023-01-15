/* global Chart:false */
renderGraphic = obj => {
  console.log("frek",obj)
  tgopsarray = []
  obj.forEach(element => {
    element.tgops.forEach(el=>{
      if(typeof el === 'string'|| el instanceof String)
      tgopsarray.push(el)
    })
  })
  tgops_array = tgopsarray.filter((v,i,x)=>{
    return x.indexOf(v)===i
  })
  datazet = obj.map(ob=>{
    return {
      'type': 'line',
      'data': ob.vops,//[100, 120, 170, 167, 180, 177, 160],
      'backgroundColor': 'transparent',
      'borderColor': ob.borderColor,
      'pointBorderColor': ob.borderColor,//'#007bff',
      'pointBackgroundColor': ob.borderColor,//'#007bff',
      'fill': true,
      'label':ob.label,
       pointHoverBackgroundColor: '#007bff',
       pointHoverBorderColor    : '#007bff'
    } 
  })

  console.log('Datazet',datazet)
  //SomeArrayValues.filter(x=> x.id !== idNameDetailsColorDto.id).map(ids => (ids.id))
  var $visitorsChart = $('#frekwensi_kegiatan_harian')
  // eslint-disable-next-line no-unused-vars
  var visitorsChart = new Chart($visitorsChart, {
    data: {
      labels:  ['18th', '20th', '22nd', '24th', '26th', '28th', '30th'],//tgops_array,
      datasets: /*obj.map(ob=>{
        return {
          'type': 'line',
          'data': ob.vops,//[100, 120, 170, 167, 180, 177, 160],
          'backgroundColor': 'transparent',
          'borderColor': ob.borderColor,
          'pointBorderColor': ob.borderColor,//'#007bff',
          'pointBackgroundColor': ob.borderColor,//'#007bff',
          'fill': true,
          'label':ob.label,
           pointHoverBackgroundColor: '#007bff',
           pointHoverBorderColor    : '#007bff'
        } 
      })*/

      [{
        type: 'line',
        label:'a',
        data: [100, 120, 170, 167, 180, 177, 160],
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
        label:'b',
        data: [60, 80, 70, 67, 80, 77, 100],
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
        mode: obj.map(ob=>{
          return ob.mode
        }),
        intersect: obj.map(ob=>{return ob.intersect})
      },
      hover: {
        mode: obj.map(ob=>{return ob.mode}),//obj[0].mode,
        intersect: obj.map(ob=>{return ob.intersect})//obj[0].intersect
      },
      legend: {
        display: true
      },
      scales: {
        yAxes: [{
           display: false,
          gridLines: {
            display: true,
            lineWidth: '4px',
            color: 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks: $.extend({
            beginAtZero: true,
            suggestedMax: 15
          }, obj.map(ob=>{return ob.ticksStyle})//obj[0].ticksStyle
          )
        }],
        xAxes: [{
          display: true,
          gridLines: {
            display: false,
            lineWidth:'4px'
          },
          ticks: $.extend({
            beginAtZero:true
          },obj.map(ob=>{return ob.ticksStyle}) )//obj[0].ticksStyle
        }]
      }
    }
  })

}
rdm = _ => {
  return Math.floor(Math.random()*16777215).toString(16)
}
console.log('Randomized',rdm())// lgtm [js/unused-local-variable]

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
    console.log("Subutires",subutirs)
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
        borderColor:'#'+randomizeColor()+''
      }
    }))
  })
  .fail(err=>{
    console.log('err dashboard',err)
  })
  
  $('.m-0').css('color','#'+rdm()+'')

})



