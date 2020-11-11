$(document).ready(function () {

    obtenerCategorias();
    obtenerProductos();

    $(document).on('click', '#menu-categorias > li > ul > li', function (e) {
        e.stopPropagation();
        var subcategoria_id = $(this).val();
        obtenerProductosPorCategoria(subcategoria_id);
    });

});

function obtenerProductos(producto_id = 0) {

    $.ajax({
        type: "GET",
        url: "/scripts/obtener_producto.php",
        data: { producto_id: producto_id },
        success: function (response) {
            let productos = $.parseJSON(response);
            var contenido_productos = obtenerContenidoProductos(productos);
            $("#contenido-productos").html(contenido_productos);
        }
    });
}

function obtenerProductosPorCategoria(categoriaId) {
    $.ajax({
        type: "GET",
        url: "/scripts/obtenerProductosPorCategoria.php",
        data: { categoria_id: categoriaId },
        success: function (response) {
            let productos = $.parseJSON(response);

            if(productos.length > 0){
                var contenido_productos = obtenerContenidoProductos(productos);
            }else{
                var contenido_productos = `<div class='mx-auto'>
                    No se ha encontrado ningun producto asociado a esta categoria
                </div>`;
            }
            $("#contenido-productos").html(contenido_productos);
        }
    });
}

function obtenerCategorias() {
    $.ajax({
        type: "GET",
        url: "/scripts/obtener_categorias.php",
        success: function (response) {

            let decodedResponse = jQuery.parseJSON(response);

            $.each(decodedResponse, function () {

                $.each(this, function () {

                    var categoria = this;

                    var data_target = categoria.nombre.normalize("NFD").replace(/[\s\u0300-\u036f]/g, "");
                    var li_string = `<li data-toggle='collapse' data-target='#${data_target}'>`;
                    li_string += `<a href="#">${categoria.nombre}</a>`;

                    var ul_string = `<ul class="sub-menu collapse" id='${data_target}'>`;
                    $.each(categoria.sub_categorias, function () {
                        var sub_categoria = this;
                        ul_string += `<li value='${sub_categoria.id}'><a href='#'>${sub_categoria.nombre}</a></li>`;
                    });
                    ul_string += `</ul>`;

                    li_string += ul_string + `</li>`;
                    $("#menu-categorias").append(li_string);

                });
            });
        }
    });
}

function obtenerContenidoProductos(productos) {
    var contenido_productos = ``;
    $.each(productos, function () {
        var producto = this;
        contenido_productos += `<article class="producto">
         <div class="image-wrap">
             <img src="${producto.imagen}" alt="Producto">
         </div>
         <div class="productdetails_button">
             <a href="/producto/?id=${producto.id}" class="btn btn-primary">Ver detalles</a>
         </div>
        </article>`;
    });
    return contenido_productos;
}