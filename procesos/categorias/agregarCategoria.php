<?php 

	require_once "../../clases/Categorias.php";

	$datos = array(
		"nombre" => $POST['nombreCategoria'],
		"descripcion" => $POST['descripcion'],
	);
	$Categorias = new Categorias();
	echo $Categorias->agregarCategoria($datos);
?>