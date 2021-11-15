<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>

<body>
    <form method="post" action="">
        <p>
            <label for="referencia">Numero de referencia</label>
            <input type="text" name="referencia" id="referencia" placeholder="Numero de referencia" require>
        </p>

        <p>
            <label for="nombre" class="numero de ref">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="nombre" require>
        </p>

        <p>
            <label for="caracteristica" class="numero de ref">caracteristica</label>
            <input type="text" name="caracteristica" id="caracteristica" placeholder="caracteristica" require>
        </p>

        <p>
            <label for="marca" class="marca">marca</label>
            <input type="text" name="marca" id="marca" placeholder="marca" require>
        </p>

        <p>
            <label for="numero de ref" class="numero de ref">Modelo</label>
            <input type="text" name="modelo" id="numero de ref" placeholder="modelo" require>
        </p>

        <p>
            <label for="precio" class="precio">Precio</label>
            <input type="text" name="precio" id="numero de ref" placeholder="precio" require>
        </p>

        <p>
            <label for="familia" class="familia">familia</label>
            <input type="text" name="familia" id="numero de ref" placeholder="familia" require>
        </p>


        <button type="submit" name="enviar" id="enviar">Enviar</button>
    </form>
<?php

include("../php/conectar_bd.php");

if (isset($_POST["referencia"], $_POST["nombre"], $_POST["caracteristica"], $_POST["marca"], $_POST["modelo"], $_POST["precio"], $_POST["familia"])) {
    $referencia = $_POST["referencia"];
    $nombre = $_POST["nombre"];
    $caracteristica = $_POST["caracteristica"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $precio = $_POST["precio"];
    $familia = $_POST["familia"];

    $insertar = "INSERT INTO articulos (referencia, nombre, caracteristica, marca, modelo, precio, familia) VALUES ('$referencia','$nombre','$caracteristica','$marca','$modelo','$precio','$familia')";


if (mysqli_query($conexion, $insertar)) {
    echo "Se han introducido correctamente los datos.";
}else{
    echo "Error.";
}
}
?>
</body>

</html>