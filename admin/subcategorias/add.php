<?php
require_once '../../shared/header.php';
Utils::isAdmin();

$categoria_id = 0;

if(isset($_GET['idCategoria']) ){
    $categoria_id = $_GET['idCategoria'];
}else{
    header("Location: /index.php");
}
?>

<div class="row p-2">

    <div class="container_sombreado container">
        <h3 class="text-center colorMarino">Agregar Subcategoría</h3>
        <hr>

        <form id="addSubCategoria">

            <input type="hidden" name="categoria_id" id="idCategoria" value="<?= $categoria_id ?>">

            <?php include '../templates/addEditCategoria.php'?>

            <input type="submit" class="btn btn-primary" value="Agregar" />
        </form>
    </div>
</div>

<?php require_once '../../shared/footer.php';?>
<script type="text/javascript" src="/assets/js/pages/admin/subcategorias/add.js?v=<?php echo date('his') ?>">
</script>

</body>

</html>