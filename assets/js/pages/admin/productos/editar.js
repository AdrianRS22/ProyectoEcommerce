$(document).ready(function () {
    var id_producto = $("#idProducto").val();

    obtenerProductoPorId(id_producto);

    $("#categoriaProducto").change(function (e) { 
        e.preventDefault();

        var id_categoria = $(this).find('option:selected').val();

        obtenerSubCategorias(id_categoria);
    });
});

function obtenerCategorias(categoria_id) {
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
            $("#categoriaProducto").val(categoria_id);
        }
    });
}

function obtenerProductoPorId(id_producto){
    $.ajax({
        type: "GET",
        url: "/scripts/admin/productos/obtenerProductoPorId.php",
        data: { id: id_producto },
        success: function (response) {

            let producto = $.parseJSON(response);

			if(producto.length != undefined){
				window.location.href ="/index.php";
			}else{
                obtenerCategorias(producto.categoria_principal);
                obtenerSubCategorias(producto.categoria_principal, producto.categoria_id);

				$("#nombreProducto").val(producto.nombre);
                $("#descripcionProducto").val(producto.descripcion);
                $("#precioProducto").val(producto.precio);
			}
        }
    });
}

function obtenerSubCategorias(id_categoria, subcategoria_actual = 0){
    $.ajax({
        type: "GET",
        url: "/scripts/obtenerCategoriasSecundarias.php",
        data: {id_categoria: id_categoria},
        success: function (response) {
            let subcategorias = $.parseJSON(response);

            var htmlOpciones = `<option value="" disabled>Selecciona una categoría</option>`;
            $.each(subcategorias, function () { 
                var categoria = this;
                htmlOpciones += `<option value="${categoria.id}">${categoria.nombre}</option>`;
            });
            $("#subcategoriaProducto").html(htmlOpciones);

            if(subcategoria_actual > 0){
                document.getElementById("subcategoriaProducto").value = subcategoria_actual;
            }
        }
    });
}