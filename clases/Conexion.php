<?php 
	class Conexion{
		public funcition conectar(){
			$servidor="localhost";
			$usuario="root";
			$password="";
			$bd="agendafa";

			$conexion = mwsqli_connect($servidor, $usuario, $password, $bd);
			return $conexion;
		}
	}
?>