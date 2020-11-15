<?php
include __DIR__ . '/../../../shared/conexion.php';

$categorias = [];

try {
    
    $consulta = 'call obtenerListaAdminCategorias()';
    $stmt = $db->prepare($consulta) or trigger_error($db->error, E_USER_ERROR);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $row['estado'] = $row['activo'] == 1 ? "Activo" : "Inactivo";
        array_push($categorias, $row);
    }

    $stmt->close();

    $result = array(
        "data" => $categorias
    );
    echo json_encode($result);
} catch (\Throwable $th) {
    echo json_encode($categorias);
}

?>