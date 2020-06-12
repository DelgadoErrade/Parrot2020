$(document).ready(function () {
    $('#nestable').nestable().on('change', function () {
        const data = {
            menu: window.JSON.stringify($('#nestable').nestable('serialize')),
            _token: $('input[name=_token]').val()
        };
        $.ajax({
            url: '/admin/menu/guardar-orden',
            type: 'POST',
            dataType: 'JSON',
            data: data,
            success: function (respuesta) {
            }
        });
    });

    $('.eliminar-menu').on('click', function(event){
        event.preventDefault();
    //  alert("Bingo, por aquí va.");
        const url = $(this).attr('href');
        swal.fire({
            title: '¿Está seguro que desea eliminar el registro ?',
            text: "Esta acción no se puede deshacer!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Borrar',
            cancelButtonText: 'Cancelar',
            reverseButtons: true,
        }).then((result) => {
            if (result.value) {
                alert(url);
            //   Swal.fire(
            //     'Borrado!',
            //     'Tu registro ha sido borrado.',
            //     'success'
            //   )
                window.location.href = url;
            }
          });






    //     .then((value) => {
    //         if (value) {
    //             window.location.href = url;
    //         }
    //     });
      })

    $('#nestable').nestable('expandAll');
});
