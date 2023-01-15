$('#btnUpdateRincian').click(function(){
    console.log("Do update invoked",$('#txtEditUrtx').val())
    populateEditDomain($('.editKegiatan:checked').val())
    selected = $('#rincian tr.selected')
    console.log('URTX',$('#myurtx').val())//,tblrincian.row(selected).data().urtx)
    
  crud.doAjax({
    url:'/rincian/update',
    data:{
      id:$('#txtEditId').val(),
      //urt:$('#txtEditUrt').val(),
      nops:$('#txtEditNops').val(),
      tgops:parseDate($('#dtpEdittgops').data('date')),
      nafsu:$('#cmbEditNafsu').val(),
      urtx:$('#myurtx').val(),//tblrincian.row(selected).data().urtx,//$('#txtEditUrtx').val(),
      //urtx = tblrincian.row(selected).data().urtx;
      kondisi:$('#txtEditKondisi').val(),
      jmlhewan:$('#txtEditJmlHewan').val(),
      suhu:$('#txtEdittsuhu').val(),
      turgor:$('#cmbEditTurgor').val(),
      raba:$('#cmbEditRaba').val(),
      riwayat:$('#cmbEditRiwayat').val(),
      media:$('#cmbEditMedia').val(),
      pemilik:$('#txtEditPemilik').val(),
      jnsPPK:$(".editKegiatan:checked").val(),
    //  suhu:$('#cmbEditSuhu').val(),
      asal:asal,tujuan:tujuan,
      rekam:$('#cmbEditRekam').val(),
      kesimpulan:$('#txtEditKesimpulan').val(),
      dok1:$('#txtEditDocument1').val(),
      dok2:$('#txtEditDocument2').val(),
      dok3:$('#txtEditDocument3').val(),
      dok4:$('#txtEditDocument4').val(),
      stat1:$('#cmbEditDocument1').val(),
      stat2:$('#cmbEditDocument2').val(),
      stat3:$('#cmbEditDocument3').val(),
      stat4:$('#cmbEditDocument4').val(),
      kelamin:$('#cmbEditJenisKelamin').val(),
      discharge:$('#cmbEditDischarge').val(),
      nilaisuhu:$('#editPenSuhu').val(),
      nilaipulsus:$('#editPenPulsus').val(),
      pulsus:$('#txtEditHasilPeriksaPulsus').val(),
      nilairespirasi:$('#editPenRespirasi').val(),
      nilailimfo:$('#editPenLimfoglandula').val(),
      nilaimukosa:$('#editPenMukosa').val(),
      nilaiturgor:$('#editPenTurgor').val(),
      nilailesi:$('#editPenLesi').val(),
      bulukulit:$('#txtEditWarnaBulu').val(),
      keterangan:$('#txteditketerangan').val(),
      respirasi:$('#txtEditHasilPeriksaRespirasi').val(),
      mukosa:$('#txtEditMukosa').val(),
      limfo:$('#cmbEditLimfoglandula').val(),
      lesi:$('#txtEditLesi').val(),
      diagnosa:$('#txtEditDiagnosaAkhir').val(),
      tindaklanjut:$('#txtEditTindakLanjut').val(),
      jmltotal:$('#txtEditJmlTotal').val(),
      ketklinis:$('#txtEditKetKlinis').val(),
  
      kemasan:$('#txtEditKemasan').val(),
      segel:$('#txtEditSegel').val(),
      label:$('#txtEditLabel').val(),
      konsistensi:$('#txtEditKonsistensi').val(),
      warna:$('#txtEditWarna').val(),
      bau:$('#txtEditBau').val(),
      rasa:$('#txtEditRasa').val(),
      suhu:$('#txtEditSuhu').val(),
      pH:$('#txtEditpH').val(),
      kondisiumum:$('#txtEditKondisiUmum').val(),
      
  }
  },res=>{
      console.log('Update result',res)
      //$('#editrincian').modal('hide')
      reloadPopup({urtx:$('#myurtx').val()})//tblrincian.row(selected).data().urtx})
      tblrincian.ajax.reload()
      showAlert({title:'Data Rincian sudah terupdate...'})
    })
  
  })
  