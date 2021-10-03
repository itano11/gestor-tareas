<!-- Eliminación de tarea de la bd -->

<?php
	
	include('conexion.php');

	if (isset($_GET['id_tarea'])){

		$id_tarea = $_GET['id_tarea'];
		$consulta = "DELETE FROM tareas WHERE id_tarea = $id_tarea";
		$resultado = mysqli_query($conexion, $consulta);
		if (!resultado){
			die('Fallo en la consulta sql');
		}

		header('location: index.web.php');
	}
?>