<?php

include_once 'carrito.php';

if(isset($_GET['action'])){

    $accion = $_GET['action'];
    $carrito = new Carrito();
    switch($accion){
        case 'mostrar':
        mostrar($carrito);
        break;

        case 'add':
        add($carrito);
        break;

        case 'remove':
        remove($carrito);
        break;

        default:
    }
}else{
    echo json_encode(['statuscode' => 404, 
                        'response' => 'No se puede procesar la solicitud']);
}

function mostrar($carrito){
    $itemsCarrito = json_decode($carrito->load(), 1);
    $fullItems = [];
    $total = 0;
    $totalItems = 0;
    foreach($itemsCarrito as $itemCarrito){
        $httpRequest = file_get_contents('http://localhost/curso/49.%20carrito/terminado/api/productos/api-productos.php?get-item=' . $itemCarrito['id']); 
        $itemProducto = json_decode($httpRequest, 1)['item'];
        $itemProducto['cantidad'] = $itemCarrito['cantidad'];
        $itemProducto['subtotal'] = $itemProducto['cantidad'] * $itemProducto['precio'];
        $total += $itemProducto['subtotal'];
        $totalItems += $itemProducto['cantidad'];
        array_push($fullItems, $itemProducto);
    }
    $resArray = array('info' => ['count' => $totalItems, 'total' => $total] ,'items' => $fullItems);
    //array_push($fullItems, ['count' => $totalItems, 'total' => $total]);
    echo json_encode($resArray);
}
