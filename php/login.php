<?php
include 'db.php';

class nombre extends DB{
    private $nombre;

    public function nombreExists($nombre, $pass){
        $md5pass = md5($pass);
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE nombre = :nombre AND password = :pass');
        $query->execute(['nombre' => $nombre, 'pass' => $md5pass]);

        if($query->rowCount()){
            return "Se ha iniciado sesion";
        }else{
            return "Usuario o contraseña incorrectas";
        }
    }

    public function setnombre($nombre){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE nombre = :nombre');
        $query->execute(['nombre' => $nombre]);
        
        foreach ($query as $currentnombre) {
            $this->nombre = $currentnombre['nombre'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
}

?>