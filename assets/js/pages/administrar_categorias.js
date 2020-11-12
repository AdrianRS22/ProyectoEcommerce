$(document).ready(function () {

    obtenerCategorias();
    

});

function obtenerCategorias() {
    $.ajax({
        type: "GET",
        url: "/scripts/admin/obtener_categorias.php",
        success: function (response) {

            let decodedResponse = jQuery.parseJSON(response);

            $.each(decodedResponse, function () {

                var categoria = this;
                    document.getElementById("primeraFila").innerHTML = categoria[0].nombre;
                    document.getElementById("SegundaFila").innerHTML = categoria[1].nombre;
            });
        }
    });


}