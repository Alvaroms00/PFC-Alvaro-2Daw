<div class="caja">
    <?php
    echo "<input type='hidden' id='id' value='". $info['id']. "'>";
    echo "<a href='../productos/" . strtolower($info['familia']) . "/". strtolower($info['nombre'])  . ".php'>";
    echo "<img src='../imagenestfg/" . $info['imagen']. "' class='img-thumbnail'></a></p>";
    echo "<p><a href='../productos/" . strtolower($info['familia']) ."/". strtolower($info['nombre'])  . ".php'>";
    echo $info['nombre'] . " " . $info['caracteristica'] . '<br></a>';
    echo "Marca: " . $info['marca'] . "<br>";
    echo "Modelo: " . $info['modelo'] . "<br>";
    echo "Precio: " . $info['precio'] . "€ <br>";
    echo "<a href='../productos/" . strtolower($info['familia']) . "/" .strtolower($info['nombre'])  . ".php' class='btn btn-light'>Ver Producto</a></p>";
    ?>
</div>


