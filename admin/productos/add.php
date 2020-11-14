<?php
require_once '../../shared/header.php';

?>

<div class="row p-2">
    <div class="container_sombreado container">
        <h3 class="text-center colorMarino">Agregar producto</h3>
        <hr>

        <form id="agregarProducto">
             <?php include '../templates/addEditProducto.php'?>
             <input type="submit" class="btn btn-primary" value="Agregar" id="botonAgregarProducto"/>
        </form>
    </div>
</div>

<?php require_once '../../shared/footer.php';?>
<script src="/assets/js/pages/admin/productos/validacionAddEditProducto.js"></script>
<script type="text/javascript" src="/assets/js/pages/admin/productos/agregar.js?v<?php echo date('his') ?>"></script>
</body>

</html>