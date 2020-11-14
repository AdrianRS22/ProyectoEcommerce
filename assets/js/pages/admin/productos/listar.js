$(document).ready(function () {
    tablaListadoProductos.init();
});

var tablaListadoProductos = {
    id: "#tablaListadoProductos",
    init: function () {
        $(tablaListadoProductos.id).DataTable({
            responsive: true,
            searching: true,
            paging: true,
            bInfo: true,
            order: [],
            ajax: {
                url: "/scripts/admin/productos/obtener_productos.php",
                type: "GET"
            },
            columns: [
                { data: 'id', title: "id" },
                { data: 'categoria', title: "Categoría" },
                { data: 'subcategoria', title: "Sub Categoría" },
                { data: 'nombre', title: "Nombre" },
                { data: 'descripcion', title: "Descripción" },
                { data: 'precio', title: "Precio" },
                { data: 'fecha', title: "Fecha Creación" },
                { data: 'id', title: "Acción" }
            ],
            columnDefs: [
                {
                    targets: 7,
                    className: "text-center",
                    bSortable: false,
                    render: function (data, type, row, meta) {
                        return `<a class="btn btn-primary" href="/admin/productos/edit.php?id=${data}"><i class='las la-edit'>Editar</i></a>`;
                    }
                }
            ],
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
            }
        });
    }
}