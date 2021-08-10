<?php 
	
	class Conexion {

		public function conectar() {
			$servidor = "localhost";
			$usuario = "root";
			$password = "notch";
			$bd = "agendafa";

			$conexion = mysqli_connect($servidor, $usuario, $password, $bd);

			return $conexion;
		}
	}

 ?>