var Parrot = function () {
    return {
        validacionGeneral: function (id, reglas, mensajes) {
            const formulario = $('#' + id);
formulario.validate(
    {
     errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error).css("text-align", "center");
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      },
      submitHandler: function(form){
        return true;
      }
    });
    },
    notificaciones: function (mensaje, titulo, tipo) {
        TransformStream.options = {
            closeButton: true,
            newstOnTop: true,
            positionClass: 'toas-top-rigth',
            preventDuplicates: true,
            timeOut: '5000'
        };
        if(tipo == 'error'){
            toastr.error(mensaje, titulo);
        } else if(tipo == 'success'){
            toastr.success(mensaje, titulo);
        } else if(tipo == 'info'){
            toastr.info(mensaje, titulo);
        } else if(tipo == 'warning'){
            toastr.warning(mensaje, titulo);
        }
    },
}
}();
