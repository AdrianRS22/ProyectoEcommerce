<?php

try {
    if (isset($_POST)) {
        $usuario = [];

        $db = new mysqli("localhost", "root", "adminadmin", "proyectoecommerce");

        $consulta = 'SELECT * FROM usuarios WHERE correo= ?';
        $stmt = $db->prepare($consulta);

        $stmt->bind_param("s", $_POST["correo"]);
        $stmt->execute();
        $resultado = $stmt->get_result();

        while ($row = $resultado->fetch_assoc()) {
            if (password_verify($_POST["clave"], $row["clave"])) {
                $usuario['id'] = $row['id'];
                $usuario['rol_id'] = $row['rol_id'];
                $usuario['nombre'] = $row['nombre'];
                $usuario['apellidos'] = $row['apellidos'];
            }

        }
        $stmt->close();

        $resultado = array('usuario' => $usuario);
        !empty($usuario) ? $resultado['encontrado'] = true : $resultado['encontrado'] = false;

        echo json_encode($resultado);
    }
} catch (Exception $e) {
    $mensaje = array('error' => true, 'mensaje' => $e->getMessage());

    $resultado = [
        'encontrado' => false,
        'usuario' => [],
    ];
    echo json_encode($resultado);
}
