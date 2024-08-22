<?php 

	function conexion(){
		$conexion= new mysqli("127.0.0.1", "root" ,"","userscrud");
		if($conexion->connect_errno){
			echo "Fallo al conectar :". $conexion->connect_error;
		}
		return $conexion;
	}
 ?>