<?php
session_start();

if (isset($_SESSION['usuario'])) {
    if (isset($_GET['id'])) {
        $producto_id = $_GET['id'];
    } else {
        header("Location: /index.php");
    }

    if (isset($_SESSION['carrito'])) {
        $contador = 0;
        foreach ($_SESSION['carrito'] as $indice => $elemento) {
            if ($elemento['id'] == $producto_id) {
                $_SESSION['carrito'][$indice]['unidades']++;
                $contador++;
            }
        }
    }

    if (!isset($contador) || $contador == 0) {
        $ch = curl_init();

        $url = $_SERVER['SERVER_NAME'] . '/scripts/obtener_producto.php?producto_id=' . $producto_id;
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_URL, $url);
        $resultado = curl_exec($ch);
        $producto = json_decode($resultado);

        if (is_object($producto)) {
            $_SESSION['carrito'][] = array(
                'id' => $producto->id,
                'categoriaId' => $producto->categoria_principal,
                'subCategoriaId' => $producto->categoria_id,
                'nombre' => $producto->nombre,
                'descripcion' => $producto->descripcion,
                'precio' => $producto->precio,
                'imagen' => $producto->imagen,
                'fecha' => date('d/m/Y', strtotime($producto->fecha)),
                'unidades' => 1,
            );
        }
    }
    header("Location: /carrito");
} else {
    header("Location: /login.php");
}
