$(document).ready(function () {
    Parrot.validacionGeneral('form-general');
    $('#icono').on('blur', function () {
        $('#mostrar-icono').removeClass().addClass('fa fa-fw ' + $('#icono').val());
    });
});
