<?php
include __DIR__ . '/../../../shared/conexion.php';

$productos = [];

try {

    $consulta = 'call obtenerListaAdminProductos()';
    $stmt = $db->prepare($consulta) or trigger_error($db->error, E_USER_ERROR);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $row['precio'] = number_format($row['precio']);
        $row['fecha'] = date('d/m/Y', strtotime($row['fecha']));
        array_push($productos, $row);
    }
    $stmt->close();
} catch (\Throwable $th) {

}

$result = array(
    "data" => $productos
);
echo json_encode($result);

?>