<?php

if (isset($_POST['submit'])) {

    try {

        if (!empty($_FILES['imagen']['name'])) {
            $nombreImagen = $_FILES['imagen']['name'];
            $fullUrl = '../../temp/' . $nombreImagen;

            move_uploaded_file($_FILES['imagen']['tmp_name'], $fullUrl);

            $s3_nombreImagen = 'productos/' . $nombreImagen;

            $handle = fopen($fullUrl, 'r');
            $s3->putObject([
                'Bucket' => AWS_BUCKET,
                'Key' => $s3_nombreImagen,
                'Body' => $handle,
                'ACL' => 'public-read',
            ]);
            fclose($handle);

            unlink($fullUrl);

            $fullS3Url = AWS_URL . $s3_nombreImagen;

            $consulta = 'call actualizarImagenProducto(?,?)';
            $stmt = $db->prepare($consulta) or trigger_error($db->error, E_USER_ERROR);
            $stmt->bind_param("is", $_POST['id'], $fullS3Url);
            $stmt->execute();

            if ($stmt->affected_rows < 0) {
                throw new Exception($stmt->errno);
            }
            $stmt->close();
        }

        $consulta = 'call actualizarProducto(?,?,?,?,?)';
        $stmt = $db->prepare($consulta) or trigger_error($db->error, E_USER_ERROR);
        $stmt->bind_param("iissd", $_POST['id'], $_POST['subcategoria'], $_POST['nombre'], $_POST['descripcion'], $_POST['precio']);
        $stmt->execute();
        
        if ($stmt->affected_rows < 0) {
            throw new Exception($stmt->errno);
        }
        $stmt->close();
    } catch (\Throwable $th) {

    }

    header("Location: /admin/productos");
}
