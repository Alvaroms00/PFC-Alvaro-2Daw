<div class="caja">
    <?php
    echo '<a href="../productos/' . $item['familia'] . $item['enlace'] . '">';
    echo "<img src='../imagenestfg/" . $item['imagen']. "' class='img-thumbnail'></a></p>";
    echo "<p><a href='../productos/" . $item['familia'] . $item['enlace'] . "'>";
    echo $item['nombre'] . " " . $item['caracteristica'] . '<br></a>';
    echo "Modelo: " . $item['modelo'] . "<br>";
    echo "Precio: " . $item['precio'] . "€ <br>";
    echo "<a href='../productos/" . $item['familia'] . $item['enlace'] . "' class='btn btn-light'>Ver Producto</a></p>";
    ?>
</div>


