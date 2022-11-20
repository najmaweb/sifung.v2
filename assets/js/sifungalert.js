var Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });
  showAlert = obj => {
    console.log("hoho")
    Toast.fire({
      icon: 'success',
      title: obj.title
    })
  
  }
  