<?php  
include __DIR__ . '/../../shared/conexion.php';

if (isset($_SESSION['usuario'])) {
    try {
        if (isset($_POST)) {

            $consulta = 'call actualizarUsuario(?,?,?)';

            $stmt = $db->prepare($consulta) or trigger_error($db->error, E_USER_ERROR);
            $stmt->bind_param("sss",$_SESSION['usuario']['id'], $_POST["txtNombre"], $_POST["txtApellido"]);
            $stmt->execute();

            if($stmt->errno > 0){
                throw new Exception($stmt->errno);
            } else {
                $_SESSION['usuario']['nombre'] = $_POST['txtNombre'];
                $_SESSION['usuario']['apellidos'] = $_POST['txtApellido'];
                echo "success";
            }

            $stmt->close();
        } 

    } catch (\Throwable $th) {
        echo "error";
    }
} else {
    echo "error";
}