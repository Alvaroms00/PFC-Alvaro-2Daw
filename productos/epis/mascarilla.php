<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include("../../php/conectar_bd.php");
    ?>
    <meta charset="utf-8">
    <title>Ferretería Gabaldón</title>
    <link rel="shorcut icon" href="../../imagenestfg/icono.png">
    <meta name="viewport" content="width=device-width, initial-scale=0">

    <!-- css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/articulo.css">
    <link rel="stylesheet" href="../../css/sidebars.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="module">
        import {
            Fancybox
        } from "https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.esm.js";
    </script>
    <script src="../../js/sidebars.js"></script>
    <script src="../../js/subir.js"></script>
    <script src="../../js/cantidad.js"></script>

</head>

<body>
    <!-- Principio de header -->
    <header>
        <nav class="header">
            <div class="logo">
                <a href="../../index.php">
                    <?php
                    $query = "SELECT tipo, imagen FROM imagenes WHERE id = 39";
                    $res = mysqli_query($conexion, $query);
                    $imagen = mysqli_fetch_assoc($res);
                    ?>
                    <img src="data:<?php echo $imagen['tipo']; ?>;base64,<?php echo base64_encode($imagen['imagen']); ?>" title="Ferretería Gabaldón">
                </a>
            </div>

            <div class="carrito">
                <i class="fas fa-shopping-cart"></i>
                <a href="carrito.php">Carrito</a>
            </div>
        </nav>
    </header>

    <!-- Fin Header y Pricipio Cabezera -->
    <div class="cabecera">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../../index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../html/nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="../../html/tijeras.php">Tijeras electricas</a></li>
                            <li><a class="dropdown-item" href="../../html/manuales.php">Herramientas manuales</a></li>
                            <li><a class="dropdown-item" href="../../html/electricas.php">Herraminetas electricas</a>
                            </li>
                            <li><a class="dropdown-item" href="../../html/epis.php">Epis</a></li>
                            <li><a class="dropdown-item" href="../../html/jardin.php">Jardín</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../html/folletos.php">Folletos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../html/contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Fin cabecera -->
    <!-- Boton subir -->
    <div class="boton-subir" id="subir">
        <a id="subir" class="subir">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <!-- Article -->
    <article>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../index.php"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="">Productos</a></li>
                <li class="breadcrumb-item"><a href="../../html/epis.php">Epis</a></li>
                <li class="breadcrumb-item active" aria-current="page">Mascarillas</li>
            </ol>
        </nav>
        <!-- Pricipio aside -->
        <aside>
            <div class="flex-shrink-0 bg-white" style="width: 280px;">
                <a href="#" class="align-items-center link-dark text-decoration-none">
                    <span class="fs-5 fw-semibold">Productos</span>
                </a>
                <ul class="list-unstyled ps-0">
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                            Tijeras electricas
                        </button>
                        <div class="collapse" id="home-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="../tijeras/bahco.php" class="link-dark rounded">Tijera BAHCO</a></li>
                                <li><a href="../tijeras/bellota.php" class="link-dark rounded">Tijera Bellota</a></li>
                                <li><a href="../tijeras/infaco.php" class="link-dark rounded">Tijera Infaco</a></li>
                                <li><a href="../tijeras/makita.php" class="link-dark rounded">Tijera Makita</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                            Herramientas manuales
                        </button>
                        <div class="collapse" id="dashboard-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="../manuales/azada.php" class="link-dark rounded">Azada</a></li>
                                <li><a href="../manuales/destornillador.php" class="link-dark rounded">Destornillador</a></li>
                                <li><a href="../manuales/hacha.php" class="link-dark rounded">Hacha</a></li>
                                <li><a href="../manuales/horca.php" class="link-dark rounded">Horca Tubo</a></li>
                                <li><a href="../manuales/llavefija.php" class="link-dark rounded">Llave Fija</a></li>
                                <li><a href="../manuales/martillo.php" class="link-dark rounded">Martillo</a></li>
                                <li><a href="../manuales/pala.php" class="link-dark rounded">Pala Cuadrada</a></li>
                                <li><a href="../manuales/tijerapoda.php" class="link-dark rounded">Tijera Poda</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                            Herramientas Electricas
                        </button>
                        <div class="collapse" id="orders-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="../electricas/amoladora.php" class="link-dark rounded">Amoladora</a></li>
                                <li><a href="../electricas/atornillador.php" class="link-dark rounded">Atornillador</a></li>
                                <li><a href="../electricas/lijadora.php" class="link-dark rounded">Lijadora</a></li>
                                <li><a href="../electricas/martilloligero.php" class="link-dark rounded">Martillo Ligero</a></li>
                                <li><a href="../electricas/miniamoladora.php" class="link-dark rounded">Mini Amoladora</a></li>
                                <li><a href="../electricas/sierra.php" class="link-dark rounded">Sierra de Calar</a></li>
                                <li><a href="../electricas/taladrocomb.php" class="link-dark rounded">Taladro Combinado</a></li>
                                <li><a href="../electricas/taladroperc.php" class="link-dark rounded">Taladro Percutor</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#products-collapse" aria-expanded="true">
                            Epis
                        </button>
                        <div class="collapse show" id="products-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="casco.php" class="link-dark rounded">Casco Obra</a></li>
                                <li><a href="chaleco.php" class="link-dark rounded">Chaleco Reflectante</a></li>
                                <li><a href="gafas.php" class="link-dark rounded">Gafas Seguridad</a></li>
                                <li><a href="guantes.php" class="link-dark rounded">Guantes</a></li>
                                <li><a href="mascara.php" class="link-dark rounded">Mascara Protectora</a></li>
                                <li><a href="mascarilla.php" class="link-dark rounded">Mascarillas</a></li>
                                <li><a href="protector.php" class="link-dark rounded">Protector auditivo</a></li>
                                <li><a href="zapatillas.php" class="link-dark rounded">Zapatillas</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#customers-collapse" aria-expanded="false">
                            Jardín
                        </button>
                        <div class="collapse" id="customers-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="../jardin/asiento.php" class="link-dark rounded">Asiento</a></li>
                                <li><a href="../jardin/asiento.php" class="link-dark rounded">Banco</a></li>
                                <li><a href="../jardin/asiento.php" class="link-dark rounded">Cenador</a></li>
                                <li><a href="../jardin/mesa-plegable.php" class="link-dark rounded">Mesa Plegable</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="articulo">
            <div class="producto">
                <div class="producto-img">
                    <a data-fancybox="single" data-src="../../imagenestfg/mascarilla.jpg">
                        <?php
                        $query = "SELECT tipo, imagen FROM imagenes WHERE id = 19";
                        $res = mysqli_query($conexion, $query);
                        $imagen = mysqli_fetch_assoc($res);
                        ?>
                        <img src="data:<?php echo $imagen['tipo']; ?>;base64,<?php echo base64_encode($imagen['imagen']); ?>" alt="Tijera Bahco">
                    </a>
                </div>
                <!-- Producto -->
                <div class="producto-info">
                    <div class="titulo">
                        <h1>
                            <?php
                            $query = "SELECT nombre, caracteristica, marca, modelo, precio FROM articulos WHERE id = 19";
                            $res = mysqli_query($conexion, $query);
                            $info = mysqli_fetch_array($res);
                            echo $info['nombre'] . " " . $info['caracteristica'];
                            ?>
                        </h1>
                        <span class="modelo">
                            <?php
                            echo $info['modelo'];
                            ?>
                        </span>
                    </div>
                    <div class="producto-desc">
                        <p>
                            <?php
                            echo $info['nombre'] . "<br>";
                            echo "Marca: " . $info['marca'] . "<br>";
                            echo "Precio: " . $info['precio'] . " €";
                            ?>
                        </p>
                    </div>
                    <div class="info">
                        <div class="añadir">
                            <button id='aumentar' class="btn btn-dark" onclick="aumentar()">+</button>
                            <input type='text' id="cantidad" value="1">
                            <button id='disminuir' class="btn btn-dark" onclick="disminuir()">-</button>
                        </div>
                        <a href="#descripcion" class="btn btn-dark">Ficha Técnica</a>
                        <a href="" class="btn btn-dark">Añadir al Carrito</a>
                    </div>
                </div>
            </div>
            <!-- Descripcion -->
            <div class="descripcion" id="descripcion">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link link-dark active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">General</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link link-dark" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Información Técnica</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link link-dark" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Productos Relacionados</button>
                    </li>
                </ul>
                <!-- Contenidos  -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <p><strong>Beneficios del Usuario</strong></p>
                        <ul>
                            
                        </ul>
                    </div>

                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <p><strong>Información Técnica</strong></p>
                        <div class="info-tecnica">
                            <p>Consulte o descargue el PDF para saber la información técnica de este artículo.</p>
                            <a href="../productos/ficha tecnica/tijeras/bahco.pdf" target="_blank"><i class="far fa-file-pdf"></i>
                                &nbsp; Información del Producto</a> <br>
                            <a href="../productos/ficha tecnica/tijeras/bahco.pdf" download="bahco"><i class="fas fa-file-download"></i> &nbsp; Descargar</a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="relacionados">
                            <div class="card" style="width: 15em;">
                                <?php
                                $query = "SELECT tipo, imagen FROM imagenes WHERE id = 10";
                                $res = mysqli_query($conexion, $query);
                                $imagen = mysqli_fetch_assoc($res);
                                ?>
                                <img src="data:<?php echo $imagen['tipo']; ?>;base64,<?php echo base64_encode($imagen['imagen']); ?>" class="card-img-top" alt="amoladora">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php
                                        $query = "SELECT nombre, caracteristica, marca, modelo, precio FROM articulos WHERE id = 10";
                                        $res = mysqli_query($conexion, $query);
                                        $info = mysqli_fetch_array($res);
                                        echo $info['nombre'];
                                        ?>
                                    </h5>
                                    <p class="card-text">
                                        <?php
                                        echo $info['nombre'] . " " . $info['marca'] . " " . $info['caracteristica'] . '<br>';
                                        echo "Modelo: " . $info['modelo'] . "<br>";
                                        echo "Precio: " . $info['precio'] . "€ <br>";
                                        ?>
                                    </p>
                                    <a href="gafas.php" class="btn btn-dark">Ver Producto</a>
                                </div>
                            </div>

                            <div class="card" style="width: 15em;">
                                <?php
                                $query = "SELECT tipo, imagen FROM imagenes WHERE id = 18";
                                $res = mysqli_query($conexion, $query);
                                $imagen = mysqli_fetch_assoc($res);
                                ?>
                                <img src="data:<?php echo $imagen['tipo']; ?>;base64,<?php echo base64_encode($imagen['imagen']); ?>" class="card-img-top" alt="amoladora">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php
                                        $query = "SELECT nombre, caracteristica, marca, modelo, precio FROM articulos WHERE id = 18";
                                        $res = mysqli_query($conexion, $query);
                                        $info = mysqli_fetch_array($res);
                                        echo $info['nombre'];
                                        ?>
                                    </h5>
                                    <p class="card-text">
                                        <?php
                                        echo $info['nombre'] . " " . $info['marca'] . " " . $info['caracteristica'] . '<br>';
                                        echo "Modelo: " . $info['modelo'] . "<br>";
                                        echo "Precio: " . $info['precio'] . "€ <br>";
                                        ?>
                                    </p>
                                    <a href="mascara.php" class="btn btn-dark">Ver Producto</a>
                                </div>
                            </div>

                            <div class="card" style="width: 15em;">
                                <?php
                                $query = "SELECT tipo, imagen FROM imagenes WHERE id = 32";
                                $res = mysqli_query($conexion, $query);
                                $imagen = mysqli_fetch_assoc($res);
                                ?>
                                <img src="data:<?php echo $imagen['tipo']; ?>;base64,<?php echo base64_encode($imagen['imagen']); ?>" class="card-img-top" alt="amoladora">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php
                                        $query = "SELECT nombre, caracteristica, marca, modelo, precio FROM articulos WHERE id = 32";
                                        $res = mysqli_query($conexion, $query);
                                        $info = mysqli_fetch_array($res);
                                        echo $info['nombre'];
                                        ?>
                                    </h5>
                                    <p class="card-text">
                                        <?php
                                        echo $info['nombre'] . " " . $info['marca'] . " " . $info['caracteristica'] . '<br>';
                                        echo "Modelo: " . $info['modelo'] . "<br>";
                                        echo "Precio: " . $info['precio'] . "€ <br>";
                                        ?>
                                    </p>
                                    <a href="zapatillas.php" class="btn btn-dark">Ver Producto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!-- Fin Article y Principio Footer -->
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