$(document).ready(function () {

    $categoriaId = $("#idCategoria").val();

    obtenerCategoriaPorId($categoriaId);

    $("#nombreCategoria").parsley({
        required: true,
        requiredMessage: "El nombre de la categoría es requerida",
    });

    $("#editarSubCategoria").on('submit', function (e) {
        e.preventDefault();

        var form = $(this);
        if (form.parsley().isValid()) {
            var datos = form.serializeArray();

            $.ajax({
                type: "POST",
                url: "/scripts/admin/categorias/editar_subcategoria.php",
                data: datos,
                success: function (response) {

                    if (response == "success") {
                        mostrarAlerta('success', 'Subcategoría actualizada', 'La subcategoría ha sido actualizada');
                    } else {
                        mostrarAlerta('error', 'Error', 'Ha ocurrido un error al editar la subcategoría');
                    }

                }
            });
        }
    });

});

function obtenerCategorias(categoria_principal) {
    $.ajax({
        type: "GET",
        url: "/scripts/obtenerCategoriasPrincipales.php",
        success: function (response) {
            let categorias = $.parseJSON(response);

            $("#categoriaSubCategoria").append(`<option value="" disabled>Selecciona una categoría</option>`);
            $.each(categorias, function () {
                var categoria = this;
                var opcion = `<option value="${categoria.id}">${categoria.nombre}</option>`;
                $("#categoriaSubCategoria").append(opcion);
            });
            $("#categoriaSubCategoria").val(categoria_principal);
        }
    });
}

function obtenerCategoriaPorId(id_subcategoria) {
    $.ajax({
        type: "GET",
        url: "/scripts/admin/categorias/obtenerCategoriaPorId.php",
        data: { id: id_subcategoria },
        success: function (response) {

            let subcategoria = $.parseJSON(response);

            obtenerCategorias(subcategoria.parent_id);

            if (subcategoria.length != undefined) {
                window.location.href = "/index.php";
            } else {
                $("#nombreCategoria").val(subcategoria.nombre);
                $("#estadoCategoria").val(subcategoria.activo);
            }
        }
    });
}

function mostrarAlerta(icono, titulo, texto) {
    return swal({
        icon: icono,
        title: titulo,
        text: texto
    });
}