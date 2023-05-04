function alert() {
    Swal.fire({
      title: 'como você gostaria de se registrar?',
      showDenyButton: true,
      showCloseButton: true,
      confirmButtonText: 'pessoa física',
      denyButtonText: `pessoa jurídica`,
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "./formularios/register.php";
      } else if (result.isDenied) {
        window.location.href = "./formularios/registerJ.php";
      }
    })
  }
