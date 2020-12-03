<!DOCTYPE html>
<html>
<head>
	<title>Mostrar Articulos Agregados</title>
	<link rel="stylesheet" type="text/css" href="html/css/bootstrap.min.css">
	<link rel="stylesheet" href="html/styles/mostrarArticulos.css">
</head>
<body>

	<header class="header-section">
			<div class="header-navbar">
				<div class="header-title">
					<a class="title" href="PaginaPrincipal">Librería Sarasa</a>
					<img src="html/Imagenes/art-libreria.png" class="img-title" alt="img-title" >
				</div>

				<div class="header-options">
					<a class="nav-link" href="Sucursales">Sucursales</a>
					<a class="nav-link" href="InicioSesion">Ingreso para encargados</a>
				</div>
			</div>
	</header>

	<form method="POST">
		<table class="table">
			<thead class="thead-light">
				<tr>
				<th scope="col"></th>
						<th scope="col">Nombre</th>
						<th scope="col">Detalle</th>
						<th scope="col">Precio</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php foreach($this->articulos as $art) { 
						if($art['tipo']== $_GET['articulos']) { ?>
						<td>
							<img src="<?= $art['imagen'] ?>" alt="" class="imagen-prod">
						</td>
						<td>
							<a href="AgregarMas-<?=$art['id_articulo']?>-<?=$_GET['articulos']?>"><?= $art['nombre'] ?></a>
						</td>
						<td>
							<?= $art['detalle'] ?>
						</td>
						<td>
							$<?= $art['precio'] ?>
						</td>
					</tr>

					<?php } } ?>
			</tbody>
		</table>
		
	<div class="text-center">
		<a href="ContinuarAgregando">Volver</a>
	</div>
	

	<script src="html/js/jquery-3.3.1.slim.min.js"></script>
	<script src="html/js/popper.min.js"></script>
	<script src="html/js/bootstrap.min.js"></script>
</body>
</html>