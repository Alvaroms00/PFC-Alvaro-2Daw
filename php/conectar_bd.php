<?php
$servidor = "localhost";
$usuario_bd = "root";
$clave_bd = "";
$basededatos = "ferreteria";


$conexion = mysqli_connect($servidor, $usuario_bd, $clave_bd);

$db = mysqli_select_db($conexion, $basededatos);

if (!$conexion) {
    echo "ERROR: Imposible establecer conexión con el servidor (puede que este desactivado o que no se encuentre en el servidor $servidor).<br>\n";
} else {
}
