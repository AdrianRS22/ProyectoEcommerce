<?php
include __DIR__ . '/../shared/conexion.php';

$resultado = ['encontrado' => false, 'matchclave' => false];

try {
    if (isset($_POST)) {
        $usuario = [];

        $consulta = 'call obtener_usuario(?)';
        $stmt = $db->prepare($consulta) or trigger_error($db->error, E_USER_ERROR);

        $stmt->bind_param("s", $_POST["correo"]);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $resultado['encontrado'] = true;
                if (password_verify($_POST["clave"], $row["clave"])) {
                    $resultado['matchClave'] = true;

                    $usuario['id'] = $row['id'];
                    $usuario['rol_id'] = $row['rol_id'];
                    $usuario['nombre'] = $row['nombre'];
                    $usuario['apellidos'] = $row['apellidos'];
                    $_SESSION['usuario'] = $usuario;
                }
            }
        }
        $stmt->close();
        echo json_encode($resultado);
    }
} catch (\Throwable $th) {
    echo json_encode($resultado);
}
