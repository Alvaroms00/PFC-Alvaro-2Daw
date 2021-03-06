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
    <script src="../../js/subir.js"></script>
    <script src="../../js/sidebars.js"></script>
    <script src="../../js/cantidad.js"></script>
    <script src="../../js/carrito.js"></script>

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
                <li class="breadcrumb-item"><a href="../../html/manuales.php">Herramientas Manuales</a></li>
                <li class="breadcrumb-item active" aria-current="page">Llave Fija</li>
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
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="true">
                            Herramientas manuales
                        </button>
                        <div class="collapse show" id="dashboard-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="azada.php" class="link-dark rounded">Azada</a></li>
                                <li><a href="destornillador.php" class="link-dark rounded">Destornillador</a></li>
                                <li><a href="hacha.php" class="link-dark rounded">Hacha</a></li>
                                <li><a href="horca.php" class="link-dark rounded">Horca Tubo</a></li>
                                <li><a href="llavefija.php" class="link-dark rounded">Llave Fija</a></li>
                                <li><a href="martillo.php" class="link-dark rounded">Martillo</a></li>
                                <li><a href="pala.php" class="link-dark rounded">Pala Cuadrada</a></li>
                                <li><a href="tijerapoda.php" class="link-dark rounded">Tijera Poda</a></li>
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
                                <li><a href="../electricas/atornillador.php" class="link-dark rounded">Atornillador</a>
                                </li>
                                <li><a href="../electricas/lijadora.php" class="link-dark rounded">Lijadora</a></li>
                                <li><a href="../electricas/martilloligero.php" class="link-dark rounded">Martillo
                                        Ligero</a></li>
                                <li><a href="../electricas/miniamoladora.php" class="link-dark rounded">Mini
                                        Amoladora</a></li>
                                <li><a href="../electricas/sierra.php" class="link-dark rounded">Sierra de Calar</a>
                                </li>
                                <li><a href="../electricas/taladrocomb.php" class="link-dark rounded">Taladro
                                        Combinado</a></li>
                                <li><a href="../electricas/taladroperc.php" class="link-dark rounded">Taladro
                                        Percutor</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#products-collapse" aria-expanded="false">
                            Epis
                        </button>
                        <div class="collapse" id="products-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="../epis/casco.php" class="link-dark rounded">Casco Obra</a></li>
                                <li><a href="../epis/chaleco.php" class="link-dark rounded">Chaleco Reflectante</a>
                                </li>
                                <li><a href="../epis/gafas.php" class="link-dark rounded">Gafas Seguridad</a></li>
                                <li><a href="../epis/guantes.php" class="link-dark rounded">Guantes</a></li>
                                <li><a href="../epis/mascara.php" class="link-dark rounded">Mascara Protectora</a></li>
                                <li><a href="../epis/mascarilla.php" class="link-dark rounded">Mascarillas</a></li>
                                <li><a href="../epis/protector.php" class="link-dark rounded">Protector auditivo</a>
                                </li>
                                <li><a href="../epis/zapatillas.php" class="link-dark rounded">Zapatillas</a></li>
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
        <!-- Fin aside y Pricipio producto -->
        <div class="articulo">
            <div class="producto">
                <?php
                $query = "SELECT * FROM articulos WHERE id = 15";
                $res = mysqli_query($conexion, $query);
                $info = mysqli_fetch_assoc($res);
                echo "<div class='producto-img'>";
                echo "<a data-fancybox='single' data-src='../../imagenestfg/llavefija.jpg'>";
                echo "<img src='../../imagenestfg/" . $info['imagen'] . "'></a></div>";
                echo "<div class='producto-info'>";
                echo "<div class='titulo'>";
                echo "<h1>" . $info['nombre'] . " " . $info['caracteristica'] . "</h1>";
                echo "<span class'modelo'>" . $info['modelo'] . "</span></div>";
                echo "<div class='producto-desc'>";
                echo "<p>" . $info['nombre'] . "<br>";
                echo "Marca: " . $info['marca'] . "<br>";
                echo "Precio: " . $info['precio'] . " €</p></div>";
                ?>
                <div class="info">
                    <div class="añadir">
                        <button id='aumentar' class="btn btn-dark" onclick="aumentar()">+</button>
                        <input type='text' id="cantidad" value="1">
                        <button id='disminuir' class="btn btn-dark" onclick="disminuir()">-</button>
                    </div>
                    <a href="#descripcion" class="btn btn-dark">Ficha Técnica</a>
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
                            <li>Diseño en forma de U patentado</li>
                            <li>Mejor accesibilidad gracias a una cabeza más delgada con bocas anguladas de 15°</li>
                            <li>Marcado unidireccional más grande que facilita la identificación</li>
                            <li>Acabado micromate cromado para una superficie de gran calidad</li>
                            <li>Acero aleado de alto rendimiento</li>
                            <li>Menos desgaste del fijador gracias a la amplia superficie de contacto de la boca</li>
                        </ul>
                    </div>

                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <p><strong>Información Técnica</strong></p>
                        <div class="info-tecnica">
                            <p>Consulte o descargue el PDF para saber la información técnica de este artículo.</p>
                            <a href="../ficha tecnica/manuales/llavefija.pdf" target="_blank"><i class="far fa-file-pdf"></i>
                                &nbsp; Información del Producto</a> <br>
                            <a href="../ficha tecnica/manuales/llavefija.pdf" download=""><i class="fas fa-file-download"></i>
                                &nbsp; Descargar</a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="relacionados">
                        <div class="card" style="width: 15em;">
                            <?php
                            $query = "SELECT * FROM articulos WHERE id = 4";
                            $res = mysqli_query($conexion, $query);
                            $info = mysqli_fetch_array($res);

                            echo "<img src='../../imagenestfg/" . $info['imagen'] . "'>";
                            echo "<div class='card-body'>";
                            echo "<h5 class='card-title'>";
                            echo $info['nombre'] . "</h5>";
                            echo "<p class='card-text'>";
                            echo $info['nombre'] . " " . $info['marca'] . " " . $info['caracteristica'] . '<br>';
                            echo "Modelo: " . $info['modelo'] . "<br>";
                            echo "Precio: " . $info['precio'] . "€ <br></p>";
                            echo "<a href='azada.php' class='btn btn-dark'>Ver Producto</a> </div>";
                            ?>
                        </div>

                        <div class="card" style="width: 15em;">
                            <?php
                            $query = "SELECT * FROM articulos WHERE id = 9";
                            $res = mysqli_query($conexion, $query);
                            $info = mysqli_fetch_array($res);

                            echo "<img src='../../imagenestfg/" . $info['imagen'] . "'>";
                            echo "<div class='card-body'>";
                            echo "<h5 class='card-title'>";
                            echo $info['nombre'] . "</h5>";
                            echo "<p class='card-text'>";
                            echo $info['nombre'] . " " . $info['marca'] . " " . $info['caracteristica'] . '<br>';
                            echo "Modelo: " . $info['modelo'] . "<br>";
                            echo "Precio: " . $info['precio'] . "€ <br></p>";
                            echo "<a href='destornillador.php' class='btn btn-dark'>Ver Producto</a> </div>";
                            ?>
                        </div>

                        <div class="card" style="width: 15em;">
                            <?php
                            $query = "SELECT * FROM articulos WHERE id = 31";
                            $res = mysqli_query($conexion, $query);
                            $info = mysqli_fetch_array($res);

                            echo "<img src='../../imagenestfg/" . $info['imagen'] . "'>";
                            echo "<div class='card-body'>";
                            echo "<h5 class='card-title'>";
                            echo $info['nombre'] . "</h5>";
                            echo "<p class='card-text'>";
                            echo $info['nombre'] . " " . $info['marca'] . " " . $info['caracteristica'] . '<br>';
                            echo "Modelo: " . $info['modelo'] . "<br>";
                            echo "Precio: " . $info['precio'] . "€ <br></p>";
                            echo "<a href='tijerapoda.php' class='btn btn-dark'>Ver Producto</a> </div>";
                            ?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!-- Fin Article y Principio Footer -->
    <?php
    include("../../templates/footer.php");
    ?>
</body>

</html>