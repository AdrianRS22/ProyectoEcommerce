$(document).ready(function () {
    misPedidos.init();
});

var misPedidos = {
    id: "#misPedidos",
    init: function () {
        $(misPedidos.id).DataTable({
            responsive: true,
            searching: true,
            paging: true,
            bInfo: false,
            order: [],
            ajax: {
                url: "/scripts/obtenerMisPedidos.php",
                type: "GET"
            },
            columns: [
                { data: 'id', title: "Número Pedido" },
                { data: 'costo', title: "Costo" },
                { data: 'fecha', title: "Fecha" }
            ],
            columnDefs: [
                {
                    targets: 0,
                    render: function (data, type, row, meta) {
                        return `<a href="/pedido/detalle?id=${data}">${data}</a>`;
                    }
                },
                {
                    targets: 1,
                    render: function (data, type, row, meta) {
                        return '₡' + data;
                    }
                }
            ],
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
            }
        });
    }
}