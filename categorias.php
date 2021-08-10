<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Categorias</title>
	<link rel="icon" type="image/png" href="public/img/imagen.png">
	<?php require_once "dependencias.php"; ?>
</head>
<body>
	<div class="container">
		<?php require_once "menu.php"; ?>
		<div class="jumbotron">
			<h1 class="display-4">Categorías</h1>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria"> 
				<span class="fas fa-file"></span> Agregar categoría
			</button>
			<hr class="my-4">
			<div id="cargaTablaCategorias"></div>
			
		</div>
		<?php 
			require_once "vistas/categorias/modalAgregar.php"; 
			require_once "vistas/categorias/modalActualizar.php";
		?>
	</div>

	<script src="public/js/categorias.js"></script>
</body>
</html>