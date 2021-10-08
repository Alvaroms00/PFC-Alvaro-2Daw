<?php

include("conectar_bd.php");

if (isset($_POST['Registrarse'])) {
    if (strlen($_POST['name']) <= 1 && strlen($_POST['telefono']) <= 1 && strlen($_POST['email']) <= 1 && strlen($_POST['contraseña']) <= 1) {
        $sql = "INSERT INTO usuarios (nombre, telefono, email, contraseña) VALUES ('$nombre', '$telefono', '$email', '$contraseña');";

        if ($sql) {
            ?>
            <h3 class="ok" style="color: white;">Se ha registrado correctamente</h3>
            <?php
        }else{
            ?>
            <h3 class="mal" style="color: white;">Ha ocurrido un error</h3>
            <?php
        }
    }else{
        ?>
        <h3 class="mal" style="color: white;">Por Favor complete todos los campos.</h3>
        <?php
    }
}


?>