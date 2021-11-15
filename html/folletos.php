<!DOCTYPE html>
<html lang="es">

<head>
<?php
  include("../php/conectar_bd.php");
  ?>
  <meta charset="UTF-8">
  <title>Ferretería Gabaldón</title>
  <link rel="shorcut icon" href="../imagenestfg/icono.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- css -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
    integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/folletos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>

</head>

<body>
  <header>

    <nav class="header">
      <div class="logo">
        <a href="../index.php">
          <img src="../imagenestfg/logo ferreteria.jpg" title="Ferretería Gabaldón">
        </a>
      </div>
    </nav>

  </header>
  <div class="cabecera">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="nosotros.php">Nosotros</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="tijeras.php">Tijeras electricas</a></li>
              <li><a class="dropdown-item" href="manuales.php">Herramientas manuales</a></li>
              <li><a class="dropdown-item" href="electricas.php">Herraminetas electricas</a></li>
              <li><a class="dropdown-item" href="epis.php">Epis</a></li>
              <li><a class="dropdown-item" href="jardin.php">Jardín</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="folletos.php">Folletos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.php">Contacto</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <article>
    <p><strong>Aquí están nuestras ofertas de temporada</strong></p>
    <div class="catalogo">
      <div class="folletos">
        <div class="card" style="width: 15em;">
        <?php
          $query = "SELECT tipo, imagen FROM imagenes WHERE id = 34";
          $res = mysqli_query($conexion, $query);
          $imagen = mysqli_fetch_assoc($res);
          ?>
          <img src="data:<?php echo $imagen['tipo']; ?>;base64,<?php echo base64_encode($imagen['imagen']); ?>" class="card-img-top" alt="Folleto calefaccion">
          <div class="card-body">
            <a href="../folletos/CALEFACCION_2021_-_FERRYMAS.pdf" target="_blank" class="texto">Folleto Calefacción
              2021</a>
            <a href="../folletos/CALEFACCION_2021_-_FERRYMAS.pdf" class="btn btn-dark"
              download="CALEFACCION_2021_-_FERRYMAS">Descargar</a>
          </div>
        </div>

        <div class="card" style="width: 15em;">
        <?php
          $query = "SELECT tipo, imagen FROM imagenes WHERE id = 36";
          $res = mysqli_query($conexion, $query);
          $imagen = mysqli_fetch_assoc($res);
          ?>
          <img src="data:<?php echo $imagen['tipo']; ?>;base64,<?php echo base64_encode($imagen['imagen']); ?>" class="card-img-top" alt="Folleto Poda">
          <div class="card-body">
            <a href="../folletos/PODA_2021_-_FERRYMAS.pdf" target="_blank" class="texto">Folleto Poda 2021</a>
            <a href="../folletos/PODA_2021_-_FERRYMAS.pdf" class="btn btn-dark"
              download="PODA_2021_-_FERRYMAS">Descargar</a>
          </div>
        </div>

        <div class="card" style="width: 15em;">
        <?php
          $query = "SELECT tipo, imagen FROM imagenes WHERE id = 33";
          $res = mysqli_query($conexion, $query);
          $imagen = mysqli_fetch_assoc($res);
          ?>
          <img src="data:<?php echo $imagen['tipo']; ?>;base64,<?php echo base64_encode($imagen['imagen']); ?>" class="card-img-top" alt="Catalogo abrasivos">
          <div class="card-body">
            <a href="../folletos/101_ABRASIVOS.pdf" target="_blank" class="texto">Catalogo abrasivos 2021</a>
            <a href="../folletos/101_ABRASIVOS.pdf" class="btn btn-dark" download="101_ABRASIVOS.pdf">Descargar</a>
          </div>
        </div>
      </div>

      <div class="folletos">
        <div class="card" style="width: 15em;">
        <?php
          $query = "SELECT tipo, imagen FROM imagenes WHERE id = 35";
          $res = mysqli_query($conexion, $query);
          $imagen = mysqli_fetch_assoc($res);
          ?>
          <img src="data:<?php echo $imagen['tipo']; ?>;base64,<?php echo base64_encode($imagen['imagen']); ?>" class="card-img-top" alt="Catalogo cocina">
          <div class="card-body">
            <a href="../folletos/201_ACCESORIOS_COCINA.pdf" target="_blank" class="texto">Catalogo cocina 2021</a>
            <a href="../folletos/201_ACCESORIOS_COCINA.pdf" class="btn btn-dark"
              download="201_ACCESORIOS_COCINA.pdf">Descargar</a>
          </div>
        </div>

        <div class="card" style="width: 15em;">
        <?php
          $query = "SELECT tipo, imagen FROM imagenes WHERE id = 37";
          $res = mysqli_query($conexion, $query);
          $imagen = mysqli_fetch_assoc($res);
          ?>
          <img src="data:<?php echo $imagen['tipo']; ?>;base64,<?php echo base64_encode($imagen['imagen']); ?>" class="card-img-top" alt="Catalogo Profer">
          <div class="card-body">
            <a href="../folletos/Catálogo PROFER.pdf" target="_blank" class="texto">Catalogo Profer</a>
            <a href="../folletos/Catálogo PROFER.pdf" class="btn btn-dark" download="Catálogo PROFER.pdf">Descargar</a>
          </div>
        </div>

        <div class="card" style="width: 15em;">
        <?php
          $query = "SELECT tipo, imagen FROM imagenes WHERE id = 38";
          $res = mysqli_query($conexion, $query);
          $imagen = mysqli_fetch_assoc($res);
          ?>
          <img src="data:<?php echo $imagen['tipo']; ?>;base64,<?php echo base64_encode($imagen['imagen']); ?>" class="card-img-top" alt="Folleto profesional">
          <div class="card-body">
            <a href="../folletos/PROFESIONAL_OTOÑO_2021.pdf" target="_blank" class="texto">Folleto Profesional Otoño</a>
            <a href="../folletos/PROFESIONAL_OTOÑO_2021.pdf" class="btn btn-dark"
              download="PROFESIONAL_OTOÑO_2021">Descargar</a>
          </div>
        </div>
      </div>
    </div>

  </article>

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

</html>