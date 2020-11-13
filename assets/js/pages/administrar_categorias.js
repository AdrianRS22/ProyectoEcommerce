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

                var categorias = this;
                    document.getElementById("primeraFila").innerHTML = categorias.nombre;
                    document.getElementById("SegundaFila").innerHTML = categorias.nombre;
            });
        }
    });


}