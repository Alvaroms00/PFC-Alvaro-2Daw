<?php
include("conectar_bd.php");
session_start();

if (isset($_POST['registrar'])) {
    if (isset($_POST["nombre"], $_POST["telefono"], $_POST["email"], $_POST["contraseña"])) {
        $nombre = $_POST["nombre"];
        $telefono = $_POST["telefono"];
        $email = $_POST["email"];
        $contraseña = $_POST["contraseña"];

        $hash = password_hash($contraseña, PASSWORD_BCRYPT);

        $insertar = "INSERT INTO usuarios (id, nombre, telefono, email, contraseña) VALUES ('', '$nombre', '$telefono', '$email', '$hash')";


        if (mysqli_query($conexion, $insertar)) {
            echo "Se ha registrado correctamente";
            header("location: ../index.php");
        } else {
            echo "Error.";
        }
    }
}


?>