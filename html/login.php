<!DOCTYPE html>
<html lang="en">

<head>
<?php
  include("../php/conectar_bd.php");
  include("../php/login.php");
  include("../php/registro.php"); 
  ?>
    <meta charset="utf-8">
    <title>Ferretería Gabaldón</title>
    <link rel="shorcut icon" href="../imagenestfg/icono.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/login.css">
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

    <article>
        <div class="formulario">
            <div class="login">
                <form action="../php/login.php" method="post">
                    <h3>Iniciar Sesión</h3>

                    <p>
                        <label for="nombre">Usuario o Email</label>
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre de Usuario o Email">
                    </p>

                    <p>
                        <label for="contraseña">Contraseña</label>
                        <input type="password" name="contraseña" placeholder="Contraseña">
                    </p>
                    <button type="submit" value="iniciar" nombre="iniciar">Iniciar Sesión</button>
                </form>
            </div>

            <div class="d-flex" style="height: 500px;">
                <div class="vr"></div>
            </div>

            <div class="registro">
                <form action="../php/registro.php" method="post">
                    <h3>Registrate</h3>

                    <p>
                        <label for="nombre">Nombre de Usuario
                            <span>*</span>
                        </label>
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre de Usuario" required>
                    </p>

                    <p>
                        <label for="telefono">Teléfono
                            <span>*</span>
                        </label>
                        <input type="tel" name="telefono" id="telefono" placeholder="Teléfono" required>
                    </p>

                    <p>
                        <label for="email">Email
                            <span>*</span>
                        </label>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </p>

                    <p>
                        <label for="contraseña">Contraseña
                            <span>*</span>
                        </label>
                        <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña" required>
                    </p>

                    <p>
                        <label for="confirmar contraseña">Confirmar Contraseña
                            <span>*</span>
                        </label>
                        <input type="password" name="contraseña1" id="contraseña" placeholder="Contraseña" required>
                    </p>

                    <p class="aviso">
                        <span class="obligatorio"> * </span>los campos son obligatorios.
                    </p>

                    <button type="submit" value="registrar">Registrarse</button>
                </form>
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