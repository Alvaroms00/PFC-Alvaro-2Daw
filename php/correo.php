<?php

include("conectar_bd.php");

if (isset($_POST['enviar'])) {
    if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['asunto']) && !empty($_POST['mensaje'])) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];

        ini_set("mail.log", "/tmp/mail.log");
        ini_set("mail.add_x_header", TRUE);

        $to = 'alvaro030400@gmail.com';
        $subject = 'Email Subject';
        $message = $_POST['mensaje'];
        $headers = implode("\r\n", [
            'From: alvaro030400@gmail.com',
            'Reply-To: alvaro030400@gmail.com',
            'X-Mailer: PHP/', PHP_VERSION]);

            $result = mail($to, $subject, $message, $headers);
    }
    if ($result) {
        echo "Enviado con exito.";+
        header('Location: index.html', true, 303);
    }else{
        echo "Ha habido un error";
    }
}