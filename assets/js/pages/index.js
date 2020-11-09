$(document).ready(function () {

    obtenerCategorias();
    
});

function obtenerCategorias(){
    $.ajax({
        type: "GET",
        url: "/scripts/obtener_categorias.php",
        success: function (response) {
            
        }
    });
}