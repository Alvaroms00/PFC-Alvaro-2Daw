<?php
    include('conectar_bd.php');

    $nombre = $_POST["nombre"];
    $contraseña = $_POST["contraseña"];

    $consulta = "SELECT * FROM usuarios WHERE 1";

    if (mysqli_query($conexion, $consulta)) {
        echo "Se ha iniciado sesión correctamente";
    }else {
        echo "El usuario o la contraseña no son correctas.";
    }

?>