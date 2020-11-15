<?php
include __DIR__ . '/../../../shared/conexion.php';

try {
    if (isset($_POST)) {
        $consulta = 'call actualizarSubCategoria(?,?,?,?)';
        $stmt = $db->prepare($consulta) or trigger_error($db->error, E_USER_ERROR);
        $stmt->bind_param("ssss", $_POST['id'], $_POST['categoria'], $_POST['nombre'], $_POST['estado']);
        $stmt->execute();
        
        if ($stmt->affected_rows < 0) {
            throw new Exception($stmt->errno);
        }

        $stmt->close();
        echo "success";
    } else {
        echo "error";
    }
} catch (\Throwable $th) {
    echo "error";
}
