<?php include('conexion.php'); ?>

<?php

	// Validación Formulario del index.web.php
	
	$msgTitulo = "";
	$msgResponsable = "";
	$msgRut = "";
	$msgDescripcion = "";

	$titulo = "";
	$responsable = "";
	$rut = "";
	$descripcion = "";

	if(isset($_POST['grabarTarea'])){
		$titulo = $_POST['titulo'];
		$responsable = $_POST['responsable'];
		$rut = $_POST['rut'];
		$descripcion = $_POST['descripcion'];

		$claseTitulo = "";
		$claseResponsable = "";
		$claseRut = "";
		$claseDescripcion = "";

		if ($titulo == ""){
			$msgTitulo = "*Ingresar título de la tarea<br>";
			$claseTitulo = "error";
		}elseif($responsable == ""){
			$msgResponsable = "*Ingresar responsable de la tarea<br>";
			$claseResponsable = "error";
		}elseif($rut == ""){
			$msgRut = "*Ingresar rut del creador de la tarea<br>";
			$claseRut = "error";
		}elseif($descripcion == ""){
			$msgDescripcion = "*Ingresar descripción de la tarea";
			$claseDescripcion = "error";
		}else{

		$consulta = "INSERT INTO tareas(titulo, rutCreadorTarea, responsable, descripcion) VALUES ('$titulo', '$rut', '$responsable', '$descripcion')";
		$resultado = mysqli_query($conexion, $consulta);

		header('Location: index.web.php');

		if (!$resultado){
			die("No fue posible insertar nueva tarea");}
		}

	}

?>

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

	<script type="text/javascript">
		function validarFormulario() {

            var n = document.forms["form"]["titulo"].value;
            if (n == null || n == "" || n == " ") {
                alert("Debe llenar el título de la tarea");
                return false;
            }

            var n = document.forms["form"]["responsable"].value;
            if (n == null || n == "" || n == " ") {
                alert("Debe llenar el responsable a cargo de la tarea");
                return false;
            }

            var n = document.forms["form"]["rut"].value;
            if (n == null || n == "" || n == " ") {
                alert("Debe llenar el RUT del creador de la tarea");
                return false;
            }

            var n = document.forms["form"]["descripcion"].value;
            if (n == null || n == "" || n == " ") {
                alert("Debe llenar la descripción de la tarea");
                return false;
            }
        }
	</script>


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
		<div class="col-sm-10 col-md-8 col-lg-6">
			<h4 class="text-center">Formulario para Nueva Tarea</h4>
			<div class="card card-body">
				<!--<form action="grabar.php" method="POST" name="form" onsubmit="return validarFormulario()">-->
				<form action="index.web.php" method="POST" name="form">
					
					<div class="form-group <?php echo $claseTitulo; ?> ">
						<input type="text" name="titulo" class="form-control" placeholder="Título tarea" value="<?php echo $titulo; ?>" >
					</div>
					
					<div class="form-group <?php echo $claseResponsable; ?> ">
						<input type="text" name="responsable" class="form-control" value="<?php echo $responsable; ?>" placeholder="Responsable/s tarea">
					</div>
					
					<div class="form-group <?php echo $claseRut; ?> ">
						<input type="number" maxlength="9" name="rut" class="form-control" value="<?php echo $rut; ?>" placeholder="RUT creador tarea">
					</div>
					
					<div class="form-group <?php echo $claseDescripcion; ?> ">
						<textarea name="descripcion" rows="5" class="form-control" value="<?php echo $descripcion; ?>" placeholder="Descripción tarea"></textarea>
					</div>
					
					<span class="msg"><?php echo $msgTitulo; ?></span>
					<span class="msg"><?php echo $msgResponsable; ?></span>
					<span class="msg"><?php echo $msgRut; ?></span>
					<span class="msg"><?php echo $msgDescripcion; ?></span>
					
					<input type="submit" name="grabarTarea" class="btn btn-dark btn-block" value="Guardar Nueva Tarea">
				</form>
			</div>
		</div>

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
									<a href="editar.php?id_tarea=<?php echo $row['id_tarea']?>" class="btn btn-secondary btn-sm">
										<i class="fas fa-edit"></i>
									</a>

		<!-- Botón eliminar tarea que incluye confirmación vía javascript de eliminación de tarea -->
									<a href="eliminar.php?id_tarea=<?php echo $row['id_tarea']?>" class="btn btn-danger btn-sm" onClick="return ConfirmarBorrar()"
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

<a href="respaldos/php">Admin</a>
<a href="manualDelSistema.php">Manual del Sistema</a>
<a href="manualDeUsuario.php">Manual de Usuario</a>

<footer>
	
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>