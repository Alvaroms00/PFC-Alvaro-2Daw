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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/modificarProductos.css">

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
    <div class="boton-subir" id="subir">
    <a id="subir" class="subir">
      <i class="fas fa-chevron-up"></i>
    </a>
  </div>
    <article>
        <div class="botones">
            <button type="button" class="btn btn-dark" id="botonAgregar">Agregar artículo</button>
            <button class="btn btn-dark" id="botonEditar">Editar artículo</button>
            <button class="btn btn-dark" id="botonEliminar">Eliminar artículo</button>
        </div>

        <div class="formulario">
            <form method="post" action="" id="agregar">
                <p>Introduzca los datos del nuevo artículo</p>
                <p>
                    <label for="referencia">Numero de referencia</label>
                    <input type="text" name="referencia" id="referencia" placeholder="Numero de referencia" require>
                </p>

                <p>
                    <label for="nombre" class="numero de ref">Nombre</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" require>
                </p>

                <p>
                    <label for="caracteristica" class="numero de ref">Caracteristica</label>
                    <input type="text" name="caracteristica" id="caracteristica" placeholder="Caracteristica" require>
                </p>

                <p>
                    <label for="marca" class="marca">Marca</label>
                    <input type="text" name="marca" id="marca" placeholder="Marca" require>
                </p>

                <p>
                    <label for="numero de ref" class="numero de ref">Modelo</label>
                    <input type="text" name="modelo" id="numero de ref" placeholder="Modelo" require>
                </p>

                <p>
                    <label for="precio" class="precio">Precio</label>
                    <input type="text" name="precio" id="numero de ref" placeholder="Precio" require>
                </p>

                <p>
                    <label for="familia" class="familia">Familia</label>
                    <select name="familia" class="btn btn-white">
                        <option value="Electricas">Herramientas Eléctricas</option>
                        <option value="Epis">Epis</option>
                        <option value="Jardin">Jardín</option>
                        <option value="Manuales">Herramientas manuales</option>
                        <option value="Tijeras">Tijeras Eléctricas</option>
                    </select>
                </p>
                <button type="submit" name="agregar" id="enviar" class="btn btn-dark">Agregar artículo</button>
                <?php
                if (isset($_POST['agregar'])) {

                    if (isset($_POST["referencia"], $_POST["nombre"], $_POST["caracteristica"], $_POST["marca"], $_POST["modelo"], $_POST["precio"], $_POST["familia"])) {
                        $referencia = $_POST["referencia"];
                        $nombre = $_POST["nombre"];
                        $caracteristica = $_POST["caracteristica"];
                        $marca = $_POST["marca"];
                        $modelo = $_POST["modelo"];
                        $precio = $_POST["precio"];
                        $familia = $_POST["familia"];
                        $insertar = "INSERT INTO articulos (referencia, nombre, caracteristica, marca, modelo, precio, familia) VALUES ('$referencia','$nombre','$caracteristica','$marca','$modelo','$precio','$familia')";
                    }
                    if (mysqli_query($conexion, $insertar)) {
                        echo "Se han introducido correctamente los datos.";
                    } else {
                        echo "Error";
                    }
                }
                ?>
            </form>

            <form action="" method="POST" id="editar">
                <p>Introducza los datos a editar del artículo</p>
                <p>
                    <label for="referencia">Numero de referencia</label>
                    <input type="text" name="referencia" id="referencia" placeholder="Numero de referencia">
                </p>

                <p>
                    <label for="nombre" class="numero de ref">Nombre</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre">
                </p>

                <p>
                    <label for="caracteristica" class="numero de ref">Caracteristica</label>
                    <input type="text" name="caracteristica" id="caracteristica" placeholder="Caracteristica">
                </p>

                <p>
                    <label for="marca" class="marca">Marca</label>
                    <input type="text" name="marca" id="marca" placeholder="Marca">
                </p>

                <p>
                    <label for="numero de ref" class="numero de ref">Modelo</label>
                    <input type="text" name="modelo" id="numero de ref" placeholder="Modelo">
                </p>

                <p>
                    <label for="precio" class="precio">Precio</label>
                    <input type="text" name="precio" id="numero de ref" placeholder="Precio">
                </p>

                <p>
                    <label for="familia" class="familia">Familia</label>
                    <select name="familia" class="btn btn-white">
                        <option value="Electricas">Herramientas Eléctricas</option>
                        <option value="Epis">Epis</option>
                        <option value="Jardin">Jardín</option>
                        <option value="Manuales">Herramientas manuales</option>
                        <option value="Tijeras">Tijeras Eléctricas</option>
                    </select>
                </p>
                <button type="submit" name="editar" class="btn btn-dark">Editar artículo</button>
                <?php
                if (isset($_POST['editar'])) {
                    if (isset($_POST["referencia"], $_POST["nombre"], $_POST["caracteristica"], $_POST["marca"], $_POST["modelo"], $_POST["precio"], $_POST["familia"])) {
                        $referencia = $_POST["referencia"];
                        $nombre = $_POST["nombre"];
                        $caracteristica = $_POST["caracteristica"];
                        $marca = $_POST["marca"];
                        $modelo = $_POST["modelo"];
                        $precio = $_POST["precio"];
                        $familia = $_POST["familia"];

                        $editar = "UPDATE articulos SET nombre = '$nombre', caracteristica = '$caracteristica', marca = '$marca', modelo = '$modelo', precio = '$precio', familia = '$familia' WHERE referencia = $referencia";
                    }
                    if (mysqli_query($conexion, $editar)) {
                        echo "Se ha editado correctamente";
                    } else {
                        echo "No se ha podido editar el producto";
                    }
                }
                ?>


            </form>

            <form action="" method="POST" id="eliminar">
                <p>Introduzca el codigo de artículo del articulo a eliminar</p>
                <p>
                    <label for="referencia">Numero de referencia</label>
                    <input type="text" name="referencia" id="referencia" placeholder="Numero de referencia" require>
                </p>
                <button type="submit" name="eliminar" class="btn btn-dark">Eliminar artículo</button>
                <?php
                if (isset($_POST['eliminar'])) {
                    if (isset($_POST['referencia'])) {
                        $referencia = $_POST['referencia'];

                        $eliminar = "DELETE FROM articulos WHERE referencia = $referencia";
                    }
                    if (mysqli_query($conexion, $eliminar)) {
                        echo "Se ha eliminado correctamente";
                    } else {
                        echo "El producto ya no existe";
                    }
                }
                ?>
            </form>
        </div>

        <table id="articulos">
            <thead>
                <th>Imagen</th>
                <th>Numero de referencia</th>
                <th>Nombre</th>
                <th>Caracteristica</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Precio</th>
                <th>Familia</th>
                <th>Destacado</th>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM articulos";
                $res = mysqli_query($conexion, $query);

                while ($info = mysqli_fetch_array($res)) {
                    echo "<tr>";
                    echo "<td><img src='../imagenestfg/" . $info['imagen'] . "' width='100px'></td>";
                    echo "<td>" . $info['referencia'] . "</td>";
                    echo "<td>" . $info['nombre'] . "</td>";
                    echo "<td>" . $info['caracteristica'] . "</td>";
                    echo "<td>" . $info['marca'] . "</td>";
                    echo "<td>" . $info['modelo'] . "</td>";
                    echo "<td>" . $info['precio'] . "</td>";
                    echo "<td>" . $info['familia'] . "</td>";
                    echo "<td>";
                    if($info['destacado'] !=  1){
                        echo "No";
                    }else{
                        echo "Sí";
                    }
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
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
    <script src="../js/productos.js"></script>
    <script src="../js/subir.js"></script>
</body>

</html>