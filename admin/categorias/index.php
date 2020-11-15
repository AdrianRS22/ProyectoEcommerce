<?php
require_once '../../shared/header.php';

include '../../scripts/redireccionarNoAdmins.php';
?>


<div class="row p-2">
    <div class="container_sombreado table-responsive">
        <h1 class="text-center colorMarino">Administrar Categorias</h1>
        <hr>
        <a class="btn btn-success text-white mb-3" href="/admin/categorias/add.php">Agregar Categoría</a>
        <table class="table" id="tablaListadoCategorias">
            <thead class="thead-dark">

            </thead>
        </table>
    </div>
</div>

<?php require_once '../../shared/footer.php';?>
<script type="text/javascript" src="/assets/js/pages/admin/categorias/listar.js?v<?php echo date('his') ?>"></script>

</body>

</html>