<?php 

try {

	if (isset($_POST)) {

		$usuario = null;

		$db = new mysqli("localhost","root","NVpfnuNQNH23dp","proyectoecommerce");
		$consulta = 'SELECT * FROM usuarios WHERE correo= ?';
		$stmt = $db ->prepare($consulta);
		
		$stmt->bind_param("s",$_POST["correo"]);
		$stmt->execute();
		$resultado = $stmt->get_result();
		// var_dump($resultado);
		

		while ($row = $resultado->fetch_assoc()) {
				// var_dump($row);
			if (password_verify($_POST["clave"], $row["clave"])) {
				$usuario = $row;
			}
			
		}
		

		$stmt->close();
		echo json_encode($usuario);

	}




} catch (Exception $e) {
	$mensaje = array('error' => true , 'mensaje' => $e->getMessage());
	echo json_encode($mensaje);
}


 ?>