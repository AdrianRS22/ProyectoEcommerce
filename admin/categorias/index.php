<?php
require_once '../../shared/header.php';
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="/assets/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/assets/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/assets/css/responsive.dataTables.min.css">

<div class="row">

    <div class="container_sombreado table-responsive">
        <h1 class="text-center colorMarino">Administrar Categorias</h1>
        <hr>
        <table class="table" id="tablaListadoCategorias">
            <thead class="thead-dark">

            </thead>
        </table>
    </div>
</div>

<?php require_once '../../shared/footer.php';?>
<script src="/assets/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/js/dataTables.responsive.min.js"></script>
<script src="/assets/js/responsive.bootstrap4.min.js"></script>
<script type="text/javascript" src="/assets/js/pages/admin/administrar_categorias.js?v<?php echo date('his') ?>"></script>

</body>

</html>