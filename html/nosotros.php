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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/nosotros.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
  </script>
</head>

<body>
  <header>

    <nav class="header">
      <div class="logo">
        <a href="../index.php">
          <?php
          $query = "SELECT tipo, imagen FROM imagenes WHERE id = 39";
          $res = mysqli_query($conexion, $query);
          $imagen = mysqli_fetch_assoc($res);
          ?>
          <img src="data:<?php echo $imagen['tipo']; ?>;base64,<?php echo base64_encode($imagen['imagen']); ?>" title="Ferretería Gabaldón">
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
            <a class="nav-link active" href="nosotros.php">Nosotros</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="tijeras.php">Tijeras electricas</a></li>
              <li><a class="dropdown-item" href="manuales.php">Herramientas manuales</a></li>
              <li><a class="dropdown-item" href="electricas.php">Herraminetas electricas</a></li>
              <li><a class="dropdown-item" href="epis.php">Epis</a></li>
              <li><a class="dropdown-item" href="jardin.php">Jardín</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="folletos.php">Folletos</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <article>
    <p>Nuestra ferretería nace a finales del siglo XIX, complementaria y suministradora del taller de maquinaria y
      caldedería que fundaron nuestro Tataraabuelo Agustín Gabaldón.
      En 1890 ya figuraba como ferretería en sus documentos.
    </p>

    <p><strong>Titularidad del Taller:</strong></p>
    <ul>
      <li>Agustín Gabaldón</li>
      <li>Ricardo Gabaldón Ballesteros</li>
      <li>Vda. de Ricardo Gabaldón</li>
    </ul>
    <p><strong>Titularidad de la Ferretería:</strong></p>
    <ul>
      <li>Agustín Gabaldón</li>
      <li>Ricardo Gabaldón Ballesteros</li>
      <li>Hija de Ricardo Gabaldón</li>
      <li>Hijo de Ricardo Gabaldón</li>
      <li>Agustín Gabaldón Ponce y Sobrinos S.L.</li>
      <li>Ferretería Gabaldón S.L., en la actualidad y su gerente es Daniel Gabaldón Arroyo.</li>
    </ul>
    <p><strong>Domicilios:</strong></p>
    <ul>
      <li>1º: C/ Reyes Católicos, 67</li>
      <li>2º: C/ Antonio Maura, 8</li>
      <li>Actual: Av. Industria, 5. P.I. El Melero, Utiel</li>
    </ul>
    <p>
      En el citado taller nuestra actividad ha sido siempre de forma primordial el mantenimiento de empresas y bodegas
      que, en su momento dieron lugar a las patentes de
      invención y perfeccionamiento de la máquina estrujadora-derrasparoda de uva con titularidad de Ricardo Gabaldón
      Ballesteros y Ricardo Gabaldón Ponce respectivamente.
      Los documentos están expuestos en el Museo del Vino de Utiel, sede de la denominación de origen Utiel-Requena.
      A lo largo de los años, además de las citadas máquinas, hemos sido distribuidores exclusivos en algunos casos de:
    </p>
    <ul>
      <li>Moto Vesta (Utiel-Requena)</li>
      <li>Estufas Sasac (C. Valenciana y Albacete)</li>
      <li>T.V. Teleavia (Utiel-Requena)</li>
      <li>Tijeras Electrocoup (Utiel, Requena y la Manchuela)</li>
      <li>Zanussi (Utiel)</li>
      <li>Kelvinator (Utiel)</li>
      <li>DeWalt (Utiel)</li>
      <li>Makita (Utiel)</li>
    </ul>
    <p>Hemos pertenecido durante muchos años a Sociedades Distribuidoras de Electrodomésticos, que tuvieron mayor o
      menor transcendencia comercial: CRAE, UCEL, DIVELSA, ELITE y EURONICS.
      Asimismo, hasta su disolución, hemos pertenecido a COFEDEVA y actualmente a COFERDROZA, que ambas son de
      ferretería. También ahora nuestro gerente es miembro de la junta directiva de esta
      última.
    </p>

    <p>Desde 1998, hasta su disolución, hemos participado activa y profesionalmente en todas las ediciones de F.I.C.U.
      (Feria de la Industria y Comercio de Utiel).</p>

    <p>Otras exposiciones especializadas, las hemos efectuado en nuestros propios locales, en salones públicos de algún
      restaurante, o bien con los propios posibles clientes
      en sus campos o talleres.</p>

    <p>En 1990, la Cámara de Comercio de Valencia nos concedió el Premio a la Rehabilitación Comercial dentro del ámbito
      de la provincia de Valencia.</p>

    <p>En Utiel, se nos fue concedido el Premio a la Trayectoria Empresarial, otorgado por F.I.C.U.</p>

    <p>Desde 2002, estamos ubicados en el Polígono Industrial de Utiel en una nave de propiedad familiar y entre otras,
      nuestras actuaciones son:</p>
    <ul>
      <li>Suministros Industriales y Profesionales para empresas y Particulares.</li>
      <li>Suministros de Albañilería.</li>
      <li>Herramientas y Máquinas eléctricas y baterías.</li>
      <li>Suministros para bodegas y vendimias.</li>
      <li>Herrajes.</li>
      <li>Tornillería, correas trapeciales, rodamientos, mangueras, etc...</li>
    </ul>
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