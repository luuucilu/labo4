

<!-- /html/ContinuarFinalizar.php  -->

<!DOCTYPE html>
<html>
<head>
	<title>Mostrar Articulos</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="../html/styles/listastock.css">

	<style type="text/css">
		body {
			margin: 50px;
		}
	</style>
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

	<form method="POST">

		<table class="table">
			<?php $total = 0; ?>
		  <thead class="thead-light">
		    <tr>
		      <th scope="col">Menu</th>
		      <th scope="col">Precio</th>
		      <th scope="col">Cantidad</th>
		      <th scope="col">Subtotal</th>
		    </tr>
		  </thead>
		  <tbody>
			<?php foreach($this->articulos as $art) { ?>
		<tr>
			<td><?= $art['nombre'] ?></a></td>
			<td>$<?= $art['precio'] ?></td>
			<td><?= $art['cantidad'] ?></td>
			<td>$<?= $art['precio']*$art['cantidad'] ?></td>
			<td><?php if($this->cantidad <= 1){ ?>
				<a href="PedidoEliminado.php?borrar=<?=$art['id_articulo']?>&ultimo=<?=$this->ultimo?>">Quitar</a>
				<?php }else{ ?>
				<a href="conFin.php?borrar=<?=$art['id_articulo']?>&ultimo=<?=$this->ultimo?>">Quitar</a>
				<?php } ?>
 			</td>
			<?php $total = $total + ($art['precio']*$art['cantidad'])	?>
		</tr>
			<?php  } ?>
			<tr>
			<td></td><td></td><th>Total</th><td>$<?= $total ?></td>
		</tr>
		  </tbody>
		</table>
		
	<div class="buttons-wrapper">
		<a href="ContinuarAgregando.php" class="volver">Continuar Agregando</a>
		<a href="IngresarPedido.php" class="agregar">Pasar a finalizar la compra</a>
	</div>

	
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
