<?php
include('conectar_bd.php');

if (isset($_POST['iniciar'])) {
    $consulta = mysqli_query($conexion, ("SELECT * FROM usuarios WHERE usuario = '$nombre'"));
    $nf = mysqli_num_rows($consulta);
    $buscarcontraseña = mysqli_fetch_array($consulta);
    
    
    if (($nf == 1) && (password_verify($contraseña, $buscarcontraseña['contraseña']))) {
        echo "Se ha iniciado sesion correctamente";
		header("Location: ../index.php");
	}
else
	{
	echo "Usuario o contraseña incorrecto.";
	}
}


