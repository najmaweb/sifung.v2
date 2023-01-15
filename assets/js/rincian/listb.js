console.log("B")
console.log('paremtn',parent)
console.log('urut',urt)

/*

"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
*/
var tblrincian = $("#rincian").DataTable({
    "responsive": true, "lengthChange": false, "autoWidth": false,
    "ajax":'/rincian/get_datas/'+parent+'/'+urt,
    "dom":"Bfrtip",
    "buttons":["excel",
      {
          text: '<i class="fa fa-plus"></i> &nbsp; Penambahan',
          action: function ( e, dt, node, config ) {
            $('#txtUrut').val(urt)
            $('#txtIndex').val(parent)
            $('#addrincian').modal();
          },
          attr:{class: "btn btn-success"}
      }
    ],
    "columns": [
      {"data":"tmst"},
      {"data":"tgops"},
      {"data":"nops"},
      {"data":"PPK"},
      {"data":"nipem"}
    ],
    "columnDefs": [ 
      {
        "targets":0,
        "visible":false
      },
      {
          "targets": 5,
          "data": null,
          "defaultContent": "<button class='btnedit btn btn-warning btn-sifung'>Edit</button>&nbsp;"
          +"<button class='btnremove btn btn-danger btn-sifung'>Delete</button>&nbsp;"
          +"<button class='btnduplicate btn btn-primary btn-sifung'>Copy</button>&nbsp"
      },
      {className:"dt-center",targets: [5]}
    ],
    order: [[0, 'desc']],
  })
  $('#btnRemoveRincian').click(function(){
    selected = $('#rincian tr.selected')
    urtx = tblrincian.row(selected).data().urtx;
    console.log("urt",tblrincian.row(selected).data().urt)
    crud.doAjax({
      url:'/rincian/remove',
      data:{urtx:urtx}
    },res=>{
      console.log('Result of removal',res)
      selected.remove();
      tblrincian.ajax.reload()
    })

  });
  $('#rincian tbody').on('click','button.btnremove',function(){
    $('#rincian tbody tr').removeClass('selected')
    let x = $(this).stairUp({level:2})
    x.addClass('selected')
    console.log('selected 1',x)
    idheader = tblrincian.row(x).data().id;
    console.log("data1",idheader)

    $('#modal-konfirmasi').modal();
  })
  $('#dtpAddtgops').datetimepicker({
    format:'DD/MM/yyyy'
  });
  $('#dtpmasapenilaianakhir').datetimepicker({
    format:'DD/MM/yyyy'
  });

  $("#test").click(function(){
    console.log($('#dtpmasapenilaian').val())
  })
  $('[data-mask]').inputmask()
  
  $('#txtUrt').val(urt)
  $('#txtId').val(parent)
  $('#txtKdButir').val(kdbutir)
  showApropiate = (toShow,toHide) => {
    console.log('ToShow',toShow)
    console.log('toHide',toHide)
    $('.'+toShow).show()
    $('.'+toHide).hide()
    return $('.'+toShow)
  }
  $('.editKegiatan').click(function(){
    console.log($(this).val())
//    showApropiate($(this).attr('toShow'),$(this).attr('toHide'))
    let kegiatan = $(this).val()
    showEditApropriate(kegiatan)

  })
  showEditApropriate = obj => {
      console.log('obj',obj)
    switch(obj){
        case "I":
            showApropiate('asalnegara','asaldaerah')
            showApropiate('tujuandaerah','tujuannegara')
            break
        case "E":
            showApropiate('asaldaerah','asalnegara')
            showApropiate('tujuannegara','tujuandaerah')
            break
        
        case "K":
            showApropiate('asaldaerah','asalnegara')
            showApropiate('tujuandaerah','tujuannegara')
            break
        case "M":
            showApropiate('asaldaerah','asalnegara')
            showApropiate('tujuandaerah','tujuannegara')
            break
        }
    
  }
  $('.addKegiatan').click(function(){
      let kegiatan = $(this).val()
    console.log(kegiatan)
    switch(kegiatan){
        case "I":
            showApropiate('asalnegara','asaldaerah')
            showApropiate('tujuandaerah','tujuannegara')
            break
        case "E":
            showApropiate('asaldaerah','asalnegara')
            showApropiate('tujuannegara','tujuandaerah')
            break
        
        case "K":
            showApropiate('asaldaerah','asalnegara')
            showApropiate('tujuandaerah','tujuannegara')
            break
        case "M":
            showApropiate('asaldaerah','asalnegra')
            showApropiate('tujuandaerah','tujuannegara')
            break
        }
  })
  $('#rincian').on('click','.btnisi',function(){
    $('#capaian tbody tr').removeClass('selected')
    let x = $(this).stairUp({level:2})
    x.addClass('selected')
    console.log('selected 1',x.html())
    urtx = tblrincian.row(x).data().urtx;
    console.log('data',tblrincian.row(x).data())
    window.location.href = '/rincian/rreport/'+urtx
  })
  reloadPopup = params => {
    crud.doAjax({
      url:'/rincian/get',
      data:params
    },res => {
      obj = res.res.res[0]
      console.log("OBJ got Talent",obj)
      let tglops = dt.getElementsFromSQL(obj.tgops)
      var mydt = new Date(tglops.year,tglops.month,tglops.date)
//      alert('test yo'+tglops.year+' - '+tglops.month+' - '+tglops.date)
      console.log('tglops',tglops)
      $('#txtEditId').val(obj.id)
      $('#txtEditUrt').val(obj.urt)
      $('#txtEditKdButir').val(obj.kdbutir)
      //$('#dtpEdittgops').datetimepicker()
   //   $('#dtpEdittgops').data('DateTimePicker').date(mydt)
      //$('#dtpEdittgops').data('datetimepicker').update()
      mntops = parseInt(tglops.month)+1;
      tgops = tglops.date
      setTimeout(function(){
        $('#dtpEdittgops').datetimepicker({
          defaultDate:new Date(tglops.year,mntops,tglops.date),//''+mntops+'/'+tgops+'/'+tglops.year+'',//new Date(tglops.year,tglops.month,tglops.date),
          format: 'DD/MM/YYYY',
        })  
      },1000)
      //$('#dtpEdittgops').data('datetimepicker').date(new Date(tglops.year,tglops.month,tglops.date))
//      $("#dtpEdittgops").datetimepicker("update", new Date(tglops.year,tglops.month,tglops.date));
      $('#cmbEditNafsu').val(obj.kdnafsu).trigger('change')
      $('#txtEditUrtx').val(urtx)
      $('#txtEditWarnaBulu').val(obj.bulukulit)
      $('#cmbEditPenampakan').val(obj.penampakan).trigger('change')
      $('#txtEditJmlHewan').val(obj.jmlhewan)
      $('#txtEdittsuhu').val(obj.suhu)
      $('#cmbEditTurgor').val(obj.kdturgor).trigger('change')
      $('#cmbEditRaba').val(obj.raba).trigger('change')
      $('#cmbEditRiwayat').val(obj.kdriwayat).trigger('change')
      $('#cmbEditMedia').val(obj.media).trigger('change')
      $('#txtEditPemilik').val(obj.pemilik)
      $('#txtEditKesimpulan').val(obj.kesimpulan)
      $('#txtEditNops').val(obj.nops)
      $('#cmbEditRekam').val(obj.kdrekam).trigger('change')
      $('.editKegiatan').removeAttr('checked')
      $(".editKegiatan[value=" + obj.jnsPPK + "]").prop('checked', true);
      $('#cmbEditDischarge').val(obj.discharge)
      $('#txteditketerangan').val(obj.keterangan)
      $('#cmbEditSuhu').val(obj.suhu)
      $('#txtEditDocument1').val(obj.dok1)
      $('#txtEditDocument2').val(obj.dok2)
      $('#txtEditDocument3').val(obj.dok3)
      $('#txtEditDocument4').val(obj.dok4)
      $('#cmbEditDocument1').val(obj.stat1)
      $('#cmbEditDocument2').val(obj.stat2)
      $('#cmbEditDocument3').val(obj.stat3)
      $('#cmbEditDocument4').val(obj.stat4)
      $('#txtEditHasilPeriksaPulsus').val(obj.pulsus)
      $('#txtEditHasilPeriksaRespirasi').val(obj.respirasi)
      $('#txtEditMukosa').val(obj.mukosa)
      $('#cmbEditLimfoglandula').val(obj.limfo)
      $('#txtEditLesi').val(obj.lesi)
      $('#txtEdittsuhu2').val(obj.suhu)
      $('#txtEditHasilPeriksaPulsus2').val(obj.pulsus)
      $('#txtEditHasilPeriksaRespirasi2').val(obj.respirasi)
      $('#cmbEditLimfoglandula2').val(obj.limfo)
      $('#txtEditMukosa2').val(obj.mukosa)
      $('#cmbEditTurgor2').val(obj.turgor)
      $('#txtEditLesi2').val(obj.lesi)


      $('#editPenSuhu').val(obj.nilaisuhu)
      $('#editPenPulsus').val(obj.nilaipulsus)
      $('#editPenRespirasi').val(obj.nilairespirasi)
      $('#editPenLimfoglandula').val(obj.nilailimfo)
      $('#editPenMukosa').val(obj.nilaimukosa)
      $('#editPenTurgor').val(obj.nilaiturgor)
      $('#editPenLesi').val(obj.nilailesi)


      $('#txtEdittsuhu3').val(obj.nilaisuhu)
      $('#txtEditHasilPeriksaPulsus3').val(obj.nilaipulsus)
      $('#txtEditHasilPeriksaRespirasi3').val(obj.nilairespirasi)
      $('#cmbEditLimfoglandula3').val(obj.nilailimfo)
      $('#txtEditMukosa3').val(obj.nilaimukosa)
      $('#cmbEditTurgor3').val(obj.nilaiturgor)
      $('#txtEditLesi3').val(obj.nilailesi)
      $('#txtEditDiagnosaAkhir').val(obj.diagnosa),
      $('#txtEditTindakLanjut').val(obj.tindaklanjut)
      $('#txtEditJmlTotal').val(obj.jmltotal)
      $('#txtEditKetKlinis').val(obj.ketklinis)
      $('#txtEditSegel').val(obj.segel)
      $('#txtEditKonsistensi').val(obj.konsistensi)
      $('#txtEditBau').val(obj.bau)
      $('#txtEditTemperatur').val(obj.temperatur)
      $('#txtEditpH').val(obj.ph)
      $('#txtEditKondisiUmum').val(obj.kondisiumum)
      jnsppk = $(".editKegiatan[value=" + obj.jnsPPK + "]").prop('jnsppk')
      showEditApropriate(obj.jnsPPK)
      switch(obj.jnsPPK){
        case 'I':
          $('#cmbEditasalnegara').val(obj.kdasal).trigger('change')
          $('#cmbEditTujuanDaerah').val(obj.kdtujuan).trigger('change')
        break
        case 'E':
          $('#cmbEditAsalDaerah').val(obj.kdasal).trigger('change')
          $('#cmbEditTujuannegara').val(obj.kdtujuan).trigger('change')
        break
        case 'M':
          console.log("MInvoked",obj.kdasal,obj.kdtujuan)
          $('#cmbEditAsalDaerah').val(obj.kdasal).trigger('change')
          $('#cmbEditTujuanDaerah').val(obj.kdtujuan).trigger('change')
        break
        case 'K':
          $('#cmbEditAsalDaerah').val(obj.kdasal).trigger('change')
          $('#cmbEditTujuanDaerah').val(obj.kdtujuan).trigger('change')
        break
      }
      //setTimeout(setFakeVal(),1000)
      console.log("MEdiA",obj.media)
      getMedia({kdpem:obj.media},media=>{
        $('#txtEditSuhuStandard').val(media.suhu)
        $('#txtEditPulsus').val(media.pulsus)
        $('#txtEditRespirasi').val(media.respirasi)
    
      })
      $('#txtEditKondisi').val(obj.kondisi)
      $('#txtEditJmlTotal').val(obj.jmltotal)
      $('#txtEditJmlKemasan').val(obj.jmlkemasan)
      $('#txtEditJnsKemasan').val(obj.jnskemasan)
      $('#editrincian').modal();
    })

  }
  $('#rincian').on("click",".btnedit",function(){
    $('#capaian tbody tr').removeClass('selected')
    let x = $(this).stairUp({level:2})
    x.addClass('selected')
    console.log('selected 1',x.html())
    urtx = tblrincian.row(x).data().urtx;
    console.log('urtx',urtx)
    console.log('data',tblrincian.row(x).data())
    $('#myurtx').val(urtx)
    reloadPopup({urtx:urtx})
  })
  changeDate = _ => {
        $('#dtpEdittgops').datetimepicker({
        defaultDate:'2022/11/19',
        format: 'DD/MM/YYYY',
      })

  }
  $("#testie").click(function(){
    changeDate()
  })
  $('.addKegiatan[value="I"]').click()
  populateEditDomain = obj => {
    console.log("domain",obj)
    switch(obj){
        case 'I':
            asal = $('.editasalnegara').val()
            tujuan = $('.edittujuandaerah').val()
        break
        case 'E':
            asal = $('.editasaldaerah').val()
            tujuan = $('.edittujuannegara').val()
        break
        case 'M':
            asal = $('.editasaldaerah').val()
            tujuan = $('.edittujuandaerah').val()
        break
        case 'K':
            asal = $('.editasaldaerah').val()
            tujuan = $('.edittujuandaerah').val()
        break
      }

  }
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
        /*start of organoleptik*/
        nilaitemperatur:$('#editPenTemperature').val(),
        nilaikemasan:$('#editPenKemasan').val(),
        nilaisegel:$('#editPenSegel').val(),
        nilailabel:$('#editPenKecukupanlabel').val(),
        nilaikonsistensi:$('#editPenKonsistensi').val(),
        nilaiwarna:$('#editPenWarna').val(),
        nilaibau:$('#editPenBau').val(),
        nilairasa:$('#editPenRasa').val(),
        nilaitemperatur:$('#editPenTemperatur').val(),
        nilaiph:$('#editPenpH').val(),
        nilaikondisiumum:$('#editPenKondisiumum').val(),
        kemasan:$('#txtEditKemasan').val(),
        segel:$('#txtEditSegel').val(),
        label:$('#txtEditLabel').val(),
        konsistensi:$('#txtEditKonsistensi').val(),
        warna:$('#txtEditWarna').val(),
        bau:$('#txtEditBau').val(),
        rasa:$('#txtEditRasa').val(),
        temperatur:$('#txtEditTemperatur').val(),        
        ph:$('#txtEditpH').val(),
        kondisiumum:$('#txtEditKondisiUmum').val(),
        /*end of organoleptik*/
        tindaklanjut:$('#txtEditTindakLanjut').val(),
        jmltotal:$('#txtEditJmlTotal').val(),
        ketklinis:$('#txtEditKetKlinis').val(),
        diagnosa:$('#txtEditDiagnosaAkhir').val(),
        jmlkemasan:$('#txtEditJmlKemasan').val(),
        jnskemasan:$('#txtEditJnsKemasan').val()
  }
    },res=>{
        console.log('Update result',res)
        //$('#editrincian').modal('hide')
        reloadPopup({urtx:$('#myurtx').val()})//tblrincian.row(selected).data().urtx})
        tblrincian.ajax.reload()
        showAlert({title:'Data Rincian sudah terupdate...'})
      })
  })


  doValidate = callback => {
    validation.valid = true 
    /*callback(validation
    .inspectElement({valid:isChecked({"el":$(".addKegiatan:checked"),"elName":"Jenis Kegiatan"})})
      .inspectElement({valid:isNotEmpty($("#dtpAddtgops input").val())})
      .inspectElement({valid:isNotEmpty($("#txtAddPemilik").val())})
      .inspectElement({valid:isNotEmpty($("#txtAddJmlHewan").val())})
      .inspectElement({valid:isNotEmpty($("#txtAddsuhu").val())})
      .inspectElement({valid:isNotEmpty($("#txtAddNops").val())})
      .inspectElement({valid:isNotEmpty($("#txtAddKesimpulan").val())})
      .getValid())*/
      callback(validation.inspectElement({valid:isNotEmpty($("#dtpAddtgops input").val())}))
      //callback(true)
  }
  $('#asalnegara').select2()
  $('#cmbMedia').select2()
  $('#cmbSuhu').select2()
  $('#cmbAsalMedia').select2()
  $('#cmbEditasalnegara').select2()
  $('#cmbEditAsalDaerah').select2()
  $('#cmbEditMedia').select2()
  //$('#cmbEditSuhu').select2()
  $('#cmbriwayat').select2()
  $('#cmbEditRiwayat').select2()
  $('#cmbEditRaba').select2()
  $('#cmbRaba').select2()
  $('#cmbTurgor').select2()
  $('#cmbEditTurgor').select2()
  $('#cmbRekam').select2()
  $('#cmbEditRekam').select2()
  $('#cmbAddNafsu').select2()
  $('#cmbEditNafsu').select2()
  $('#cmbPenampakan').select2()
  $('#cmbEditPenampakan').select2()
  $('.domainppk').select2()
  randMe = (start,finish) => {
    Math.floor((Math.random()*start)+finish)
  }
  setFakeVal = _ => {
    $('#txtEditId').val(1)
    $('#txtEditUrt').val(2)
    $('#txtEditNops').val("abcde")
//    parseDate($('#dtpEdittgops').data('date')),
    $('#cmbEditNafsu').val(randMe())
    $('#txtEditUrtx').val()
    $('#cmbEditPenampakan').val(randMe())
    $('#txtEditJmlHewan').val("20")
    $('#txtEdittsuhu').val("100")
    $('#cmbEditTurgor').val(randMe(1,3))
    $('#cmbEditRaba').val(randMe(1,3))
    $('#cmbEditRiwayat').val(randMe(1,4))
    $('#cmbEditMedia').val(randMe(1,2))
    $('#txtEditPemilik').val("Arnold")
    $(".editKegiatan:checked").val()
    $('#cmbEditSuhu').val(randMe(1,2))
//    asal:asal,tujuan:tujuan,
    $('#cmbEditRekam').val(randMe(1,2))
    $('#txtEditKesimpulan').val("OK")
    $('#txtEditDocument1').val("dok1")
    $('#txtEditDocument2').val("dok2")
    $('#txtEditDocument3').val("dok3")
    $('#txtEditDocument4').val("dok4")
    $('#cmbEditDocument1').val(1)
    $('#cmbEditDocument2').val(2)
    $('#cmbEditDocument3').val(2)
    $('#cmbEditDocument4').val(1)
    $('#cmbEditJenisKelamin').val(1)
    $('#cmbEditDischarge').val(1)
    console.log("set val finished")
  }
