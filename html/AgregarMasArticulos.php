<!DOCTYPE html>
<html>
<head>
	<title>Agregar Articulos al carrito</title>
	<link rel="stylesheet" href="html/styles/reset.css">
	<link rel="stylesheet" href="html/styles/altaArticulo.css">

</head>
<body>

	<header class="header-section">
			<div class="header-navbar">
				<div class="header-title">
					<a class="title" href="PaginaPrincipalEncargado">Librería Sarasa</a>
					<img src="html/Imagenes/art-libreria.png" class="img-title" alt="img-title" >
				</div>

				<div class="header-options">
					<a class="nav-link" href="Sucursales">Sucursales</a>
					<a class="nav-link" href="InicioSesion">Ingreso para encargados</a>
				</div>
			</div>
	</header>

	<section class="alta">
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<?php foreach($this->articulos as $art) { 
				if(($art['id_articulo']) == $_GET['id']){ ?>
					
					<h5 class="card-title"><?= $art['nombre']." $". $art['precio']?></h5>
				<?php }
				} ?>
				<form method="POST">
				<label>Cantidad: </label>
					<select name="cantidad">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
					</select>

					<div class="buttons-wrapper">
						<div class="volver">
							<a href="ArticulosAgregados-Articulos-<?=$_GET['categorias']?>" class="btn btn-primary">Volver</a>
						</div>
						<input type=submit class="volver" value="Agregar">
					</div>

					<input type="hidden" name="id_articulo" value="<?= $_GET['id'] ?>">
					<input type="hidden" name="id_pedido" value="<?= $this->ultimo ?>">
					
					
				</form>
			</div>
		</div>
	</section> 

</body>
</html>