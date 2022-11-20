/////////////////////////2022-09-26 16:00
/////////////////////////2022-09-26 



console.warn('/masters/getbutir/'+jjfg+'/'+jbfg);
save = _=>{
    console.log('Awal',$('#dtpmasapenilaianawal').data('date'))
    crud.save({
        url:'/capaian/save',
        data:{
            pelaksana:curuser,
            kdbutir:$('#cmbButirKegiatan :selected').val(),
            target:$('#txtTarget').val(),
            awal:parseDate($('#dtpmasapenilaianawal').data('date')),
            akhir:parseDate($('#dtpmasapenilaianakhir').data('date'))
        }
    },res=>{
        console.log('test',res)
        tblcapaian.ajax.reload()
        $('#modal-penambahan').modal('hide')
    })

}
checkExists = callback=>{
    $.ajax({
        url:'/capaian/checkexistsjson/'+curuser+'/'+$('#cmbButirKegiatan :selected').val(),
        dataType:'json'
    })
    .done(res=>{
        console.warn('Res',res)
        if(res.res){
            callback(true);
        }else{
            callback(false);
        }
    })
}
check = _=>{
    let out = true
    $('.datetimepicker-input').each(function(x){
        if($(this).val()===""){
            out = out && false
            return out
        }else{
            out = out && true
            return out
        }
    })
}
doValidate = callback => {
    validation.valid = true 
    callback(validation
      .inspectElement({valid:isNotEmpty($("#dtpmasapenilaianawal input").val())})
      .inspectElement({valid:isNotEmpty($("#dtpmasapenilaianakhir input").val())})
      .inspectElement({valid:isNotEmpty($("#txtTarget").val())})
      .getValid())
  }

$('#btnSaveCapaian').click(function(){
    checkExists(res=>{
        if(res){
            $('#notifikasi-content').html('Butir <strong>'+$('#cmbButirKegiatan :selected').val()+'</strong> tersebut sudah dipakai<br/>Silakan pilih butir yang lain')
            $('#modal-notifikasi').modal()
        }else{
            doValidate(valid=>{
                if(valid){
                    save()
                }else{
                    $('#notifikasi-content').html('Entri kurang lengkap')
                    $('#modal-notifikasi').modal()
                }
            })      
        }
    })
})
crud.gets({
    url:'/masters/getbutir/'+jjfg+'/'+jbfg
},res=>{
    console.log('Butir got',res)
    if(res.result){
        console.log('res rows',res.res.rows)
        
    }
})
$('#btnUpdateCapaian').click(function(){
    x = $('#capaian tbody tr.selected')
        idcapaian = tblcapaian.row(x).data().id;
        console.log("IDCapaian",idcapaian)
    crud.doAjax({
      url:'/capaian/update',
      data:{
        pelaksana:curuser,
          id:idcapaian,
          kdbutir:$('#cmbEditButirKegiatan :selected').val(),
          target:$('#txtEditTarget').val(),
          awal:parseDate($('#dtpeditmasapenilaianawal').data('date')),
          akhir:parseDate($('#dtpeditmasapenilaianakhir').data('date'))
      }
    },res=>{
      console.log('Res',res)
      tblcapaian.ajax.reload()
      $('#modal-edit').modal('hide')
    })
  })
  $('#cmbButirKegiatan').select2()
  $('#cmbEditButirKegiatan').select2()
  