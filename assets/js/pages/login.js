$(document).ready(function () {

    $("#register-form").hide();
    $("#forgot-form").hide();
    $(".register-form-link").click(function (e) {
        $("#login-form").slideUp(0);
        $("#forgot-form").slideUp(0)
        $("#register-form").fadeIn(300);
    });

    $(".login-form-link").click(function (e) {
        $("#register-form").slideUp(0);
        $("#forgot-form").slideUp(0);
        $("#login-form").fadeIn(300);
    });

    $(".forgot-form-link").click(function (e) {
        $("#login-form").slideUp(0);
        $("#forgot-form").fadeIn(300);
    });
    
    $("#formLogin").parsley({
        errorClass: 'is-invalid text-danger',
        successClass: 'is-valid',
        errorsWrapper: '<span class="form-text text-danger"></span>',
        errorTemplate: '<span></span>',
        trigger: 'change'
    });

    $("#correo_login").parsley({
        required: true,
        requiredMessage: "El correo es requerido",
        typeMessage: "El correo no es válido"
    });

    $("#clave_login").parsley({
        required: true,
        minlength: 6,
        requiredMessage: "La contraseña es requerida",
        minlengthMessage: "La contraseña debe tener más de 5 caracteres"
    });

    $("#formLogin").on('submit', function (e) {
        e.preventDefault();

        var form = $(this);
        if(form.parsley().isValid()){
            var datos = JSON.parse(JSON.stringify($(form).serializeArray()));

            $.ajax({
                type: "POST",
                url: "/scripts/usuarios/get_usuario.php",
                data: datos,
                success: function (response) {
                    console.log(response);
                }
            });
        }
    });

});