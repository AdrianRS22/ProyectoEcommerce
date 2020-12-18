$(document).ready(function () {
    
    $("#nombreCategoria").parsley({
        required: true,
        requiredMessage: "El nombre de la categoría es requerida",
    });

    $("#editarCategoria").on('submit', function (e) {
        e.preventDefault();

        var form = $(this);
        if (form.parsley().isValid()) {
            var datos = form.serializeArray();

            $.ajax({
                type: "POST",
                url: "/scripts/admin/categorias/agregar_categoria.php",
                data: datos,
                success: function (response) {

                    if(response == "success"){
                        mostrarAlerta('success', 'Categoría agregada', 'La categoría ha sido agregada').then(function() {
                        window.location = "index.php";
                    });
                    }else{
                        mostrarAlerta('error', 'Error', 'Ha ocurrido un error al agregar la categoría');
                    }

                }
            });
        }
    });

});

function mostrarAlerta(icono, titulo, texto){
    return swal({
        icon: icono,
        title: titulo,
        text: texto
      });
}