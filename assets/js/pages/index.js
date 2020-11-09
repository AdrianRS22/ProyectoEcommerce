$(document).ready(function () {

    //obtenerCategorias();

});

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

                    var ul_string = `<ul class="sub-menu collapse show" id='${data_target}'>`;
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