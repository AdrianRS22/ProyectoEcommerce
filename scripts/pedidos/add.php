<?php
include __DIR__ . '/../../shared/conexion.php';

if (isset($_SESSION['usuario'])) {
    try {
        if (isset($_POST)) {

            $stats = Utils::statsCarrito();
            $agregarPedido = agregarPedido($db, $stats);

            if (!$agregarPedido) {
                throw new Exception("Error al agregar pedido");
            }

            $agregarLineaPedidos = agregarLineaPedidos($db);
            if (!$agregarLineaPedidos) {
                throw new Exception("Error al agregar linea pedidos");
            }
        } else {
            $_SESSION['pedido'] = "failed";
        }

        $_SESSION['pedido'] = "success";
        
        header("Location: /pedido/confirmado.php");
    } catch (\Throwable $th) {
        $_SESSION['pedido'] = "failed";
        header("Location: /index.php");
    }
} else {
    header("Location: /index.php");
}

function agregarPedido($db, $stats)
{
    $resultado = false;

    $consulta = 'call agregarPedido(?,?,?,?,?)';
    $stmt = $db->prepare($consulta) or trigger_error($db->error, E_USER_ERROR);
    $stmt->bind_param("isssd", $_POST['usuario_id'], $_POST['provincia'], $_POST['canton'],
        $_POST['direccion'], $stats['total']);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $resultado = true;
    }
    $stmt->close();

    return $resultado;
}

function agregarLineaPedidos($db)
{

    $resultado = true;
    $query = $db->query("SELECT LAST_INSERT_ID() as 'pedido_id'");
    $pedido_id = $query->fetch_object()->pedido_id;

    foreach ($_SESSION['carrito'] as $producto) {
        $stmt = $db->prepare("call agregarLineaPedidos(?,?,?)") or trigger_error($db->error, E_USER_ERROR);
        $stmt->bind_param("iii", $pedido_id, $producto['id'], $producto['unidades']);
        $stmt->execute();

        if ($stmt->affected_rows < 0) {
            $resultado = false;
        }
        $stmt->close();
    }

    return $resultado;
}

