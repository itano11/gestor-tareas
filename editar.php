<?php

	include('conexion.php');

	if(isset($_GET['id_tarea'])){
		$id_tarea = $_GET['id_tarea'];
		$consulta = "SELECT * FROM tareas WHERE id_tarea = $id_tarea";
		$resultado = mysqli_query($conexion, $consulta);

		if(mysqli_num_rows($resultado) == 1){
			$row = mysqli_fetch_array($resultado);
			$titulo = $row['titulo'];
			$rut = $row['rutCreadorTarea'];
			$responsable = $row['responsable'];
			$descripcion = $row['descripcion'];
		}
	}

	if (isset($_POST['actualizar'])){
		$id_tarea = $_GET['id_tarea'];
		$titulo = $_POST['titulo'];
		$rut = $_POST['rut'];
		$responsable = $_POST['responsable'];
		$descripcion = $_POST['descripcion'];


		$consulta = "UPDATE tareas SET titulo = '$titulo', rutCreadorTarea = '$rut', responsable = '$responsable', descripcion = '$descripcion' WHERE id_tarea = '$id_tarea'";

		mysqli_query($conexion, $consulta);

		header('Location: index.web.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device width, initial scale-1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>CRUD | Gestor de Tareas</title>

<!-- Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- Font Awesome -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

<!-- Creación de nuevo formulario de edición de tarea ya existente -->

	<nav class="navbar navbar-dark bg-dark">
		<div class="container">
			<a href="index.web.php" class="navbar-brand">CRUD - Gestor de Tareas</a>
		</div>
	</nav>

	<div class="container p-4">
		<div class="row">
			<div class="col-md-4 mx-auto">
				<h3 class="text-center">Edición de Tarea</h3>
				<div class="card card-body">
					<form action="editar.php?id_tarea=<?php echo $_GET['id_tarea']; ?>" method="POST">
						<div class="form-group">
							<input type="text" name="titulo" value="<?php echo $titulo; ?>" class="form-control" placeholder="Actualizar título">
						</div>
						<div class="form-group">
							<input type="text" name="rut" value="<?php echo $rut; ?>" class="form-control" placeholder="Actualizar rut">
						</div>
						<div class="form-group">
							<input type="text" name="responsable" value="<?php echo $responsable; ?>" class="form-control" placeholder="Actualizar responsable">
						</div>
						<div class="form-group">
							<textarea name="descripcion" rows="5" class="form-control" placeholder="Actualizar descripción"><?php echo $descripcion; ?></textarea>
						</div>
						<button class="btn btn-dark btn-block" name="actualizar">Actualizar
						</button>						
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<footer>
    
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
