<?php
require_once '../../shared/header.php';
Utils::isAdmin();
$id = 0;

if(isset($_GET['id']) ){
    $id = $_GET['id'];
}else{
    header("Location: /index.php");
}
?>

<div class="row p-2">

    <div class="container_sombreado container">
        <h3 class="text-center colorMarino">Editar subcategoría</h3>
        <hr>

        <form id="editarSubCategoria">

            <input type="hidden" name="id" id="idCategoria" value="<?= $id ?>">

            <div class="form-group">
                <div class="col-3">
                    <label for="categoria">Categoría: </label>
                </div>

                <div class="col-12">
                    <select name="categoria" id="categoriaSubCategoria" class="form-control"></select>
                </div>
            </div>

            <?php include '../templates/addEditCategoria.php'?>

            <div class="form-group">
                <div class="col-3">
                    <label for="estado">Estado: </label>
                </div>

                <div class="col-12">
                    <select name="estado" id="estadoCategoria" class="form-control">
                        <option value="0">Inactivo</option>
                        <option value="1">Activo</option>
                    </select>
                </div>
            </div>

            <input type="submit" class="btn btn-primary" value="Editar" />
        </form>
    </div>
</div>

<?php require_once '../../shared/footer.php';?>
<script type="text/javascript" src="/assets/js/pages/admin/subcategorias/editar.js?v=<?php echo date('his') ?>">
</script>

</body>

</html>