$(document).ready(function () {
    $("#tabla-data").on('submit', '.form-eliminar', function () {
        event.preventDefault();
        //alert("Va por donde se espera");
        const form = $(this);
        swal.fire({
            title: '¿ Está seguro que desea eliminar el registro ?',
            text: "Esta acción no se puede deshacer de ninguna manera!",
            icon: 'warning',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: 'Borrar',
            cancelButtonText: 'Cancelar',
            //reverseButtons: true
        }).then((result) => {
            //alert(result.value);
            if (result.value) {
                ajaxRequest(form);
                Swal.fire(
                    'Eliminado!',
                    'El registro ha sido elininado con éxito.',
                    'success'
                  )
            }
        });
    });

    function ajaxRequest(form) {
        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: form.serialize(),
            success: function (respuesta) {
                if (respuesta.mensaje == "ok") {
                    form.parents('tr').remove();
                    Parrot.notificaciones('El registro fue eliminado correctamente', 'Parrot', 'success');
                } else {
                    Parrot.notificaciones('El registro no pudo ser eliminado, hay recursos usandolo', 'Parrot', 'error');
                }
            },
            error: function () {

            }
        });
    }
});
