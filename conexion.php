<?php

	$conexion = mysqli_connect('localhost','root','','crudPHP');

	if(!isset($conexion)){
		echo "Error en la conexión a la base de datos!";
	}else{
		//echo "Conectado a la base de datos!";
	}

?>