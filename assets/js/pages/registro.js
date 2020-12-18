$(document).ready(function () {

    $("#correo_registro").parsley({
        required: true,
        requiredMessage: "El correo es requerido",
        typeMessage: "El correo no es válido"
    });

    $("#nombre_registro").parsley({
        required: true,
        requiredMessage: "El nombre es requerido",
    });

    $("#apellidos_registro").parsley({
        required: true,
        requiredMessage: "Los apellidos son requeridos",
    });

    $("#clave_registro").parsley({
        required: true,
        minlength: 6,
        requiredMessage: "La contraseña es requerida",
        minlengthMessage: "La contraseña debe tener más de 5 caracteres"
    });


    $("#formRegistro").on("submit", function (e) {
        e.preventDefault();

        var form = $(this);
        if (form.parsley().isValid()) {
            var datos = form.serializeArray();

            $.ajax({
                type: "POST",
                url: "/scripts/crear_usuario.php",
                data: datos,
                success: function (response) {

                    let decodedResponse = jQuery.parseJSON(response);
                    
                    $("#alertaRegistro").removeClass("d-none");
                    $("#alertaRegistro span").html(decodedResponse.mensaje);
                    switch (decodedResponse.error) {
                        case true:
                            $("#alertaRegistro").removeClass("alert-success").addClass("alert-danger");
                            break;
                        case false:
                            $("#alertaRegistro").removeClass("alert-danger").addClass("alert-success");
                            break;
                    }
                }
            });
        }
    });

});
