<?php 
include __DIR__ . '/../shared/conexion.php';

$producto = [];
//$producto = array();

try {
	if (isset($_GET["producto_id"])) {

		$consulta = 'call obtener_producto(?)';
        $stmt = $db->prepare($consulta) or trigger_error($db->error, E_USER_ERROR);
        $stmt->bind_param("s", $_GET['producto_id']);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
        	$producto = $row;
        }
        $stmt->close();
	}
} catch (\Throwable $th) {
	echo "error";	
}

echo json_encode($producto);
 ?>