<?php

class nombreSession{

    public function __construct(){
        session_start();
    }

    public function setCurrentnombre($nombre){
        $_SESSION['nombre'] = $nombre;
    }

    public function getCurrentnombre(){
        return $_SESSION['nombre'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }
}

?>