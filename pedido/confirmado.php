<?php
    require_once '../shared/header.php';
    include '../scripts/pedidos/confirm.php';
?>

<div class="row p-2">
    <div class="container_sombreado container">

        <?php if($_SESSION['pedido'] == 'success') : ?>
        <h1 class="text-center colorMarino" id="nombreProducto">Pedido confirmado</h1>
        <hr>

        <h3 class="colorDarkBlue">Datos del pedido: </h3>

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
                <span> <?= $pedido->costo ?></span>
            </div>
        </div>
        <?php endif;  ?>

        <?php if(isset($productos)) :?>
            <table class="table" id="confirmacionPedido">
                <thead class="thead-dark">
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Unidades</th>
                </thead>
                <?php while ($producto = $productos->fetch_object()): ?>
                <tbody>
                    <td>
                        <div class="producto image-wrap">
                            <img alt="Producto" class="img-fluid" id="imagenProducto" src="<?= $producto->imagen ?>" />
                        </div>
                    </td>
                    <td>
                        <a href="#"><?= $producto->nombre ?></a>
                    </td>
                    <td>
                        <?= $producto->precio ?>
                    </td>
                    <td>
                        <?= $producto->unidades ?>
                    </td>
                </tbody>
                <?php endwhile; ?>
            </table>
        <?php endif; ?>

        <?php else: ?>
        <h1 class="text-center colorMarino">No se pudo procesar su pedido</h1>
        <?php endif; ?>

    </div>
</div>

<?php require_once '../shared/footer.php';?>
<script src="/../assets/js/pages/pedido.js"></script>