<?php

Utils::IsLoginSet();

try {
    $pedido = obtenerPedidoDetallesConfirmado($db, $_SESSION['usuario']['id']);
    $productos = obtenerProductosPorPedido($db, $pedido->id);
} catch (\Throwable $th) {
    //throw $th;
}
