<?php

include("conectar_bd.php");

if (isset($_POST["nombre"], $_POST["telefono"], $_POST["email"], $_POST["contraseña"])) {
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $contraseña = $_POST["contraseña"];

    $hash = password_hash($contraseña, PASSWORD_BCRYPT);

    $insertar = "INSERT INTO usuarios (id, nombre, telefono, email, contraseña) VALUES ('', '$nombre', '$telefono', '$email', '$hash')";

}else {
    echo "Por favor introduzca todos los datos.";
}


if (mysqli_query($conexion, $insertar)) {
    echo "Se han introducido correctamente los datos.";
    header("location: ../index.php");
}else{
    echo "Error.";
}

?>