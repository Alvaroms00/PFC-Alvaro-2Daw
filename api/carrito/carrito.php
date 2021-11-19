<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Carrito</title>
    <link rel="stylesheet" href="../../css/header.css">
    <?php
        include("../../php/conectar_bd.php");
    ?>
</head>
<body>
<footer>
    <div class="imagenes">
      <?php
      $query = "SELECT tipo, imagen FROM imagenes WHERE id = 41";
      $res = mysqli_query($conexion, $query);
      $imagen = mysqli_fetch_assoc($res);
      ?>
      <img src="data:<?php echo $imagen['tipo']; ?>;base64,<?php echo base64_encode($imagen['imagen']); ?>">
      <a href="http://www.coferdroza.es/" target="_blank">
        <?php
        $query = "SELECT tipo, imagen FROM imagenes WHERE id = 42";
        $res = mysqli_query($conexion, $query);
        $imagen = mysqli_fetch_assoc($res);
        ?>
        <img src="data:<?php echo $imagen['tipo']; ?>;base64,<?php echo base64_encode($imagen['imagen']); ?>"></a>
    </div>

    <div class="d-flex" style="height: 200px;">
      <div class="vr"></div>
    </div>

    <div class="contacto">
      <p><strong>Contacto</strong></p>
      <p><i class="fab fa-whatsapp"></i>&nbsp;<strong>WhatsApp</strong> &nbsp; 626 27 29 19</p>
      <p><i class="fas fa-phone"></i>&nbsp;<strong>Telefono</strong> &nbsp; 96 217 01 97 - 96 217 04 04</p>
      <p><i class="fas fa-at"></i>&nbsp;<strong>Correo</strong> &nbsp; info@ferreteriagabaldon.es</p>
      <p><i class="far fa-clock"></i>&nbsp;<strong>Horario</strong> &nbsp; De Lunes a Viernes de 8:30-14:00 y de 16:00 a
        19:30 <br>Sabados de 9:30 a 13:00</p>
    </div>

    <div class="d-flex" style="height: 200px;">
      <div class="vr"></div>
    </div>

    <div class="ubicacion">
      <p><strong>Donde Encontrarnos</strong></p>
      <p><i class="fas fa-map-marked-alt"></i> &nbsp; P.I El Melero, Avda. Industria, 5 - 46300 Utiel (Valencia)</p>
      <a href="https://www.google.com/maps/place/Ferreteria+Gabaldon+S.L./@39.5761743,-1.2059627,17.87z/data=!4m5!3m4!1s0xd60cb541f01828b:0xe7d82c7577c175f0!8m2!3d39.5762165!4d-1.2057934" target="_blank">
        <?php
        $query = "SELECT tipo, imagen FROM imagenes WHERE id = 45";
        $res = mysqli_query($conexion, $query);
        $imagen = mysqli_fetch_assoc($res);
        ?>
        <img src="data:<?php echo $imagen['tipo']; ?>;base64,<?php echo base64_encode($imagen['imagen']); ?>" alt="P.I El Melero, Avda. Industria, 5 - 46300 Utiel (Valencia)"></a>
    </div>
  </footer>

</body>


<?php
include_once '../../php/sesion.php';

class Carrito extends Session{

    function __construct(){
        parent::__construct('carrito');
    }

    public function load(){
        if($this->getValue() == NULL){
            return '[]';
        }
        return $this->getValue();
    }

    public function add($id){
        if($this->getValue() == NULL){
            $items = [];
        }else{
            $items = json_decode($this->getValue(), 1);
            for($i=0; $i<sizeof($items); $i++){
                if($items[$i]['id'] == $id){
                    $items[$i]['cantidad']++;
                    $this->setValue(json_encode($items));
                    return $this->getValue();
                }
            }
        }
        
        $item = ['id' => (int)$id, 'cantidad' => 1];
        
        array_push($items, $item);
        $this->setValue(json_encode($items));
        return $this->getValue();
    }

    public function remove($id){
        if($this->getValue() == NULL){
            $items = [];
        }else{
            $items = json_decode($this->getValue(), 1);

            for($i=0; $i<sizeof($items); $i++){
                
                if($items[$i]['id'] == $id){
                    $items[$i]['cantidad']--;
                    if($items[$i]['cantidad'] == 0){
                        unset($items[$i]);
                        $items = array_values($items);
                    }
                    $this->setValue(json_encode($items));
                    return true;
                }
            }
        }
        
        //$item = ['id' => (int)$id, 'cantidad' => 1];
        
        //array_push($items, $item);
        //$this->setValue(json_encode($items));
        //return $this->getValue();
    }

}
?>
</html>