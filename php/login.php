<?php
include("conectar_bd.php");

if (isset($_POST['iniciar'])) {
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];

    $query = "SELECT * FROM usuarios";

    if (password_verify($contraseña, $hash)) {
        echo "Se ha iniciado correctamente la sesion";
        header("location: ../index.php");
    }else{
        echo "El usuario o la contraseña son incorrectas";
    }
}
