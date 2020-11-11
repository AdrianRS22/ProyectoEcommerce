<?php 
include __DIR__ . '/../shared/conexion.php';

$productos = array();

try {
	if (isset($_GET["categoria_id"])) {

		$consulta = 'call obtenerProductosPorCategoria(?)';
        $stmt = $db->prepare($consulta) or trigger_error($db->error, E_USER_ERROR);
        $stmt->bind_param("s", $_GET['categoria_id']);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            array_push($productos, $row);
        }
        $stmt->close();
	}
} catch (\Throwable $th) {
	echo "error";	
}

echo json_encode($productos);
 ?>