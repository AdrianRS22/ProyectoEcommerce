<?php
include __DIR__ . '/../shared/conexion.php';

$resultado = array(
    "error" => false,
    "mensaje" => ""
);

try {
    if (isset($_POST)) {

        $clave_encriptada = password_hash($_POST["clave"], PASSWORD_BCRYPT, ['cost' => 12]);

        $consulta = 'call registrar_usuario(?,?,?,?)';
        $stmt = $db->prepare($consulta) or trigger_error($db->error, E_USER_ERROR);
        $stmt->bind_param("ssss", $_POST["nombre"], $_POST["apellidos"], $_POST["correo"], $clave_encriptada);
        $stmt->execute();

        if($stmt->errno > 0){
            throw new Exception($stmt->errno);
        }

        $stmt->close();

        $resultado['mensaje'] = "El usuario ha sido creado exitosamente";
        echo json_encode($resultado);
    }
} catch (\Throwable $th) {
    $resultado['error'] = true;
    $resultado['mensaje'] = "Ha ocurrido un error al insertar el usuario";
    
    if($th->getMessage() == 1062){
        $resultado['mensaje'] = "El correo que ha digitado ya existe, Por favor digite uno diferente";
    }
    echo json_encode($resultado);
}