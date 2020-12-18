$(document).ready(function () {

    $categoriaId = $("#idCategoria").val();

    obtenerCategoriaPorId($categoriaId);

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
                url: "/scripts/admin/categorias/editar_categoria.php",
                data: datos,
                success: function (response) {

                    if(response == "success"){
                        mostrarAlerta('success', 'Categoría actualizada', 'La categoría ha sido actualizada');
                    }else{
                        mostrarAlerta('error', 'Error', 'Ha ocurrido un error al editar la categoría');
                    }

                }
            });
        }
    });

});

function obtenerCategoriaPorId(categoriaId){
    $.ajax({
        type: "GET",
        url: "/scripts/admin/categorias/obtenerCategoriaPorId.php",
        data: { id: categoriaId },
        success: function (response) {

            let categoria = $.parseJSON(response);

			if(categoria.length != undefined){
				window.location.href ="/index.php";
			}else{
				$("#nombreCategoria").val(categoria.nombre);
				$("#estadoCategoria").val(categoria.activo);
			}
        }
    });
}

function mostrarAlerta(icono, titulo, texto){
    return swal({
        icon: icono,
        title: titulo,
        text: texto
      });
}