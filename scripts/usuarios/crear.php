<?php 




try {

	if (isset($_POST)) {

		$clave_encriptada = password_hash($_POST["clave"],PASSWORD_BCRYPT,['cost' => 12]);

		$db = new mysqli("localhost","root","NVpfnuNQNH23dp","proyectoecommerce");
		$consulta = 'INSERT into usuarios VALUES(null,1,?,?,?,?)';
		$stmt = $db ->prepare($consulta);
		$stmt->bind_param("ssss",$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$clave_encriptada);
		$stmt->execute();
		echo "Usuario creado";
		$stmt->close();
	}




} catch (Exception $e) {
	$mensaje = array('error' => true , 'mensaje' => $e->getMessage());
	echo json_encode($mensaje);
}


?>

