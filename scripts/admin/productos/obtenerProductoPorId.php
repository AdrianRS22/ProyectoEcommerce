<?php
include __DIR__ . '/../../../shared/conexion.php';

$producto = null;

try {
    $consulta = 'call obtener_producto(?)';
    $stmt = $db->prepare($consulta) or trigger_error($db->error, E_USER_ERROR);
    $stmt->bind_param("s", $_GET['id']);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $producto = $result->fetch_assoc();
    }
    $stmt->close();
} catch (\Throwable $th) {

}

echo json_encode($producto);
