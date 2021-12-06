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

        <li class="carrito">
            <a href="#" class='btn-carrito'><i class="fas fa-shopping-cart"></i>Carrito</a>
            <div id="carrito-container">
                <div id="tabla">
                </div>
            </div>
        </li>

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
            </ul>
        </div>
    </nav>
</div>