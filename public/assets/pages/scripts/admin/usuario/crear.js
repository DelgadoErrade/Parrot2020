$(document).ready(function () {
    const reglas = {
        re_password: {
            equalTo: "#password"
        }
    };
    const mensajes = {
        re_password:
        {
            equalTo: 'Las contraseñas no coinciden'
        }
    };
    Parrot.validacionGeneral('form-general', reglas, mensajes);
    $('#password').on('change', function(){
        const valor = $(this).val();
        if(valor != ''){
            $('#re_password').prop('required', true);
        }else{
            $('#re_password').prop('required', false);
        }
    });
    // Boton multiselect. Se agregó Bootstrap Multiselect
    $('#rol_id').multiselect({
        buttonWidth: '100%',
        nonSelectedText: 'Seleccione el/los roles!'
    });
});

