<?php
    require_once '../shared/header.php';
?>

<div class="row p-2">
    <div class="container_sombreado container">
        <?php if(isset($_SESSION['usuario'])) :?>
        <h1 class="text-center colorMarino"> Hacer pedido</h1>
        <hr>

        <a href="/carrito" class="colorDarkBlue mb-3 d-block">Ver carrito de compra actual</a>

        <form id="hacerPedido" method="POST" action="/scripts/pedidos/add.php">
            <input type="hidden" name="usuario_id" value="<?= $_SESSION['usuario']['id'] ?>">
            <div class="form-group">
                <div class="col-3">
                    <label for="provincia">Provincia: </label>
                </div>
                <div class="col-12">
                    <input type="text" class="form-control" name="provincia" id="provinciaPedido" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-3">
                    <label for="canton">Cantón: </label>
                </div>
                <div class="col-12">
                    <input type="text" class="form-control" name="canton" id="cantonPedido" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-3">
                    <label for="direccion">Dirección: </label>
                </div>
                <div class="col-12">
                    <textarea class="form-control" name="direccion" id="direccionPedido"></textarea>
                </div>
            </div>

            <input type="submit" name="submit" class="btn btn-primary" value="Hacer Pedido" id="botonHacerPedido" />
        </form>
        <?php else: ?>
        <h1 class="text-center colorMarino">Necesitas estar identificado.</h1>
        <hr>
        <p>Necesitas estar logueado en la web para poder realizar un pedido.</p>
        <?php endif; ?>

    </div>
</div>

<?php require_once '../shared/footer.php';?>
<script src="/../assets/js/pages/pedido.js"></script>