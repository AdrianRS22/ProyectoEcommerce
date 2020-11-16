<?php

try {
    if (isset($_GET['id'])) {
        $pedido_id = $_GET['id'];

        $pedido = obtenerPedidoPorId($db, $pedido_id);
        $productos = obtenerProductosPorPedido($db, $pedido_id);
    }else{
        header("Location: /index.php");
    }
} catch (\Throwable $th) {

}