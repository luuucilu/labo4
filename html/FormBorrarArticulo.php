
<!DOCTYPE html>
<html>
<head>
	<title>Baja de Articulo</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="../html/styles/altaArticulo.css">
</head>
<body>

	<header class="header-section">
			<div class="header-navbar">
				<div class="header-title">
					<a class="title" href="PaginaPrincipalEncargado.php">Librería Sarasa</a>
					<!-- <h1>Librería Sarasa</h1> -->
					<img src="../html/Imagenes/art-libreria.png" class="img-title" alt="img-title" >
				</div>

				<div class="header-options">
					<a class="nav-link" href="listastock.php">Productos</a>
					<a class="nav-link" href="listapedidos.php">Despachar Pedidos</a>
					<a class="nav-link" href="Logout.php">Cerrar Sesión</a>
				</div>
			</div>
	</header>

	<section class="alta">
	<h1>Baja de Articulo</h1>
		<form action="" method="POST">
			<p>¿Está seguro de que desea elminar el artículo?</p>

	<div class="buttons-wrapper">
		<div class="volver">
			<a href="listastock.php">Volver</a>
		</div>
        <input type=submit class="volver" name="Borrar" value="Borrar">
	</div>

		</form> 
	</section>
	
</body>
</html>