<?php
require_once '../../shared/header.php';
include '../../scripts/redireccionarNoAdmins.php';
$id = 0;

if (isset($_GET['id'])) {
    $id = $_GET['id'];  
} else {
    header("Location: /index.php");
}

include '../../scripts/admin/productos/editar_producto.php';

?>

<div class="row p-2">
    <div class="container_sombreado container">
        <h3 class="text-center colorMarino">Editar producto</h3>
        <hr>
        <form id="editarProducto" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" id="idProducto" value="<?= $id ?>"/>

            <?php include '../templates/addEditProducto.php'?>

            <input type="submit" name="submit" class="btn btn-primary" value="Editar" id="botonAgregarProducto" />
        </form>
    </div>
</div>

<?php require_once '../../shared/footer.php';?>
<script src="/assets/js/pages/admin/productos/validacionAddEditProducto.js"></script>
<script type="text/javascript" src="/assets/js/pages/admin/productos/editar.js?v<?php echo date('his') ?>"></script>
</body>

</html>