<?php
require_once '../shared/header.php';

$carrito = [];
if (isset($_SESSION['carrito'])) {
    $carrito = $_SESSION['carrito'];
}

?>

<div class="row p-2">
    <div class="container_sombreado container">
        <h1 class="text-center colorMarino"> Carrito de Compra</h1>
        <hr>

        <table class="table" id="carritoCompra">
            <thead class="thead-dark">
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Unidades</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                <?php foreach($carrito as $indice => $producto) : ?>
                <tr>
                    <td>
                        <div class="producto image-wrap">
                            <img alt="Producto" class="img-fluid" id="imagenProducto" src="<?= $producto['imagen'] ?>" />
                        </div>
                    </td>
                    <td>
                        <a href="/producto/?id=<?= $producto['id'] ?>"><?= $producto['nombre'] ?></a>
                    </td>
                    <td>
                        <?= $producto['precio'] ?>
                    </td>
                    <td class="text-center">
                        <a href="/scripts/carrito/unidades/incrementar.php?indice=<?= $indice ?>" class="btn btn-sm btn-info">+</a>
                        <?= $producto['unidades'] ?>
                        <a href="/scripts/carrito/unidades/disminuir.php?indice=<?= $indice ?>" class="btn btn-sm btn-info">-</a>
                    </td>
                    <td class="text-center">
                        <a href="/scripts/carrito/eliminar.php?indice=<?= $indice ?>" class="btn btn-danger">Quitar producto</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <?php $stats = Utils::statsCarrito(); ?>
        <h3>Cantidad: <?= $stats['count']?></h3>
        <h3>Precio total: <?= $stats['total']?></h3>
        
        <a href="/scripts/carrito/eliminarTodo.php" class="btn btn-danger">Vaciar carrito de compra</a>
        <a href="/pedido" class="btn btn-success">Hacer pedido</a>
    </div>
</div>

<?php require_once '../shared/footer.php';?>
<script src="/../assets/js/pages/carrito.js"></script>
</body>

</html>