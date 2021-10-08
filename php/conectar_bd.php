<?php 
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $db=mysql_connect($servidor,$usuario,$contrasena);
    mysql_select_db("ferreteria",$db);

    if (!$db_connection) {
        die('No se ha podido conectar a la base de datos');
    }
    
    mysql_close($db)
?>