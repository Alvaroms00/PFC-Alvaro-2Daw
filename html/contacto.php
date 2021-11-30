<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  include("../php/conectar_bd.php");
  ?>
  <meta charset="utf-8">
  <title>Ferretería Gabaldón</title>
  <link rel="shorcut icon" href="../imagenestfg/icono.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- css -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/contacto.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>
  <?php
  include("../templates/header.php");
  ?>

  <article>
    <div class="contacto">
      <div class="formulario">
        <h1>Formulario de Contacto</h1>
        <h5>Escribenos para poder contactar contigo y resolver todas las dudas</h5>

        <form action="" method="POST" id="formulario">
          <p>
            <label for="nombre" class="nombre">Nombre
              <span class="obligatorio">*</span>
            </label>
            <input type="text" name="nombre" id="nombre" placeholder="Escribre tu nombre" required>
          </p>

          <p>
            <label for="email" class="email">Email
              <span class="obligatorio">*</span>
            </label>
            <input type="email" name="email" id="email" placeholder="Escribe tu Email" required>
          </p>

          <p>
            <label for="telefone" class="telefono">Teléfono
            </label>
            <input type="tel" name="telefono" id="telefono" placeholder="Escribe tu teléfono">
          </p>

          <p>
            <label for="asunto" class="Asunto">Asunto
              <span class="obligatorio">*</span>
            </label>
            <input type="text" name="asunto" id="asunto" placeholder="Escribe un asunto" required>
          </p>

          <p>
            <label for="mensaje" class="colocar_mensaje">Mensaje
              <span class="obligatorio">*</span>
            </label>
            <textarea name="mensaje" class="mensaje" id="mensaje" placeholder="Deja aquí tu comentario..." required></textarea>
          </p>

          <button type="submit" name="enviar" id="enviar">Enviar</button>

          <p class="aviso">
            <span class="obligatorio"> * </span>los campos son obligatorios.
          </p>
        </form>
      </div>
    </div>
    <div class="envio">
      <p>Tu mensaje se ha enviado correctamente</p>
      <a href="../index.php" class="btn btn-dark">Volver al inicio</a>
    </div>
  </article>
  
  <?php
  include("../templates/footer.php");
  ?>
  <script src="../js/contacto.js"></script>
</body>

</html>