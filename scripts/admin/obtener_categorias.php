<?php
include __DIR__ . '/../../shared/conexion.php';

$resultado = [];

try {
    $categorias = [];
    $subcategorias = [];

    $consulta = 'call obtener_categorias()';
    $stmt = $db->prepare($consulta) or trigger_error($db->error, E_USER_ERROR);
    $stmt->execute();
    $result = $stmt->get_result();


    while ($row = $result->fetch_assoc()) {
        if($row['parent_id'] > 0){
            array_push($subcategorias, $row);
        }else{
            array_push($categorias, $row);
        }
    }
    $stmt->close();

    foreach ($categorias as $key => $categoria) {
        $categoria['sub_categorias'] = [];

        foreach($subcategorias as $subcategoria){
            if($subcategoria['parent_id'] == $categoria['id']){
                array_push($categoria['sub_categorias'], $subcategoria);
            } 
        }
        $categorias[$key] = $categoria;
    }
    array_push($resultado, $categorias);
    $resultado = json_encode($resultado);
    echo ($resultado);
} catch (\Throwable $th) {
    echo json_encode($resultado);
}

?>