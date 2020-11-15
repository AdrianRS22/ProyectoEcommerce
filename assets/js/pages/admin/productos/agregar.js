$(document).ready(function () {

    obtenerCategorias();
    
    $("#imagenProducto").parsley({
        required: true,
        requiredMessage: "La imagen del producto es requerida",
    });

    $("#categoriaProducto").change(function (e) { 
        e.preventDefault();

        var id_categoria = $(this).find('option:selected').val();

        obtenerSubCategorias(id_categoria);
    });
});

function obtenerCategorias() {
    $.ajax({
        type: "GET",
        url: "/scripts/obtenerCategoriasPrincipales.php",
        success: function (response) {
            let categorias = $.parseJSON(response);

            $("#categoriaProducto").append(`<option value="" disabled selected>Selecciona una categoría</option>`);
            $.each(categorias, function () { 
                var categoria = this;
                var opcion = `<option value="${categoria.id}">${categoria.nombre}</option>`;
                $("#categoriaProducto").append(opcion);
            });

        }
    });
}

function obtenerSubCategorias(id_categoria){
    $.ajax({
        type: "GET",
        url: "/scripts/obtenerCategoriasSecundarias.php",
        data: {id_categoria: id_categoria},
        success: function (response) {
            let subcategorias = $.parseJSON(response);

            var htmlOpciones = `<option value="" disabled selected>Selecciona una categoría</option>`;
            $.each(subcategorias, function () { 
                var categoria = this;
                htmlOpciones += `<option value="${categoria.id}">${categoria.nombre}</option>`;
            });
            $("#subcategoriaProducto").html(htmlOpciones);
        }
    });
}
