<?php include('conexion.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device width, initial scale-1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>CRUD | Gestor de Tareas</title>

	<style type="text/css">
		.error{
			border: solid 3px red;
			border-radius: 7px;
		}
		
		.msg{
			color:  red;
			font-size: 12px;
			margin: 0;
		}

	</style>

<!-- Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- Font Awesome -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
	<div class="container">
		<a href="index.web.php" class="navbar-brand">Gestor de Tareas</a>
	</div>
</nav>

<div class="container p-4">
	<div class="row">

		<!-- Tabla que muestra las tareas actuales -->
		<div class="col-md-12">
			<br>
			<h4 class="text-center">Listado de Tareas Actuales</h4>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Título</th>
						<th>Rut creador</th>
						<th>Responsable/s</th>
						<th>Descripción</th>
						<th>Fecha Creación</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>

		<!-- Captura desde la bd de las tareas actuales -->
					<?php
						$consulta = "SELECT * FROM tareas";
						$resultados_tareas = mysqli_query($conexion, $consulta);
						while($row = mysqli_fetch_array($resultados_tareas)){ ?>
							<tr>
								<td><?php echo $row['titulo'] ?></td>
								<td><?php echo $row['rutCreadorTarea'] ?></td>
								<td><?php echo $row['responsable'] ?></td>
								<td><?php echo $row['descripcion'] ?></td>
								<td><?php echo $row['fechaCreacion'] ?></td>
								<td>

		<!-- Botón editar tarea -->
									<a href="#" class="btn btn-secondary btn-sm">
										<i class="fas fa-edit"></i>
									</a>

		<!-- Botón eliminar tarea que incluye confirmación vía javascript de eliminación de tarea -->
									<a href="#" class="btn btn-danger btn-sm" onClick="return ConfirmarBorrar()"
										>
										<i class="far fa-trash-alt"></i>
									</a>
								</td>
							</tr>
							
					<?php } ?>

				</tbody>
			</table>
		</div>
	</div>
</div>

<a href="manualDelSistema.view.php">Manual del Sistema</a>
<a href="manualDeUsuario.view.php">Manual de Usuario</a>

<footer>
	
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>