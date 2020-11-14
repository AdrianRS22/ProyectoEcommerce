$(document).ready(function () {

    tablaListadoCategorias.init();

});

var tablaListadoCategorias = {
    id: "#tablaListadoCategorias",
    init: function () {
        $(tablaListadoCategorias.id).DataTable({
            responsive: true,
            searching: true,
            paging: true,
            bInfo: true,
            order: [],
            ajax: {
                url: "/scripts/admin/categorias/obtener_categorias.php",
                type: "GET"
            },
            columns: [
                { data: 'id', title: "Id" },
                { data: 'nombre', title: "Nombre" },
                { data: 'subcategorias_count', title: "Subcategorías" },
                { data: 'estado', title: "Estado" },
                { data: 'id', title: "Acción" }
            ],
            columnDefs: [
                {
                    targets: 4,
                    className: "text-center",
                    bSortable: false,
                    render: function (data, type, row, meta) {
                        return `<div class="dropdown show">
                        <a class="btn btn-primary dropdown-toggle" href="#" data-toggle="dropdown">Accion</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/admin/categorias/subcategoria.php"><i class="las la-tag">Subcategorias</i></a>
                            <a class="dropdown-item" href="/admin/categorias/edit.php?id=${data}"><i class='las la-edit'>Editar</i></a>
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