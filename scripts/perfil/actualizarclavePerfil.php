<?php  
include __DIR__ . '/../../shared/conexion.php';

if (isset($_SESSION['usuario'])) {
    try {
        if (isset($_POST)) {

            $clave_encriptada = password_hash($_POST['clave'], PASSWORD_BCRYPT, ['cost' => 12]);

            $consulta = 'call actualizarUsuarioClave(?,?)';

            $stmt = $db->prepare($consulta) or trigger_error($db->error, E_USER_ERROR);
            $stmt->bind_param("ss",$_SESSION['usuario']['id'], $clave_encriptada);
            $stmt->execute();

            if($stmt->errno > 0){
                throw new Exception($stmt->errno);
            } else {
                echo "success";
            }
            
        } 

    } catch (\Throwable $th) {
        echo "error";
    }
} else {
    echo "error";
}
