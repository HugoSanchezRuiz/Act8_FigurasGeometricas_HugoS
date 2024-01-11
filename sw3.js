document.addEventListener("DOMContentLoaded", function () {

    Swal.fire({
        title: 'Forma creada correctamente!',
        html: '<img src="./img/cuadrado.PNG">',
        icon: 'success',
        showCloseButton: true,
        showCancelButton: false,
        confirmButtonText: '¡Genial!',
        confirmButtonColor: '#3085d6'
    }).then((result) => {
        if (result.isConfirmed) {
            console.log('¡SweetAlert confirmado!');
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            console.log('SweetAlert cancelado');
        }
    });
});