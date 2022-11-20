uncompletes = []
isEmail = element => {
    arr1 = element.split('@')
    if(arr1.length === 0){
        return false
    }else if(arr1[0].trim() === ""){
        return false
    }else if(arr1[1].trim() === ""){
        return false
    }else{
        return true
    }
}
isNotEmpty = element => {
    if(element.trim() === ""){
        console.log("Its empty bro",element.trim())
        return false
    }else{
        console.log("Its not empty bro",element.trim())
        return true
    }
}
isChecked = obj => {
    if(obj.el.length>0){
        return true
    }else{
        uncompletes.push(obj.elementName)
        return false
    }
}
validation = {
    doCheck : (obj) => {
        console.log('par',obj.par1,obj.par2,obj.par1 && obj.par2)
        validation.valid = obj.par1 && obj.par2
        return validation
    },
    inspectElement : element => {
        return validation.doCheck({
            par1 : element.valid,
            par2 : validation.valid
        })
    },
    getValid : _ => {
        return validation.valid
    },
    valid:true
}