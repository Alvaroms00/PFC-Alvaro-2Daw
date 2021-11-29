<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  include("../php/conectar_bd.php");
  ?>
  <meta charset="UTF-8">
  <title>Ferretería Gabaldón</title>
  <link rel="shorcut icon" href="../imagenestfg/icono.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- css -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/productos.css">
  <link rel="stylesheet" href="../css/sidebars.css">

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
  </script>
  <script src="../js/sidebars.js"></script>
  <script src="../js/carrito.js"></script>

</head>

<body>
  <?php
  include("header.php");
  ?>
  <article>
    <aside>
      <div class="flex-shrink-0 bg-white" style="width: 280px;">
        <a href="#" class="align-items-center link-dark text-decoration-none">
          <span class="fs-5 fw-semibold">Productos</span>
        </a>
        <ul class="list-unstyled ps-0">
          <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
              Tijeras electricas
            </button>
            <div class="collapse show" id="home-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="../productos/tijeras/bahco.php" class="link-dark rounded">Tijera BAHCO</a></li>
                <li><a href="../productos/tijeras/bellota.php" class="link-dark rounded">Tijera Bellota</a></li>
                <li><a href="../productos/tijeras/infaco.php" class="link-dark rounded">Tijera Infaco</a></li>
                <li><a href="../productos/tijeras/makita.php" class="link-dark rounded">Tijera Makita</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
              Herramientas manuales
            </button>
            <div class="collapse" id="dashboard-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="../productos/manuales/azada.php" class="link-dark rounded">Azada</a></li>
                <li><a href="../productos/manuales/destornillador.php" class="link-dark rounded">Destornillador</a></li>
                <li><a href="../productos/manuales/hacha.php" class="link-dark rounded">Hacha</a></li>
                <li><a href="../productos/manuales/horca.php" class="link-dark rounded">Horca Tubo</a></li>
                <li><a href="../productos/manuales/llavefija.php" class="link-dark rounded">Llave Fija</a></li>
                <li><a href="../productos/manuales/martillo.php" class="link-dark rounded">Martillo</a></li>
                <li><a href="../productos/manuales/pala.php" class="link-dark rounded">Pala Cuadrada</a></li>
                <li><a href="../productos/manuales/tijerapoda.php" class="link-dark rounded">Tijera Poda</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
              Herramientas Electricas
            </button>
            <div class="collapse" id="orders-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="../productos/electricas/amoladora.php" class="link-dark rounded">Amoladora</a></li>
                <li><a href="../productos/electricas/atornillador.php" class="link-dark rounded">Atornillador</a></li>
                <li><a href="../productos/electricas/lijadora.php" class="link-dark rounded">Lijadora</a></li>
                <li><a href="../productos/electricas/martilloligero.php" class="link-dark rounded">Martillo Ligero</a></li>
                <li><a href="../productos/electricas/miniamoladora.php" class="link-dark rounded">Mini Amoladora</a></li>
                <li><a href="../productos/electricas/sierra.php" class="link-dark rounded">Sierra de Calar</a></li>
                <li><a href="../productos/electricas/taladrocomb.php" class="link-dark rounded">Taladro Combinado</a></li>
                <li><a href="../productos/electricas/taladroperc.php" class="link-dark rounded">Taladro Percutor</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#products-collapse" aria-expanded="false">
              Epis
            </button>
            <div class="collapse" id="products-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="../productos/epis/casco.php" class="link-dark rounded">Casco Obra</a></li>
                <li><a href="../productos/epis/chaleco.php" class="link-dark rounded">Chaleco Reflectante</a></li>
                <li><a href="../productos/epis/gafas.php" class="link-dark rounded">Gafas Seguridad</a></li>
                <li><a href="../productos/epis/guantes.php" class="link-dark rounded">Guantes </a></li>
                <li><a href="../productos/epis/mascara.php" class="link-dark rounded">Mascara Protectora</a></li>
                <li><a href="../productos/epis/mascarilla.php" class="link-dark rounded">Mascarillas</a></li>
                <li><a href="../productos/epis/protector.php" class="link-dark rounded">Protector auditivo</a></li>
                <li><a href="../productos/epis/zapatillas.php" class="link-dark rounded">Zapatillas</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#customers-collapse" aria-expanded="false">
              Jardín
            </button>
            <div class="collapse" id="customers-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="../productos/jardin/asiento.php" class="link-dark rounded">Asiento</a></li>
                <li><a href="../productos/jardin/banco.php" class="link-dark rounded">Banco</a></li>
                <li><a href="../productos/jardin/cenador.php" class="link-dark rounded">Cenador</a></li>
                <li><a href="../productos/jardin/mesa-plegable.php" class="link-dark rounded">Mesa Plegable</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </aside>

    <form action="POST">
      <select name="id" class="btn btn-white">
        <option value="1">Orden alfabético (A-Z)</option>
        <option value="2">Orden alfabético inverso (Z-A)</option>
        <option value="3">Precio más bajo a más alto</option>
        <option value="4">Precio más alto a más bajo</option>
      </select>
      <button type="submit" class="btn btn-dark">Aplicar</button>
    </form>

    <p>Aqui esta nuestra selección de las mejores tijeras de podar del mercado</p>
    <div class="productos">
      <?php
      $response = json_decode(file_get_contents('http://localhost/PFC-Alvaro-2Daw/api/productos/api-productos.php?familia=tijeras'), true);
      if ($response['statuscode'] == 200) {
        foreach ($response['items'] as $item) {
          include('articulo.php');
        }
      } else {
        echo $response['response'];
      }
      ?>
    </div>

  </article>

  <?php
  include("footer.php");
  ?>

</body>

</html>