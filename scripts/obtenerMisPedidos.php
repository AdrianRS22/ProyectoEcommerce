<?php
include __DIR__ . '/../shared/conexion.php';

$pedidos = [];

try {

    $consulta = 'call misPedidos(?)';
    $stmt = $db->prepare($consulta) or trigger_error($db->error, E_USER_ERROR);
    $stmt->bind_param("i", $_SESSION['usuario']['id']);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $row['costo'] = number_format($row['costo']);
        $row['fecha'] = date('m/d/Y', strtotime($row['fecha']));
        array_push($pedidos, $row);
    }
    $stmt->close();
} catch (\Throwable $th) {

}

$result = array(
    "data" => $pedidos
);
echo json_encode($result);

?>