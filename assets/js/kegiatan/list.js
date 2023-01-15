console.log('KDBUTIR',kdbutir)
  var tblheader = $("#header").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "ajax":'/header/get_datas/'+id,
      "dom":"Bfrtip",
      "buttons":[
        {
            text: '<i class="fa fa-plus"></i> &nbsp; Penambahan',
            action: function ( e, dt, node, config ) {
              console.log('KDUPT',kdupt)
              $('#cmbprop').val(kdupt)
              $('#modal-penambahan').modal();
            },
            attr:{class: "btn btn-success"}
        }
      ],
      "columns": [
        {"data":"id"},
        {"data":"kdsubutir"},
        {"data":"butiranak"},
        {"data":"namaunit"},
        {"data":"mulai"},
        {"data":"selesai"},
        {"data":"jmlsubutir"}
      ],
      "columnDefs": [ 
        {
          "target":1,
          "class":"kdsubutir"
        },
        {
            "targets": 7,
            "data": null,
            "defaultContent": "<button class='btnedit btn btn-warning btn-sifung'>Edit</button>&nbsp;<button class='btnremove btn btn-danger btn-sifung'>Hapus</button>&nbsp;<button class='btnisi btn btn-primary btn-sifung'>Isi</button>&nbsp;<button class='btnrpt btn btn-primary btn-sifung'>Cetak</button>"
            +"&nbsp;<button class='btnxls btn btn-primary btn-sifung'>XLS</button>"
        },
        {"visible":false,targets:0},
        { width: "10px", targets: 5 },
        {className:"dt-left",targets: [1,2,3]},
        {className:"dt-right",targets: [1]},
        {className:"dt-center",targets: [4,5,6,6]}
       ]

    })
    getMyLocation = callback =>{
      crud.doAjax({
        url:'/kegiatan/get_lokasi',
      },res=>{
        callback(res)
      })
    }
    $('#btnRemoveKegiatan').click(function(){
      selected = $('#header tr.selected')
      console.log('selected',selected)
      idheader = tblheader.row(selected).data().urt;
      jmlsubutir = tblheader.row(selected).data().jmlsubutir;
      console.log("urt",tblheader.row(selected).data().urt)
      crud.doAjax({
        url:'/kegiatan/remove/'+idheader,
      },res=>{
        console.log('Result of removal',res)
        selected.remove();
      })

    });
    $('#header tbody').on('click','button.btnremove',function(){
      $('#header tbody tr').removeClass('selected')
      let x = $(this).stairUp({level:2})
      x.addClass('selected')
      console.log('selected 1',x)
      idheader = tblheader.row(x).data().id;
      jmlsubutir = tblheader.row(x).data().jmlsubutir;
      console.log("data1",idheader)
      if(jmlsubutir>0){
        $("#subutiramount").html("<strong>Kelompok Kegiatan</strong> ini sudah mengandung rincian kegiatan<br />Bila ingin menghapus, mulailah dari menghapus <strong>Rincian Kegiatan</strong>");
        $("#btnhapus").hide()
      }else{
        $("#subutiramount").html();
        $("#btnhapus").show()

      }
      $('#modal-konfirmasi').modal();
    })
    $('#dtpmasapenilaianawal').datetimepicker({
      format:'DD/MM/yyyy'
    });
    $('#dtpmasapenilaianakhir').datetimepicker({
      format:'DD/MM/yyyy'
    });

    $("#test").click(function(){
      console.log($('#dtpmasapenilaian').val())
    })
    $("#btnAddRequest").click(function(){
      $('#modal-penambahan').modal();
    });
    $('[data-mask]').inputmask()
    $('#header tbody').on('click','.btnisi',function(){
      $('#header tbody tr').removeClass('selected')
      let x = $(this).stairUp({level:2})
      x.addClass('selected')
      urt = tblheader.row(x).data().urt
      window.location.href = '/rincian/show/'+urt
    })
    $('#header tbody').on('click','.btnrpt',function(){
      $('#header tbody tr').removeClass('selected')
      let x = $(this).stairUp({level:2})
      x.addClass('selected')
      kdsubutir = x.find(".kdsubutir").text()
      urt = tblheader.row(x).data().urt
      console.log("KDSubUTIR",kdsubutir)
      //window.location.href = '/rincian/rreport/'+urt
      window.location.href = '/kegiatan/pdf/'+urt+'/'+kdsubutir
    })

    

    $('#header tbody').on('click','.btnxls',function(){
      $('#header tbody tr').removeClass('selected')
      let x = $(this).stairUp({level:2})
      x.addClass('selected')
      urt = tblheader.row(x).data().urt
      window.location.href = '/kegiatan/xls/'+urt
//      window.location.href = '/rincian/xlsreport/'+urt
    })
    $("#header tbody").on('click','.btnedit',function(){
      $('#header tbody tr').removeClass('selected')
      let x = $(this).stairUp({level:2})
      x.addClass('selected')
      urt = tblheader.row(x).data().urt;
      console.log('data',tblheader.row(x).data())
      crud.doAjax({
        url:'/kegiatan/getdata',
        data:{
          urt:urt
        }
      },res => {
        console.log('getkegiatan',res)
        let obj = res.res.rows[0]
        $('#txtEditDasar').val(obj.dasar)
        $('#cmbEditsubbutir').val(obj.kdsubutir).trigger('change')
        $('#cmbEditPemberi').val(obj.pemberi).trigger('change')
        $('#cmbEditProp').val(obj.lokasi).trigger('change')
        let mulai = dt.getElementsFromSQL(obj.mulai)
        $('#dtpEditMasaPenilaianAwal').datetimepicker({
          date:new Date(mulai.year,mulai.month,mulai.date),
          format: 'DD/MM/YYYY',
        })

        let selesai = dt.getElementsFromSQL(obj.selesai)
        $('#dtpEditMasaPenilaianAkhir').datetimepicker({
          date:new Date(selesai.year,selesai.month,selesai.date),
          format: 'DD/MM/YYYY',
        })

        $('#txtEditRingkasan').val(obj.ringkasan)
        $('#modal-edit').modal()
      })

    })
    doValidate = callback => {
      validation.valid = true 
      callback(validation
        .inspectElement({valid:isNotEmpty($("#dtpEditMasaPenilaianAkhir input").val())})
        .inspectElement({valid:isNotEmpty($("#dtpEditMasaPenilaianAwal input").val())})
        .inspectElement({valid:isNotEmpty($("#txtEditDasar").val())})
        .inspectElement({valid:isNotEmpty($("#txtEditRingkasan").val())})
        .getValid())
    }
    updateHeader = callback => {
      x = $('#header tbody tr.selected')
      urt = tblheader.row(x).data().urt;
      crud.doAjax({
        url:'/kegiatan/update',
        data:{
          urt:urt,
          ringkasan:$('#txtEditRingkasan').val(),
          pelaksana:curuser,
          lokasi:$('#cmbEditProp').val(),
          pemberi:$('#cmbEditPemberi').val(),
          id:id,
          dasar:$('#txtEditDasar').val(),
          kdbutir:kdbutir,
          kdsubutir:$('#cmbEditsubbutir').val(),
          mulai:parseDate($('#dtpEditMasaPenilaianAwal').data('date')),
          selesai:parseDate($('#dtpEditMasaPenilaianAkhir').data('date')),
          ringkasan:$('#txtEditRingkasan').val()
        }
      },res=>{
        console.log(res)
        tblheader.ajax.reload()
        callback(res)
      })
    }
    $('#btnUpdateHeader').click(function(){
      doValidate(valid=>{
        if(valid){
          updateHeader(res=>{
            $('#modal-edit').modal('hide')
          })
        }else{
          alert('Isian tidak lengkap')
        }
      })      
    })
    $('#cmbpemberi').select2();
    $('#cmbprop').select2()
    $('#cmbEditPemberi').select2();
    $('#cmbEditProp').select2()
    $('#cmbEditsubbutir').select2()
