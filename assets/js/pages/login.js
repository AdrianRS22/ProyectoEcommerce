$(document).ready(function () {

    $("#register-form").hide();
    
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

    $("#correo_login").parsley({
        required: true,
        requiredMessage: "El correo es requerido",
        typeMessage: "El correo no es válido"
    });

    $("#clave_login").parsley({
        required: true,
        requiredMessage: "La contraseña es requerida"
    });

    $("#formLogin").on('submit', function (e) {
        e.preventDefault();

        var form = $(this);
        if (form.parsley().isValid()) {
            var datos = JSON.parse(JSON.stringify($(form).serializeArray()));

            $.ajax({
                type: "POST",
                url: "/scripts/obtener_usuario.php",
                data: datos,
                success: function (response) {

                    let decodedResponse = jQuery.parseJSON(response);

                    if (decodedResponse.encontrado) {

                        if(decodedResponse.matchClave){
                            $("#alertaLogin").addClass("d-none");
                            window.location.href = "../../index.php";
                        }else{
                            $("#alertaLogin").removeClass("d-none").addClass("alert-danger");
                            $("#alertaLogin span").html("Contraseña incorrecta");
                        }
                    } else {
                        $("#alertaLogin").removeClass("d-none").addClass("alert-danger");
                        $("#alertaLogin span").html("El correo no ha sido encontrado");
                    }

                }
            });
        }
    });

});