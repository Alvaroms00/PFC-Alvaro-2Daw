<?php
    $servidor = "localhost";
    $usuario = "root";
    $contraseña = "";
    $db=mysql_connect($servidor,$usuario,$contrasena);
    mysql_select_db("ferreteria",$db);

    $nombre = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];


?>