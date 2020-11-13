$(document).ready(function () {

    tablaListadoCategorias.init();

});

var tablaListadoCategorias = {
    id: "#tablaListadoCategorias",
    init: function () {
        $(tablaListadoCategorias.id).DataTable({
            searching: true,
            paging: false,
            bInfo: true,
            order: [],
            ajax: {
                url: "/scripts/admin/obtener_categorias.php",
                type: "GET"
            },
            columns: [
                { data: 'id', title: "Id" },
                { data: 'nombre', title: "Nombre" },
                { data: 'subcategorias_count', title: "Subcategorías" },
                { data: 'id', title: "Acción" }
            ],
            columnDefs: [
                {
                    targets: 3,
                    className: "text-center",
                    bSortable: false,
                    render: function (data, type, row, meta) {
                        return `<div class="dropdown show">
                        <a class="btn btn-primary dropdown-toggle" href="#" data-toggle="dropdown">Accion</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="subcategoria.php">Subcategorias</a>
                            <a class="dropdown-item" href="#">Editar</a>
                            <a class="dropdown-item" href="#">Eliminar</a>
                        </div>
                        </div>`;
                    }
                }
            ],
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
            }
        });
    }
}


/*
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
*/