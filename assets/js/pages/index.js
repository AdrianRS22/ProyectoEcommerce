$(document).ready(function () {

    obtenerCategorias();
    obtenerProductos();

    $(document).on('click', '#menu-categorias > li > ul > li', function (e) {
        e.stopPropagation();
    });

});

function obtenerProductos(producto_id = 0){

    $.ajax({
        type: "GET",
        url: "/scripts/obtener_producto.php",
		data: { producto_id: producto_id },
        success: function (response) {
            let productos = $.parseJSON(response);

            var contenido_articulos = ``;
            $.each(productos, function () { 
                 var producto = this;
                 contenido_articulos += `<article class="producto">
                 <div class="image-wrap">
                     <img src="${producto.imagen}" alt="Producto">
                 </div>
                 <div class="productdetails_button">
                     <a href="/producto/?id=${producto.id}" class="btn btn-primary">Ver detalles</a>
                 </div>
                </article>`;
            });
            $("#contenido-productos").append(contenido_articulos);
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
                        ul_string += `<li><a href='#'>${sub_categoria.nombre}</a></li>`;
                    });
                    ul_string += `</ul>`;

                    li_string += ul_string + `</li>`;
                    $("#menu-categorias").append(li_string);

                });
            });
        }
    });
}