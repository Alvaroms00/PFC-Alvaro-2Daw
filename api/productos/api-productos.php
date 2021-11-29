<?php

include_once 'productos.php';

if(isset($_GET['familia'])){
    $familia = $_GET['familia'];

    if($familia == ''){
        echo json_encode(['statuscode' => 400, 'response' => 'No existe esa familia']);
    }else{
        $productos = new Productos();
        $items = $productos->getItemsByCategory($familia);

        echo json_encode(['statuscode' => 200, 'items' => $items]);
    }
}else if(isset($_GET['get-item'])){
    $id = $_GET['get-item'];

    if($id == ''){
        echo json_encode(['statuscode' => 400, 'response' => 'no hay valor para id']);
    }else{
        $productos = new Productos();
        $item = $productos->get($id);
        echo json_encode(['statuscode' => 200, 'item' => $item]);
    }

}else{
    echo json_encode(['statuscode' => 400, 'response' => 'No hay accion']);
}

?>