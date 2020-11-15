$(document).ready(function () {

    tablaListadoSubCategorias.init();

});

var tablaListadoSubCategorias = {
    id: "#tablaListadoSubCategorias",
    init: function () {

        var categoriaId = $("#idCategoria").val();

        var tabla = $(tablaListadoSubCategorias.id).DataTable({
            responsive: true,
            searching: true,
            paging: true,
            bInfo: true,
            order: [],
            ajax: {
                url: "/scripts/obtenerCategoriasSecundarias.php",
                type: "GET",
                data: {id_categoria: categoriaId},
                dataSrc: ""
            },
            columns: [
                { data: 'id', title: "Id" },
                { data: 'nombre', title: "Nombre" },
                { data: 'activo', title: "Estado" },
                { data: 'id', title: "Acción" }
            ],
            columnDefs: [
                {
                    targets: 2,
                    render: function (data, type, row, meta) {
                        return data == 0 ? "Inactivo" : "Activo";
                    }
                },
                {
                    targets: 3,
                    className: "text-center",
                    bSortable: false,
                    render: function (data, type, row, meta) {
                        return `<a class="btn btn-primary" href="/admin/subcategorias/edit.php?id=${data}"><i class='las la-edit'>Editar</i></a>`;
                    }
                }
            ],
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
            },
            "initComplete": function(settings, json) {
                var column = tabla.row(0).data();
                $("#nombreCategoriaPrincipal").html(column.categoriaPrincipal);
            }
        });
    }
}