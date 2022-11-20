parseDate = (obj)=>{
    dates = obj.split('/')
    year = dates[2]
    month = dates[1]
    date = dates[0] 
    return year+"-"+month+'-'+date
}
save = _=>{
    console.log('Awal',$('#dtpmasapenilaianawal').data('date'))
    crud.save({
        url:'/header/save',
        data:{
            pelaksana:curuser,
            dasar:$('#txtDasar').val(),
            lokasi:$('#cmbprop').val(),pemberi:$('#cmbpemberi').val(),
            id:id,
            kdbutir:kdbutir,
            kdsubutir:$('#cmbsubbutir').val(),
            awal:parseDate($('#dtpmasapenilaianawal').data('date')),
            akhir:parseDate($('#dtpmasapenilaianakhir').data('date')),
            ringkasan:$('#txtRingkasan').val()
        }
    },res=>{
        console.log('test',res)
        tblheader.ajax.reload()
        $('#modal-penambahan').modal('hide')
    })

}

$('#btnSaveHeader').click(function(){
    console.log('invoked')
    save()
  })
crud.gets({
    url:'/masters/getbutir/'+jjfg+'/'+jbfg
},res=>{
    console.log('Butir got',res)
    if(res.result){
        console.log('res rows',res.res.rows)
        
    }
})
