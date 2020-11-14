<?php
require_once '../../shared/header.php';

?>

<div class="row p-2">
    <div class="container_sombreado container">
        <h3 class="text-center colorMarino">Agregar categoría</h3>
        <hr>

        <form id="editarCategoria">
             <?php include '../templates/addEditCategoria.php'?>
             <input type="submit" class="btn btn-primary" value="Agregar" />
        </form>
    </div>
</div>

<?php require_once '../../shared/footer.php';?>
<script type="text/javascript" src="/assets/js/pages/admin/categorias/agregar.js?v<?php echo date('his') ?>"></script>

</body>

</html>