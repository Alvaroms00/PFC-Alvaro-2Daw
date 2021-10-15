<?php

include("conectar_bd.php");

if (isset($_POST['enviar'])) {
    if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['asunto']) && !empty($_POST['mensaje'])) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];

        $header = "From: $email" . "\r\n";
        $header = "Reply-To: alvaro030400@gmail.com" . "\r\n";
        $header = "X-Mailer: PHP/" . phpversion();
        $mail = @mail($email, $asunto, $mensaje, $header);
    }
    if ($mail) {
        echo "Enviado con exito.";
    }else{
        echo "Ha habido un error";
    }
}