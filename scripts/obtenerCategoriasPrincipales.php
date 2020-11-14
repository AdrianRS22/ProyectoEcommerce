<?php
include __DIR__ . '/../shared/conexion.php';

$categorias = [];

try {
    $consulta = 'call obtenerCategoriasPrincipales()';
    $stmt = $db->prepare($consulta) or trigger_error($db->error, E_USER_ERROR);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        array_push($categorias, $row);
    }
    $stmt->close();
} catch (\Throwable $th) {

}

echo json_encode($categorias);
