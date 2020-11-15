<?php
require_once '../../shared/header.php';
Utils::isAdmin();
?>

<div class="row">
    <div class="container_sombreado table-responsive">
        <h1 class="text-center colorMarino"> Administrar Productos</h1>
        <hr>
        <a class="btn btn-success text-white mb-3" href="/admin/productos/add.php">Agregar Producto</a>

        <table class="table" id="tablaListadoProductos">
            <thead class="thead-dark">

            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>

<?php require_once '../../shared/footer.php';?>
<script type="text/javascript" src="/assets/js/pages/admin/productos/listar.js?v<?php echo date('his') ?>"></script>

</body>

</html>