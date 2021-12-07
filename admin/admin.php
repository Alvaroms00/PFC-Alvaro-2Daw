<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("../php/conectar_bd.php");
    ?>
    <meta charset="utf-8">
    <title>Ferretería Gabaldón</title>

    <link rel="shorcut icon" href="../imagenestfg/icono.png">

    <meta name="viewport" content="width=device-width, initial-scale=0">

    <!-- css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                <form action="administracion.php" method="post">
                    <h3>Iniciar Sesión</h3>

                    <p>
                        <label for="nombre">Usuario o Email</label>
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre de Usuario o Email">
                    </p>

                    <p>
                        <label for="contraseña">Contraseña</label>
                        <input type="password" name="contraseña" placeholder="Contraseña">
                    </p>
                    <button type="submit" class="btn btn-dark" value="iniciar" nombre="iniciar">Iniciar Sesión</button>
                </form>
            </div>
</body>

</html>