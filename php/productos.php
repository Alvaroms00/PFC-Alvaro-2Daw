<?php 
include("conectar_bd.php");

$insertar = "INSERT INTO `articulos`(`id`, `numero de referencia`, `nombre completo`, `modelo`, `marca`, `precio`, `familia`) 
VALUES ('1','6255808507','Miniamoladora 720W 115mm SAR','GA4530R','Makita','80.23','Herramienta Eléctrica')";


if (mysqli_query($conexion, $insertar)) {
    echo "Se han introducido los datos correctamente.";
}else {
    echo "Ha habido un error.";
}
?>