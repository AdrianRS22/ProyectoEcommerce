<?php
require_once '../shared/header.php';

$carrito = [];
if (isset($_SESSION['carrito'])) {
    $carrito = $_SESSION['carrito'];
}

?>

<div class="row p-2">
    <div class="container_sombreado container">
        <h1 class="text-center colorMarino"> Carrito de compra</h1>
        <hr>

        <table class="table" id="carritoCompra">
            <thead class="thead-dark">
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Unidades</th>
            </thead>
            <tbody>
                <?php foreach($carrito as $producto) : ?>
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
                    <td>
                        <?= $producto['unidades'] ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <?php $stats = Utils::statsCarrito(); ?>
        <h3>Cantidad: <?= $stats['count']?></h3>
        <h3>Precio total: <?= $stats['total']?></h3>

        <a href="/pedido" class="btn btn-success">Hacer pedido</a>
    </div>
</div>

<?php require_once '../shared/footer.php';?>
<script src="/../assets/js/pages/carrito.js"></script>
</body>

</html>