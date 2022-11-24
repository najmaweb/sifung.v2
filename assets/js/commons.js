$('#btnLogout').click(function(){
    window.location.href = '/home'
});
$.fn.save = function(options,callback){
    var settings = $.extend({
        url:'',
        data:{}
    },options)
    let that = $(this)
    $.ajax({
        url:setings.url,
        dataType:'json',
        type:'post',
        data:settings.data
    })
    .done(res=>{
        callback(res)
    })
    .fail(err=>{
        callback(err)
    })
}
$.fn.getComboKeyVal = function(options){
    var settings = $.extend({
        data:[]
    })
    that = $(this)
    console.log($(this).html())

    console.log($(this).find('option').html())
    $(this).find('option').each((key,element) => {
        console.log('Element',element.value,element.text)
    });
}
$.fn.fillCombo = function(options){
    var settings = $.extend({
        label:'',val:'',
        data:[]
    },options)
    that = $(this)
    that.empty()
    settings.data.forEach(element=>{
        that.append('<option value='+element.val+'>'+element.label+'</option>')
    })
}
$.fn.stairUp = function(options){
    let that = $(this)
    var settings = $.extend({
        level:0
    },options)
    for(x=0;x<settings.level;x++){
        that = that.parent();
    }
    return that;
}
$.fn.populateCombo = objs => {
    objs.forEach(obj => {
      
    })
  }

crud = {
    gets : (options,callback) => {
        $.ajax({
            url:options.url,
            dataType:'json',
            type:'post'
        })
        .done(res=>{
            callback({
                result:true,
                res:res
            })
        })
        .fail(err=>{
            callback({
                result:false,
                res:err
            })
        })
        return crud
    },
    save : (options,callback)=>{
        $.ajax({
            url:options.url,
           // dataType:'json',
            type:'post',
            data:options.data
        })
        .done(res=>{
            console.log('this res',res)
            callback({
                result:true,
                res:res
            })
        })
        .fail(err=>{
            console.log('this err',err)
            callback({
                result:false,
                res:err
            })
        })
        return crud
    },
    doAjax : (options,callback)=>{
        $.ajax({
            url:options.url,
            type:'post',
            data:options.data,
            dataType:'json'
        })
        .done(res=>{
            callback({
                result:true,res:res
            })
        })
        .fail(err=>{
            callback({
                result:false,res:err
            })
        })
        return crud
    }
}
/*checkEmpty = str => {
    if(str.trim().length === 0){
        return true;
    }else{
        return false;
    }
}
validate = state => {
    return {
        doValidate : state => {
            let out = state
            return validate(out)
        }
    }
}*/

parseDate = (obj)=>{
    dates = obj.split('/')
    year = dates[2]
    month = dates[1]
    date = dates[0] 
    return year+"-"+month+'-'+date
}
dt = {
    sqlToIdDate : obj => {
        dates = obj.split('-')
        year = dates[2]
        month = dates[1]
        date = dates[0] 
        return date+"/"+month+'/'+year
    },
    getElementsFromSQL : obj => {
        dates = obj.split('-')
        year = dates[0]
        month = dates[1] - 1
        date = dates[2] 
        return {date:date,month:month,year:year}
    }
}
$.fn.setVal = function(options){
    let settings = $.extend({
        selected:0
    },options)
    let that = $(this)
    that.find('option').removeAttr('selected')
    that.find('option')
    .each(function(){
        if($(this).val()===settings.selected){
            console.log('opt selected',$(this).val(),settings.selected)
            $(this).attr('selected','selected')
            console.log('this',$(this).val())
        }
    })
    return that
}
randomizeColor = _ => {
    return Math.floor(Math.random()*16777215).toString(16)
}