$('#penilaian-pemeriksaan-klinis-tab').click(function(){
  console.log('tab 5 clicked')
  $("#cmbAddSuhu2").val($("#cmbAddSuhu").val());
  $("#txtAddsuhu2").val($("#txtAddsuhu").val());
  $("#txtAddPulsus2").val($("#txtAddPulsus").val());
  $("#txtAddHasilPeriksaPulsus2").val($("#txtAddHasilPeriksaPulsus").val());
  $("#txtAddRespirasi2").val($("#txtAddRespirasi").val());
  $("#txtAddHasilPeriksaRespirasi2").val($("#txtAddHasilPeriksaRespirasi").val());
  $("#cmbAddLimfoglandula2").val($("#cmbAddLimfoglandula").val());
  $("#txtAddMukosa2").val($("#txtAddMukosa").val());
  $("#cmbAddTurgor2").val($("#cmbAddTurgor").val());
  $("#txtAddLesi2").val($("#txtAddLesi").val());
})
$('#custom-tabs-one-kesimpulan-tab').click(function(){
  $("#cmbAddSuhu3").val($("#cmbAddSuhu2").val());
  $("#txtAddsuhu3").val($("#txtAddsuhu2").val());
  $("#txtAddPulsus3").val($("#txtAddPulsus").val());
  $("#txtAddHasilPeriksaPulsus3").val($("#txtAddHasilPeriksaPulsus2").val());
  $("#txtAddRespirasi3").val($("#txtAddRespirasi2").val());
  $("#txtAddHasilPeriksaRespirasi3").val($("#txtAddHasilPeriksaRespirasi2").val());
  $("#cmbAddLimfoglandula3").val($("#cmbAddLimfoglandula2").val());
  $("#txtAddMukosa3").val($("#txtAddMukosa2").val());
  $("#cmbAddTurgor3").val($("#cmbAddTurgor2").val());
  $("#txtAddLesi3").val($("#txtAddLesi2").val());
})
$('#penilaianklinisTab').click(function(){
  $("#txtEdittKeutuhankemasan2").val($("#txtEditKemasan").val());
  $("#txtEditKeutuhanSegel2").val($("#txtEditSegel").val());
  $("#txtEditHasilPeriksaKecukupanlabel2").val($("#txtEditLabel").val());
  $("#txtEditKonsistensi2").val($("#txtEditKonsistensi").val());
  $("#txtEditWarna2").val($("#txtEditWarna").val());
  $("#txtEditBau2").val($("#txtEditBau").val());
  $("#txtEditRasa2").val($("#txtEditRasa").val());
  $("#txtEditTemperatur2").val($("#txtEditTemperatur").val());
  $("#txtEditpH2").val($("#txtEditpH").val());
  $("#txtEditKondisiumum2").val($("#txtEditKondisiUmum").val());
})
$('#kesimpulanTab').click(function(){
  $("#cmbEditSuhu3").val($("#cmbEditSuhu2").val());
  $("#txtEditsuhu3").val($("#txtEditsuhu2").val());
  $("#txtEditPulsus3").val($("#txtEditPulsus").val());
  $("#txtEditHasilPeriksaPulsus3").val($("#txtEditHasilPeriksaPulsus2").val());
  $("#txtEditRespirasi3").val($("#txtEditRespirasi2").val());
  $("#txtEditHasilPeriksaRespirasi3").val($("#txtEditHasilPeriksaRespirasi2").val());
  $("#cmbEditLimfoglandula3").val($("#cmbEditLimfoglandula2").val());
  $("#txtEditMukosa3").val($("#txtEditMukosa2").val());
  $("#cmbEditTurgor3").val($("#cmbEditTurgor2").val());
  $("#txtEditLesi3").val($("#txtEditLesi2").val());
})
$('#penilaian-pemeriksaan-organoleptik').click(function(){
  console.log('Hasil Organoleptik clicked')
})
$('#custom-tabs-one-tab a').on('show.bs.tab', function(){
  that = $(this)
  console.log('tab clicked',that[0].outerText)
  switch(that[0].outerText){
    /*case 'Penetapan Diagnosa':
      $('#txtEdittsuhu3').val($('#editPenSuhu').val())
      console.log('editpensuhu',$('#editPenSuhu').val())
      $('#txtEditHasilPeriksaPulsus3').val($('#editPenPulsus').val())
      $('#txtEditHasilPeriksaRespirasi3').val($('#editPenRespirasi').val())
      $('#cmbEditLimfoglandula3').val($('#editPenLimfoglandula').val())
      $('#txtEditMukosa3').val($('#editPenMukosa').val())
      $('#cmbEditTurgor3').val($('#editPenTurgor').val())
      $('#txtEditLesi3').val($('#editPenLesi').val())
    break;*/
    case 'Penilaian Pemeriksaan Klinis':
      $('#txtEdittsuhu2').val($('#txtEdittsuhu').val())
      $('#txtEditHasilPeriksaPulsus2').val($('#txtEditHasilPeriksaPulsus').val())
      $('#txtEditHasilPeriksaRespirasi2').val($('#txtEditHasilPeriksaRespirasi').val())
      $('#cmbEditLimfoglandula2').val($('#cmbEditLimfoglandula').val())
      $('#txtEditMukosa2').val($('#txtEditMukosa').val())
      $('#cmbEditTurgor2').val($('#cmbEditTurgor').val())
      $('#txtEditLesi2').val($('#txtEditLesi').val())
      $('#cmbEditMedia').change()
    break;
    case 'Presen':
      console.log("presen clicked")
      $('#cmbEditMediaview').val($('#cmbEditMedia').val())
      $('#cmbAddMediaView').val($('#cmbAddMedia').val())
    break;
    case 'Penilaian Pemeriksaan Organoleptik':
      console.log("Kecuc=upan label",$('#txtAddKecukupanLabel').val())
      $('#txtAddpH2').val($('#txtAddPh').val())
      $('#txtAddSuhu2').val($('#txtAddSuhuKemasan').val())
      $('#txtAddRasa2').val($('#txtAddRasa').val())
      $('#txtAddBau2').val($('#txtAddBau').val())
      $('#txtAddWarna2').val($('#txtAddWarna').val())
      $('#txtAddHasilPeriksaKonsistensi2').val($('#txtAddKonsistensi').val())
      $('#txtAddHasilPeriksaSegel').val($('#txtAddKeutuhanSegel').val())
      $('#txtAddHasilPeriksaLabel2').val($('#txtAddKecukupanLabel').val())
      $('#txtAddHasilPeriksaKemasan2').val($('#txtAddKeutuhanKemasan').val())
      $('#txtAdKondisiUmum2').val($('#txtAddKondisiUmum').val())
    break;
    case 'Penetapan Diagnosa':
      $('#txtEdittsuhu3').val($('#cmbAddPenSuhu :selected').text())
      console.log('editpensuhu b ',$('#cmbAddPenSuhu :selected').text())
      $('#txtAddKemasan3').val($('#cmbAddPenilaianKemasan :selected').text())
      $('#txtAddSegel3').val($('#cmbAddPenSegel :selected').text())
      $('#txtAddLabel3').val($('#cmbAddPenilaianLabel :selected').text())
      $('#cmbAddKonsistensi3').val($('#cmbAddPenKonsistensi2 :selected').text())
      $('#txtAddWarna3').val($('#cmbAddPenWarna2 :selected').text())
      $('#cmbAddBau3').val($('#cmbAddPenBau :selected').text())


      $('#txtAddRasa3').val($('#cmbAddPenRasa :selected').text())
      $('#txtAddSuhu3').val($('#cmbAddPenSuhu :selected').text())
      $('#txtAddpH3').val($('#cmbAddPenpH :selected').text())
      $('#txtAddKondisiumum3').val($('#cmbAddPenKondisiUmum :selected').text())
      $('#txtAddDiagnosaAkhir').val('')
      $('#txtAddTindakLanjut').val('')

      $('#txtEditKeutuhankemasan3').val($('#editPenKemasan :selected').text())
      $('#txtEditKeutuhansegel3').val($('#editPenSegel :selected').text())
      $('#txtEditKecukupanlabel3').val($('#editPenKecukupanlabel :selected').text())
      $('#txtEditKonsistensi3').val($('#editPenKonsistensi :selected').text())
      $('#txtEditWarna3').val($('#editPenWarna :selected').text())
      $('#txtEditBau3').val($('#editPenBau :selected').text())
      $('#txtEditRasa3').val($('#editPenRasa :selected').text())
      $('#txtEditTemperatur3').val($('#editPenTemperatur :selected').text())
      $('#txtEditpH3').val($('#editPenpH :selected').text())
      $('#txtEditKondisiumum3').val($('#editPenKondisiumum :selected').text())
      break;
  }
});

getMedia = (obj,callback) => {
  $.ajax({
    url:'/rincian/getmedia/'+obj.kdpem,
    dataType:'json'
  })
  .done(res=>{
    console.log('getmedia result',res)
    callback(res)
  })
  .fail(err=>{
    console.log('getmedia error',err)
    callback(err)
  })
}
console.log('testz')

$('#dtpAddtgopsinput').click(function(){
  $(this).next().find('.fa-calendar').click()
})
$('#rincian').on("click",".btnduplicate",function(){
  $('#capaian tbody tr').removeClass('selected')
  let x = $(this).stairUp({level:2})
  x.addClass('selected')
  urtx = tblrincian.row(x).data().urtx;
  $.ajax({
    url:'/rincian/duplicate/'+urtx,
    type:'get',
    dataType:'json'
  })
  .done(res=>{
    console.log('duplicate success',res)
    tblrincian.ajax.reload()
    showAlert({title:'Salinan data Rincian sudah ditambahkan ...'})
  })
  .fail(err=>{
    console.log('duplicate failed',err)
  })
})
