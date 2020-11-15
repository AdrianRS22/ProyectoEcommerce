<?php
    require_once '../../shared/header.php';

    include '../../scripts/redireccionarNoAdmins.php';

    $id = 0;

    if(isset($_GET['categoriaId']) ){
        $id = $_GET['categoriaId'];
    }else{
        header("Location: /index.php");
    }
?>
<input type="hidden" id="idCategoria" value="<?= $id ?>"/>
<div class="row">

    <div class="container_sombreado table-responsive">
        <h1 class="text-center colorMarino">Administrar Subcategorias</h1>
        <hr>
        <p>Categoria: <span id="nombreCategoriaPrincipal"></span></p>
        <table class="table" id="tablaListadoSubCategorias">
            <thead class="thead-dark">
            
            </thead>
        </table>
    </div>

</div>

<?php require_once '../../shared/footer.php'; ?>
<script type="text/javascript" src="/assets/js/pages/admin/subcategorias/listar.js?v<?php echo date('his') ?>"></script>

</body>

</html>