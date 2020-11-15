<?php
    require_once 'shared/header.php';
?>

<div class="row p-2">
    <div class="container_sombreado table-responsive">
        <h1 class="text-center colorMarino">Mis pedidos</h1>
        <hr>
        <table class="table" id="misPedidos">
            <thead class="thead-dark">

            </thead>
        </table>
    </div>
</div>

<?php require_once 'shared/footer.php'; ?>
<script src="/assets/js/pages/mispedidos.js?v=<?php echo date('his'); ?>"></script>

</body>

</html>