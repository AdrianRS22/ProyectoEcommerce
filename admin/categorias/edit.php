<?php
require_once '../../shared/header.php';
include '../../scripts/redireccionarNoAdmins.php';
$id = 0;

if(isset($_GET['id']) ){
    $id = $_GET['id'];
}else{
    header("Location: /index.php");
}
?>

<div class="row p-2">

    <div class="container_sombreado container">
        <h3 class="text-center colorMarino">Editar categoría</h3>
        <hr>

        <form id="editarCategoria">

            <input type="hidden" name="id" id="idCategoria" value="<?= $id ?>">

            <?php include '../templates/addEditCategoria.php'?>

            <div class="form-group row">
            
                <div class="col-3 col-sm-2">
                    <label for="estado">Estado: </label>
                </div>

                <div class="col-9 col-sm-10">
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
<script type="text/javascript" src="/assets/js/pages/admin/categorias/editar.js?v=<?php echo date('his') ?>"></script>

</body>

</html>