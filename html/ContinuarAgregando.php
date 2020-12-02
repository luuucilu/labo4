<!-- /html/ContinuarAgregando.php  -->

<!DOCTYPE html>
<html>
<head>
	<title>Continuar Agregando</title>
  <link rel="stylesheet" href="../html/styles/reset.css">
  <link rel="stylesheet" href="../html/styles/paginaPrincipal.css">
</head>
<body>

  <header class="header-section">
    <div class="header-navbar">
        <div class="header-title">
            <h1>Librería Sarasa</h1>
            <img src="../html/Imagenes/art-libreria.png" class="img-title" alt="img-title" >
        </div>

        <div class="header-options">
            <a class="nav-link" href="sucursales.php">Sucursales</a>
            <a class="nav-link" href="iniciosesion.php">Ingreso para encargados</a>
        </div>
    </div>
  </header>

  <div class="navbar">
      <div class="categorias">
        <?php
        foreach($this->categorias as $cat) {
        ?>
          <a class="item-categorias" href="ArticulosAgregados.php?articulos=<?=$cat['tipo']?>"><?= $cat['descripcion'] ?></a>	
          <p class="barra">|</p>
          <?php } ?>

      </div>
  </div>
  <div class="background-pic">
    <img class="pic" src="../html/Imagenes/fondo.jpg" alt="">
  </div>



</body>
</html>