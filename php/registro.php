<?php

include("conectar_bd.php");

if (isset($_POST["nombre"], $_POST["telefono"], $_POST["email"], $_POST["contraseña"])) {
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $contraseña = $_POST["contraseña"];

    $insertar = "INSERT INTO usuarios (id, nombre, telefono, email, contraseña) VALUES ('0', '$nombre', '$telefono', '$email', '$contraseña')";

}else {
    echo "Por favor introduzca todos los datos.";
}


if (mysqli_query($conexion, $insertar)) {
    echo "Se han introducido correctamente los datos.";
}else{
    echo "Error.";
}

?>