
$('#btnSveRincianb').click(function(){
    doValidate(isValid=>{
      if(isValid){
        toShow = $('.addKegiatan:checked').attr('toShow')
        console.log('toShow',toShow)
        switch($('.addKegiatan:checked').val()){
          case 'I':
            asal = $('#cmbAddAsalNegara').val()
            tujuan = $('#cmbAddTujuanDaerah').val()
            break
          case 'E':
            asal = $('#cmbAddAsalDaerah').val()
            tujuan = $('#cmbAddTujuanNegara').val()
          break
          case 'M':
            asal = $('#cmbAddAsalDaerah').val()
            tujuan = $('#cmbAddTujuanDaerah').val()
            break
          case 'K':
            asal = $('#cmbAddAsalDaerah').val()
            tujuan = $('#cmbAddTujuanDaerah').val()
          break
        }
        //console.log('Asal',asal)
        crud.save({
          url:'/rincian/save',
          data:{
            id:parent,
            urt:urt,
            jnsPPK:$('.addKegiatan:checked').val(),
            asal:asal,
            tujuan: tujuan,
            jmltotal:$('#txtAddJmlTotal').val(),
            nafsu:$('#cmbAddNafsu').val(),
            penampakan:$('#cmbPenampakan').val(),
            turgor:$('#cmbTurgor').val(),
            suhu:$('#txtAddSuhu').val(),
            pulsus:$('#txtAddPulsus').val(),
            raba:$('#cmbRaba').val(),
            tgops:parseDate($('#dtpAddtgops').data('date')),
            jmlhewan:$('#txtAddJmlHewan').val(),
            bulukulit:$('#txtAddWarnaBulu').val(),
            kondisi:$('#txtAddKondisi').val(),
            keterangan:$('#txtAddKeterangan').val(),
            nops:$('#txtAddNops').val(),
            media:$('#cmbAddMedia').val(),
            pemilik:$('#txtAddPemilik').val(),
            kdsubutir:kdsubutir,
            suhu:$('#txtAddsuhu').val(),
            rekam:$('#cmbRekam').val(),
            kesimpulan:$('#txtKesimpulan').val(),
            dok1:$('#txtAddDocument1').val(),
            dok2:$('#txtAddDocument2').val(),
            dok3:$('#txtAddDocument3').val(),
            dok4:$('#txtAddDocument4').val(),
            stat1:$('#cmbAddDocument1').val(),
            stat2:$('#cmbAddDocument2').val(),
            stat3:$('#cmbAddDocument3').val(),
            stat4:$('#cmbAddDocument4').val(),
            kelamin:$('#cmbAddJenisKelamin').val(),
            discharge:$('#cmbAddDischarge').val(),
            jmlkemasan:$('#txtAddJumlahKemasan').val(),
            jnskemasan:$('#txtAddJenisKemasan').val(),
            segel:$('#txtAddKeutuhanSegel').val(),
            kemasan:$('#txtAddKeutuhanKemasan').val(),
            label:$('#txtAddKecukupanLabel').val(),
            konsistensi:$('#txtAddKonsistensi').val(),
            warna:$('#txtAddWarna').val(),
            bau:$('#txtAddBau').val(),
            rasa:$('#txtAddRasa').val(),
            kemasan:$('#txtAddSuhuKemasan').val(),
            ph:$('#txtAddPh').val(),
            kondisiumum:$('#txtAddKondisiUmum').val(),

            diagnosa:$('#txtAddDiagnosaAkhir').val(),
            tindaklanjut:$('#txtAddTindakLanjut').val(),


            nilaikondisiumum:$('#cmbAddPenKondisiUmum').val(),
            nilaiph:$('#cmbAddPenpH').val(),
            nilaisuhu:$('#cmbAddPenSuhu').val(),
            nilairasa:$('#cmbAddPenRasa').val(),
            nilaibau:$('#cmbAddPenBau').val(),
            nilaiwarna:$('#cmbAddPenWarna2').val(),
            nilaikonsistensi:$('#cmbAddPenKonsistensi2').val(),
            nilaisegel:$('#cmbAddPenSegel').val(),
            nilailabel:$('#cmbAddPenilaianLabel').val(),
            nilaikemasan:$('#cmbAddPenilaianKemasan').val(),
            

            ketklinis:$('#txtAddKetKlinis').val()
          }
        },res=>{
          console.log('Save RIncian',res)
          $('#addrincian').modal('hide')
          tblrincian.ajax.reload()
        })

      }else{
        console.log('Isnot Valid')
        $('#warningTitle').html('Peringatan')
        $('#warningDescription').html('Isian harus lengkap')
        $('#mdlwarning').modal()
      }
    })
})
