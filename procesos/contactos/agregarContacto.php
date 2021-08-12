<?php 

	require_once "../../clases/Contactos.php";
	$Contactos = new Contactos();

	/*$nombre_imagen =$_FILES['foto']['name'];
	$temporal =$_FILES['foto']['tmp_name'];
	$carpeta = 'imgsub';
	$ruta = $carpeta.'/'.$nombre_imagen;
	
	$temporal =$_FILES['foto']['tmp_name'];
	$ruta = "0 balas";*/

	if (isset($_FILES["foto"])) {

		$nombre_imagen =$_FILES['foto']['name'];
		$temporal =$_FILES['foto']['tmp_name'];
		$carpeta = '\imgsub';
		$ruta = "C:\\"."xampp\htdocs\agendita".$carpeta."\\".$nombre_imagen;
		copy($temporal, $ruta);
		
	 } else{$ruta = "0 balas";}

	


	$datos = array(
				"idCategoria" => $_POST['idCategoriaSelect'],
				"nombre" => $_POST['nombre'],
				"paterno" => $_POST['apaterno'],
				"materno" => $_POST['amaterno'],
				"telefono" => $_POST['telefono'],
				"email" => $_POST['email'],
				"profesion" => $_POST['profesion'],
				"ruta" => $ruta
					);

	echo $Contactos->agregarContacto($datos);
 ?>