<?php
    require_once '../shared/header.php';
    include '../scripts/pedidos/metodos.php';
    include '../scripts/pedidos/infoDetallesPedido.php';
?>

<div class="row p-2">
    <div class="container_sombreado container">

        <h1 class="text-center colorMarino" id="nombreProducto">Detalles del pedido</h1>
        <hr>

        <?php if(isset($pedido)) : ?>
        <div class="row">
            <div class="col-6">
                <label>Número de pedido:</label>
            </div>
            <div class="col-6">
                <span><?= $pedido->id ?></span>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <label>Total a pagar:</label>
            </div>
            <div class="col-6">
                <span> <?= $pedido->costo ?> colones</span>
            </div>
        </div>
        <?php endif;  ?>

        <?php if(isset($productos)) :?>
        <table class="table" id="confirmacionPedido">
            <thead class="thead-dark">
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Unidades</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($producto = $productos->fetch_object()): ?>
                <tr>
                    <td>
                        <div class="producto image-wrap">
                            <img alt="Producto" class="img-fluid" id="imagenProducto" src="<?= $producto->imagen ?>" />
                        </div>
                    </td>
                    <td>
                        <a href="/producto/?id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
                    </td>
                    <td>
                        <?= $producto->precio ?>
                    </td>
                    <td>
                        <?= $producto->unidades ?>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>

<?php require_once '../shared/footer.php';?>
<script src="/../assets/js/pages/pedido.js"></script>