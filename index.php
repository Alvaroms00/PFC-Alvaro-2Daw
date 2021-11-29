<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  include("php/conectar_bd.php");
  ?>
  <meta charset="utf-8">
  <title>Ferretería Gabaldón</title>

  <link rel="shorcut icon" href="imagenestfg/icono.png">

  <meta name="viewport" content="width=device-width, initial-scale=0">

  <!-- css -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/cookies.css">
  <link rel="stylesheet" href="css/inicio.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
  </script>
  <script src="js/cookies.js" defer></script>
  <script src="js/carrito.js" defer></script>
</head>

<body>
  <header>

    <nav class="header">
      <div class="logo">
        <a href="index.php">
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
          <a href="html/busqueda.php" class="btn btn-light">Buscar</a>
        </form>
      </div>

      <li class="carrito">
        <a href="#" class='btn-carrito'><i class="fas fa-shopping-cart"></i>Carrito</a>
        <div id="carrito-container">
          <div id="tabla">
          </div>
        </div>
      </li>

      <div class="user">
        <i class="fas fa-user"></i>
        <a href="html/login.php">Iniciar Sesión</a>
      </div>
    </nav>

  </header>
  <div class="cabecera">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="html/nosotros.php">Nosotros</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="html/tijeras.php">Tijeras electricas</a></li>
              <li><a class="dropdown-item" href="html/manuales.php">Herramientas manuales</a></li>
              <li><a class="dropdown-item" href="html/electricas.php">Herraminetas electricas</a></li>
              <li><a class="dropdown-item" href="html/epis.php">Epis</a></li>
              <li><a class="dropdown-item" href="html/jardin.php">Jardín</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="html/folletos.php">Folletos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="html/contacto.php">Contacto</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <article>
    <?php
    $query = "SELECT tipo, imagen FROM imagenes WHERE id = 40";
    $res = mysqli_query($conexion, $query);
    $imagen = mysqli_fetch_assoc($res);
    ?>
    <img src="data:<?php echo $imagen['tipo']; ?>;base64,<?php echo base64_encode($imagen['imagen']); ?>" alt="Ferreteria Gabaldón">

    <p><strong>Productos Destacados</strong></p>

    <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="ofertas">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="productos">

              <div class="card" style="width: 15em;">
                <?php
                $query = "SELECT * FROM articulos WHERE id = 1";
                $res = mysqli_query($conexion, $query);
                $info = mysqli_fetch_array($res);

                echo "<img src='imagenestfg/" . $info['imagen'] . "'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>";
                echo $info['nombre'] . "</h5>";
                echo "<p class='card-text'>";
                echo $info['nombre'] . " " . $info['marca'] . " " . $info['caracteristica'] . '<br>';
                echo "Modelo: " . $info['modelo'] . "<br>";
                echo "Precio: " . $info['precio'] . "€ <br></p>";
                echo "<a href='productos/electricas/amoladora.php' class='btn btn-dark'>Ver Producto</a> </div>";
                ?>
              </div>

              <div class="card" style="width: 15em;">
                <?php
                $query = "SELECT * FROM articulos WHERE id = 3";
                $res = mysqli_query($conexion, $query);
                $info = mysqli_fetch_array($res);

                echo "<img src='imagenestfg/" . $info['imagen'] . "'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>";
                echo $info['nombre'] . "</h5>";
                echo "<p class='card-text'>";
                echo $info['nombre'] . " " . $info['marca'] . " " . $info['caracteristica'] . '<br>';
                echo "Modelo: " . $info['modelo'] . "<br>";
                echo "Precio: " . $info['precio'] . "€ <br></p>";
                echo "<a href='productos/electricas/atornillador.php' class='btn btn-dark'>Ver Producto</a> </div>";
                ?>
              </div>

              <div class="card" style="width: 15em;">
                <?php
                $query = "SELECT * FROM articulos WHERE id = 21";
                $res = mysqli_query($conexion, $query);
                $info = mysqli_fetch_array($res);

                echo "<img src='imagenestfg/" . $info['imagen'] . "'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>";
                echo $info['nombre'] . "</h5>";
                echo "<p class='card-text'>";
                echo $info['nombre'] . " " . $info['marca'] . " " . $info['caracteristica'] . '<br>';
                echo "Modelo: " . $info['modelo'] . "<br>";
                echo "Precio: " . $info['precio'] . "€ <br></p>";
                echo "<a href='productos/electricas/miniamoladora.php' class='btn btn-dark'>Ver Producto</a> </div>";
                ?>
              </div>

              <div class="card" style="width: 15em;">
                <?php
                $query = "SELECT * FROM articulos WHERE id = 24";
                $res = mysqli_query($conexion, $query);
                $info = mysqli_fetch_array($res);

                echo "<img src='imagenestfg/" . $info['imagen'] . "'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>";
                echo $info['nombre'] . "</h5>";
                echo "<p class='card-text'>";
                echo $info['nombre'] . " " . $info['marca'] . " " . $info['caracteristica'] . '<br>';
                echo "Modelo: " . $info['modelo'] . "<br>";
                echo "Precio: " . $info['precio'] . "€ <br></p>";
                echo "<a href='productos/electricas/sierra.php' class='btn btn-dark'>Ver Producto</a> </div>";
                ?>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="productos">

              <div class="card" style="width: 15em;">
                <?php
                $query = "SELECT * FROM articulos WHERE id = 27";
                $res = mysqli_query($conexion, $query);
                $info = mysqli_fetch_array($res);

                echo "<img src='imagenestfg/" . $info['imagen'] . "'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>";
                echo $info['nombre'] . "</h5>";
                echo "<p class='card-text'>";
                echo $info['nombre'] . " " . $info['marca'] . " " . $info['caracteristica'] . '<br>';
                echo "Modelo: " . $info['modelo'] . "<br>";
                echo "Precio: " . $info['precio'] . "€ <br></p>";
                echo "<a href='productos/tijeras/bahco.php' class='btn btn-dark'>Ver Producto</a> </div>";
                ?>
              </div>

              <div class="card" style="width: 15em;">
                <?php
                $query = "SELECT * FROM articulos WHERE id = 28";
                $res = mysqli_query($conexion, $query);
                $info = mysqli_fetch_array($res);

                echo "<img src='imagenestfg/" . $info['imagen'] . "'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>";
                echo $info['nombre'] . "</h5>";
                echo "<p class='card-text'>";
                echo $info['nombre'] . " " . $info['marca'] . " " . $info['caracteristica'] . '<br>';
                echo "Modelo: " . $info['modelo'] . "<br>";
                echo "Precio: " . $info['precio'] . "€ <br></p>";
                echo "<a href='productos/tijeras/bellota.php' class='btn btn-dark'>Ver Producto</a> </div>";
                ?>
              </div>

              <div class="card" style="width: 15em;">
                <?php
                $query = "SELECT * FROM articulos WHERE id = 29";
                $res = mysqli_query($conexion, $query);
                $info = mysqli_fetch_array($res);

                echo "<img src='imagenestfg/" . $info['imagen'] . "'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>";
                echo $info['nombre'] . "</h5>";
                echo "<p class='card-text'>";
                echo $info['nombre'] . " " . $info['marca'] . " " . $info['caracteristica'] . '<br>';
                echo "Modelo: " . $info['modelo'] . "<br>";
                echo "Precio: " . $info['precio'] . "€ <br></p>";
                echo "<a href='productos/tijeras/infaco.php' class='btn btn-dark'>Ver Producto</a> </div>";
                ?>
              </div>

              <div class="card" style="width: 15em;">
                <?php
                $query = "SELECT * FROM articulos WHERE id = 30";
                $res = mysqli_query($conexion, $query);
                $info = mysqli_fetch_array($res);

                echo "<img src='imagenestfg/" . $info['imagen'] . "'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>";
                echo $info['nombre'] . "</h5>";
                echo "<p class='card-text'>";
                echo $info['nombre'] . " " . $info['marca'] . " " . $info['caracteristica'] . '<br>';
                echo "Modelo: " . $info['modelo'] . "<br>";
                echo "Precio: " . $info['precio'] . "€ <br></p>";
                echo "<a href='productos/tijeras/makita.php' class='btn btn-dark'>Ver Producto</a> </div>";
                ?>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="productos">

              <div class="card" style="width: 15em;">
                <?php
                $query = "SELECT * FROM articulos WHERE id = 2";
                $res = mysqli_query($conexion, $query);
                $info = mysqli_fetch_array($res);

                echo "<img src='imagenestfg/" . $info['imagen'] . "'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>";
                echo $info['nombre'] . "</h5>";
                echo "<p class='card-text'>";
                echo $info['nombre'] . " " . $info['marca'] . " " . $info['caracteristica'] . '<br>';
                echo "Modelo: " . $info['modelo'] . "<br>";
                echo "Precio: " . $info['precio'] . "€ <br></p>";
                echo "<a href='productos/jardin/asiento.php' class='btn btn-dark'>Ver Producto</a> </div>";
                ?>
              </div>

              <div class="card" style="width: 15em;">
                <?php
                $query = "SELECT * FROM articulos WHERE id = 5";
                $res = mysqli_query($conexion, $query);
                $info = mysqli_fetch_array($res);

                echo "<img src='imagenestfg/" . $info['imagen'] . "'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>";
                echo $info['nombre'] . "</h5>";
                echo "<p class='card-text'>";
                echo $info['nombre'] . " " . $info['marca'] . " " . $info['caracteristica'] . '<br>';
                echo "Modelo: " . $info['modelo'] . "<br>";
                echo "Precio: " . $info['precio'] . "€ <br></p>";
                echo "<a href='productos/jardin/banco.php' class='btn btn-dark'>Ver Producto</a> </div>";
                ?>
              </div>

              <div class="card" style="width: 15em;">
                <?php
                $query = "SELECT * FROM articulos WHERE id = 7";
                $res = mysqli_query($conexion, $query);
                $info = mysqli_fetch_array($res);

                echo "<img src='imagenestfg/" . $info['imagen'] . "'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>";
                echo $info['nombre'] . "</h5>";
                echo "<p class='card-text'>";
                echo $info['nombre'] . " " . $info['marca'] . " " . $info['caracteristica'] . '<br>';
                echo "Modelo: " . $info['modelo'] . "<br>";
                echo "Precio: " . $info['precio'] . "€ <br></p>";
                echo "<a href='productos/jardin/cenador.php' class='btn btn-dark'>Ver Producto</a> </div>";
                ?>
              </div>

              <div class="card" style="width: 15em;">
                <?php
                $query = "SELECT * FROM articulos WHERE id = 20";
                $res = mysqli_query($conexion, $query);
                $info = mysqli_fetch_array($res);

                echo "<img src='imagenestfg/" . $info['imagen'] . "'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>";
                echo $info['nombre'] . "</h5>";
                echo "<p class='card-text'>";
                echo $info['nombre'] . " " . $info['marca'] . " " . $info['caracteristica'] . '<br>';
                echo "Modelo: " . $info['modelo'] . "<br>";
                echo "Precio: " . $info['precio'] . "€ <br></p>";
                echo "<a href='productos/jardin/mesa-plegable.php' class='btn btn-dark'>Ver Producto</a> </div>";
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </article>

  <?php
  include("html/footer.php");
  ?>

  <div class="cookies activo" id="cookies">
    <h3 class="titulo">Cookies</h3>
    <p class="parrafo">Utilizamos cookies propias y de terceros para mejorar nuestros servicios.</p>
    <button class="boton" id="btn-aceptar-cookies">De acuerdo</button>
    <a class="enlace" href="http://www.interior.gob.es/politica-de-cookies" target="_blank">Aviso de Cookies</a>
  </div>
</body>

</html>