$(document).ready(function () {
    $("#provinciaPedido").parsley({
        required: true,
        requiredMessage: "La provincia es requerida",
    });
    
    $("#cantonPedido").parsley({
        required: true,
        requiredMessage: "El cantón es requerido",
    });
    
    $("#direccionPedido").parsley({
        required: true,
        requiredMessage: "La dirección es requerida",
    });

    $("#confirmacionPedido").DataTable({
        responsive: true,
        paging: false,
        searching: false,
        bInfo: false
    });

    
});