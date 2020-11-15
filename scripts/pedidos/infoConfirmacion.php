<?php

try {
    if (isset($_SESSION['usuario'])) {
        $pedido = obtenerPedidoDetallesConfirmado($db, $_SESSION['usuario']['id']);
        $productos = obtenerProductosPorPedido($db, $pedido->id);
    }else{
        header("Location: /index.php");
    }
} catch (\Throwable $th) {
    //throw $th;
}