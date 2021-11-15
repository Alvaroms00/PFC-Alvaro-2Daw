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
  <link rel="stylesheet" href="../css/productos.css">
  <link rel="stylesheet" href="../css/sidebars.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
  </script>
  <script src="../js/sidebars.js"></script>

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

      <div class="buscar">
        <form method="GET" action="">
          <input type="search" name="buscar" placeholder="Busca nuestros productos">
          <input type="submit">
        </form>
      </div>

      <div class="carrito">
        <i class="fas fa-shopping-cart"></i>
        <a href="carrito.php">Carrito</a>
      </div>

      <div class="user">
        <i class="fas fa-user"></i>
        <a href="login.php">Iniciar Sesión</a>
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
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
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
          <li class="nav-item">
            <a class="nav-link" href="contacto.php">Contacto</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <article>
    <aside>
      <div class="flex-shrink-0 bg-white" style="width: 280px;">
        <a href="#" class="align-items-center link-dark text-decoration-none">
          <span class="fs-5 fw-semibold">Productos</span>
        </a>
        <ul class="list-unstyled ps-0">
          <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
              Tijeras electricas
            </button>
            <div class="collapse show" id="home-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="../productos/tijeras/bahco.php" class="link-dark rounded">Tijera BAHCO</a></li>
                <li><a href="../productos/tijeras/bellota.php" class="link-dark rounded">Tijera Bellota</a></li>
                <li><a href="../productos/tijeras/infaco.php" class="link-dark rounded">Tijera Infaco</a></li>
                <li><a href="../productos/tijeras/makita.php" class="link-dark rounded">Tijera Makita</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
              Herramientas manuales
            </button>
            <div class="collapse" id="dashboard-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="../productos/manuales/azada.php" class="link-dark rounded">Azada</a></li>
                <li><a href="../productos/manuales/destornillador.php" class="link-dark rounded">Destornillador</a></li>
                <li><a href="../productos/manuales/hacha.php" class="link-dark rounded">Hacha</a></li>
                <li><a href="../productos/manuales/horca.php" class="link-dark rounded">Horca Tubo</a></li>
                <li><a href="../productos/manuales/llavefija.php" class="link-dark rounded">Llave Fija</a></li>
                <li><a href="../productos/manuales/martillo.php" class="link-dark rounded">Martillo</a></li>
                <li><a href="../productos/manuales/pala.php" class="link-dark rounded">Pala Cuadrada</a></li>
                <li><a href="../productos/manuales/tijerapoda.php" class="link-dark rounded">Tijera Poda</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
              Herramientas Electricas
            </button>
            <div class="collapse" id="orders-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="../productos/electricas/amoladora.php" class="link-dark rounded">Amoladora</a></li>
                <li><a href="../productos/electricas/atornillador.php" class="link-dark rounded">Atornillador</a></li>
                <li><a href="../productos/electricas/lijadora.php" class="link-dark rounded">Lijadora</a></li>
                <li><a href="../productos/electricas/martilloligero.php" class="link-dark rounded">Martillo Ligero</a></li>
                <li><a href="../productos/electricas/miniamoladora.php" class="link-dark rounded">Mini Amoladora</a></li>
                <li><a href="../productos/electricas/sierra.php" class="link-dark rounded">Sierra de Calar</a></li>
                <li><a href="../productos/electricas/taladrocomb.php" class="link-dark rounded">Taladro Combinado</a></li>
                <li><a href="../productos/electricas/taladroperc.php" class="link-dark rounded">Taladro Percutor</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#products-collapse" aria-expanded="false">
              Epis
            </button>
            <div class="collapse" id="products-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="../productos/epis/casco.php" class="link-dark rounded">Casco Obra</a></li>
                <li><a href="../productos/epis/chaleco.php" class="link-dark rounded">Chaleco Reflectante</a></li>
                <li><a href="../productos/epis/gafas.php" class="link-dark rounded">Gafas Seguridad</a></li>
                <li><a href="../productos/epis/guantes.php" class="link-dark rounded">Guantes </a></li>
                <li><a href="../productos/epis/mascara.php" class="link-dark rounded">Mascara Protectora</a></li>
                <li><a href="../productos/epis/mascarilla.php" class="link-dark rounded">Mascarillas</a></li>
                <li><a href="../productos/epis/protector.php" class="link-dark rounded">Protector auditivo</a></li>
                <li><a href="../productos/epis/zapatillas.php" class="link-dark rounded">Zapatillas</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#customers-collapse" aria-expanded="false">
              Jardín
            </button>
            <div class="collapse" id="customers-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="../productos/jardin/asiento.php" class="link-dark rounded">Asiento</a></li>
                <li><a href="../productos/jardin/banco.php" class="link-dark rounded">Banco</a></li>
                <li><a href="../productos/jardin/cenador.php" class="link-dark rounded">Cenador</a></li>
                <li><a href="../productos/jardin/mesa-plegable.php" class="link-dark rounded">Mesa Plegable</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </aside>
    <p>Aqui esta nuestra selección de las mejores tijeras de podar del mercado</p>
    <div class="productos">
      <div class="caja">
        <a href="../productos/tijeras/bahco.php">
        <?php
          $query = "SELECT tipo, imagen FROM imagenes WHERE id = 27";
          $res = mysqli_query($conexion, $query);
          $imagen = mysqli_fetch_assoc($res);
          ?>
          <img src="data:<?php echo $imagen['tipo']; ?>;base64,<?php echo base64_encode($imagen['imagen']); ?>" class="img-thumbnail" alt="Tijera Electrica BAHCO"></a>
        <p><a href="../productos/tijeras/bahco.php">
          <?php
                    $query = "SELECT nombre, caracteristica, marca, modelo, precio FROM articulos WHERE id = 27 ";
                    $res = mysqli_query($conexion, $query);
                    $info = mysqli_fetch_array($res);
                    echo $info['nombre'] ." ". $info['caracteristica'] . '<br>';
                    ?></a>
                    <?php
                    echo "Modelo: " . $info['modelo'] . "<br>";
                    echo "Precio: " . $info['precio'] . "€ <br>";
                    ?>
          <a href="../productos/tijeras/bahco.php" class="btn btn-light">Ver Producto</a>
        </p>
      </div>

      <div class="caja">
        <a href="../productos/tijeras/bellota.php">
        <?php
          $query = "SELECT tipo, imagen FROM imagenes WHERE id = 28";
          $res = mysqli_query($conexion, $query);
          $imagen = mysqli_fetch_assoc($res);
          ?>
          <img src="data:<?php echo $imagen['tipo']; ?>;base64,<?php echo base64_encode($imagen['imagen']); ?>" class="img-thumbnail" alt="Tijera Electrica BAHCO"></a>
        <p><a href="../productos/tijeras/bahco.php">
          <?php
                    $query = "SELECT nombre, caracteristica, marca, modelo, precio FROM articulos WHERE id = 28";
                    $res = mysqli_query($conexion, $query);
                    $info = mysqli_fetch_array($res);
                    echo $info['nombre'] ." ". $info['caracteristica'] . '<br>';
                    ?></a>
                    <?php
                    echo "Modelo: " . $info['modelo'] . "<br>";
                    echo "Precio: " . $info['precio'] . "€ <br>";
                    ?>
          <a href="../productos/tijeras/bahco.php" class="btn btn-light">Ver Producto</a>
        </p>
      </div>
    </div>

    <div class="productos">
    <div class="caja">
        <a href="../productos/tijeras/bellota.php">
        <?php
          $query = "SELECT tipo, imagen FROM imagenes WHERE id = 29";
          $res = mysqli_query($conexion, $query);
          $imagen = mysqli_fetch_assoc($res);
          ?>
          <img src="data:<?php echo $imagen['tipo']; ?>;base64,<?php echo base64_encode($imagen['imagen']); ?>" class="img-thumbnail" alt="Tijera Electrica BAHCO"></a>
        <p><a href="../productos/tijeras/bahco.php">
          <?php
                    $query = "SELECT nombre, caracteristica, marca, modelo, precio FROM articulos WHERE id = 29";
                    $res = mysqli_query($conexion, $query);
                    $info = mysqli_fetch_array($res);
                    echo $info['nombre'] ." ". $info['caracteristica'] . '<br>';
                    ?></a>
                    <?php
                    echo "Modelo: " . $info['modelo'] . "<br>";
                    echo "Precio: " . $info['precio'] . "€ <br>";
                    ?>
          <a href="../productos/tijeras/bahco.php" class="btn btn-light">Ver Producto</a>
        </p>
      </div>

      <div class="caja">
        <a href="../productos/tijeras/bellota.php">
        <?php
          $query = "SELECT tipo, imagen FROM imagenes WHERE id = 30";
          $res = mysqli_query($conexion, $query);
          $imagen = mysqli_fetch_assoc($res);
          ?>
          <img src="data:<?php echo $imagen['tipo']; ?>;base64,<?php echo base64_encode($imagen['imagen']); ?>" class="img-thumbnail" alt="Tijera Electrica BAHCO"></a>
        <p><a href="../productos/tijeras/bahco.php">
          <?php
                    $query = "SELECT nombre, caracteristica, marca, modelo, precio FROM articulos WHERE id = 30";
                    $res = mysqli_query($conexion, $query);
                    $info = mysqli_fetch_array($res);
                    echo $info['nombre'] ." ". $info['caracteristica'] . '<br>';
                    ?></a>
                    <?php
                    echo "Modelo: " . $info['modelo'] . "<br>";
                    echo "Precio: " . $info['precio'] . "€ <br>";
                    ?>
          <a href="../productos/tijeras/bahco.php" class="btn btn-light">Ver Producto</a>
        </p>
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