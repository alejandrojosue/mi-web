//<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

function confirmar(msg){
    Swal.fire({
        title: '¿Desea '+msg+'?',
        icon: 'question',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: `Guardar`,
        denyButtonText: `No Guardado`,
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          Swal.fire('Guardado!', '', 'success')
        } else if (result.isDenied) {
          Swal.fire('Los cambios no se guardaron', '', 'info')
        }
      });
}


function guardar(msg){
    Swal.fire(
        '¡Buen trabajo!',
        '¡Acción completada exitósamente!',
        'success'
      )
}

function error(msg){
    Swal.fire({
        icon: 'question',
        title: 'Ups...',
        text: '¡Algo salió mal!',
        //footer: '<a href>Why do I have this issue?</a>'
      })
}
