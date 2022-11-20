save = obj => {
    $.ajax({
        url:'/rincian/save',
        type:'post',
        dataType:'json',
        data:{
            nops:$('#txtNops').val(),
            tgops:parseDate($('#dtpAddtgops').data('date')),
            jnsppk:$('.addKegiatan:checked').val(),
            asal:asal,
        }
    })
}