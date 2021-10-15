<?php
    include('conectar_bd.php');

    $nombre = $_POST["nombre"];
    $contraseña = $_POST["contraseña"];

    $consulta = "SELECT $nombre, $hash FROM usuarios";

    if (mysqli_query($conexion, $consulta)) {
        echo "Se ha iniciado sesión correctamente";
    }else {
        echo "El usuario o la contraseña no son correctas.";
    }

?>