<?php 
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $db=mysql_connect($servidor,$usuario,$contrasena);
    mysql_select_db("ferreteria",$db);

    mysql_close($db)
?>