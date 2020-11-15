<?php
    require_once '../shared/header.php';
    $producto_id=0;
     if (isset($_GET["id"])) {
         $producto_id = $_GET["id"];
     }else {
        header("Location: ../index.php");
     }
?>

<input type="hidden" value="<?php echo $producto_id ?>" id="producto_id">


<section id="detalle_producto" class="container_sombreado">
    <h3 class="text-center colorMarino" id="nombreProducto"></h3>
    <hr>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-2 producto">
            <img alt="Producto" id="imagenProducto"/>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pr-4">
            <h3 class="text-center colorDarkBlue">Descripción</h3>
            <p class="text-justify" id="descripcionProducto"></p>

            <p id="precioProducto"></p>

            <a class="btn btn-primary" href="/scripts/carrito/add.php?id=<?= $producto_id ?>">Comprar</a>
        </div>
    </div>

</section>

<?php require_once '../shared/footer.php'; ?>
<script type="text/javascript" src="/../assets/js/pages/producto_detalles.js"></script>
</body>

</html>