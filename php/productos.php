<?php 
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$db=mysql_connect($servidor,$usuario,$contrasena);
mysql_select_db("ferreteria",$db);

$sql = "INSERT INTO productos(id, nombre, modelo, precio) VALUES ('6255808507' , 'Amoladora Makita', 'GA4530R', '80.23'); "

$sql = $insert.$values;
?>