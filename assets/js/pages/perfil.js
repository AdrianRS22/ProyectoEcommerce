$(document).ready(function () {


    $("#txtNombre").parsley({
        required: true,
        requiredMessage: "El nombre es requerido",
    });

    $("#txtApellido").parsley({
        required: true,
        requiredMessage: "El apellido es requerido",
    });

    $("#txtCorreo").parsley({
        required: true,
        requiredMessage: "El Correo es requerido",
    });

    
   

    $("#formActualizar").on("submit", function (e) {
        e.preventDefault();

        var form = $(this);
        if (form.parsley().isValid()) {
            var datos = form.serializeArray();

            $.ajax({
                type: "POST",
                url: "/scripts/perfil/actualizarPerfil.php",
                data: datos,
                success: function (response) {
                    
                    if(response == "success"){
                        mostrarAlerta('success', 'Perfil actualizado', 'El perfil se ha actualizado')
                        .then(() => {
                            window.location.href = "/perfil.php";
                        });
                    
                    }else{
                        mostrarAlerta('error', 'Error', 'Ha ocurrido un error al editar el perfil');
                    }

                }
            });
        }
    });

});


$("#formActualizarClave").on("submit", function (e) {
        e.preventDefault();

        var form = $(this);
        if (form.parsley().isValid()) {
            var datos = form.serializeArray();

            $.ajax({
                type: "POST",
                url: "/scripts/perfil/actualizarclavePerfil.php",
                data: datos,
                success: function (response) {

                    if(response == "success"){
                        mostrarAlerta('success', 'Contraseña', 'La Contraseña ha sido actualizada');
                    }else{
                        mostrarAlerta('error', 'Error', 'Ha ocurrido un error al editar la Contraseña');
                    }
                    
                }
            });
        }
    });


function mostrarAlerta(icono, titulo, texto){
    return swal({
        icon: icono,
        title: titulo,
        text: texto
      });
}
