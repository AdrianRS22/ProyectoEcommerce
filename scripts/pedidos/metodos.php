<?php

function obtenerPedidoDetallesConfirmado($db, $id_usuario)
{
    $consulta = "SELECT p.id, p.costo FROM pedidos p
    WHERE p.usuario_id = {$id_usuario} ORDER BY id DESC LIMIT 1;
    ";
    $pedido = $db->query($consulta);
    return $pedido->fetch_object();
}

function obtenerProductosPorPedido($db, $id_pedido)
{
    $consulta = "SELECT p.*, lp.unidades FROM productos p
    INNER JOIN linea_pedidos lp ON p.id = lp.producto_id
    WHERE lp.pedido_id={$id_pedido}";

    $productos = $db->query($consulta);
    return $productos;
}

function obtenerPedidoPorId($db, $id_pedido){
    $consulta = "SELECT * FROM pedidos WHERE id = " . $id_pedido;
    $pedido = $db->query($consulta);
    return $pedido->fetch_object();
}
