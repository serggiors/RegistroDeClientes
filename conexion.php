<?php
	
	$mysqli = new mysqli('localhost', 'u139663734_atentocompleto', 'Atento2020', 'u139663734_atentocompleto');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>