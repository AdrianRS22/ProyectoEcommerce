<?php
include __DIR__ . '/../../../shared/conexion.php';

$categoria = null;

try {
    $consulta = 'call obtener_categorias(?)';
    $stmt = $db->prepare($consulta) or trigger_error($db->error, E_USER_ERROR);
    $stmt->bind_param("s", $_GET['id']);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $categoria = $result->fetch_assoc();
    }
    $stmt->close();

    echo json_encode($categoria);
} catch (\Throwable $th) {
    echo json_encode($categoria);
}

?>