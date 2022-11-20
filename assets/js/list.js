$('#btnAddRequest').click(function(){
    $('#modal-penambahan').modal()
});
$('#btnSaveKegiatan').click(function(){
crud.save({
    url:'/kegiatan/save',
    data:{
    pelaksana:curuser,
    dasar:$('#txtNomorDanTanggalSuratTugas').text(),
    pemberi:$('#txtPejabatPemberiTugas').text(),
    lokasi:$('#txtLokasiKegiatan').text(),
    kdbutir:$('#cmbButirKegiatan :selected').val()
    }
},res=>{
    console.log(res)
})
.gets({
    url:'/kegiatan/gets'
},res=>{
    $('#modal-penambahan').modal('hide')
    console.log(res)
})

})
crud.gets({
url:'/kegiatan/gets'
},res=>{
console.log('Rs',res)    
})
.gets({
url:'/masters/getprops'
},res=>{
$('#cmbLokasiKegiatan').fillCombo({
    data:res.res.rows.map(res=>{
    return {val:res.kdProp,label:res.urProp}
    })
})
})
.gets({
url:'/masters/getbutir'
},res=>{
$('#cmbButirKegiatan').fillCombo({
    data:res.res.rows.map(res=>{
    return {val:res.butir,label:res.kdbutir}
    })
})
})
