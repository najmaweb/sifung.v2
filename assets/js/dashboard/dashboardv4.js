renderGraphic = res => {
    var $visitorsChart = $('#frekwensi_kegiatan_harian')
    // eslint-disable-next-line no-unused-vars
    var visitorsChart = new Chart($visitorsChart, {
      data: {
        labels: tgops_array,
        datasets: obj.map(ob=>{
          return {
            'type': 'line',
            'data': ob.vops,//[100, 120, 170, 167, 180, 177, 160],
            'backgroundColor': 'transparent',
            'borderColor': ob.borderColor,
            'pointBorderColor': ob.borderColor,//'#007bff',
            'pointBackgroundColor': ob.borderColor,//'#007bff',
            'fill': true,
            'label':ob.label
            // pointHoverBackgroundColor: '#007bff',
            // pointHoverBorderColor    : '#007bff'
          } 
        })
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
$.ajax({
    url:'/dashboard/get',
    dataType:'json'
})
.done(res=>{})
.fail(err=>{})