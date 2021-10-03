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

            var n = document.forms["form"]["usuario"].value;
            if (n == null || n == "" || n == " ") {
                alert("Debes llenar el usuario");
                return false;
            }

            var n = document.forms["form"]["contrasena"].value;
            if (n == null || n == "" || n == " ") {
                alert("Debes llenar la contraseña");
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
			<h4 class="text-center">Acceso al Sistema</h4>
			<div class="card card-body">
				<form action="validar_usuario.php" method="POST" name="form" onsubmit="return validarFormulario()">
					<div class="form-group">
						<input type="text" name="usuario" class="form-control" placeholder="Usuario" >
					</div>
					
					<div class="form-group">
						<input type="text" name="contrasena" class="form-control" placeholder="Contraseña">
					</div>
					
					<input type="submit" name="ingresar" class="btn btn-dark btn-block" value="Acceder">
				</form>
			</div>
		</div>

<footer>
	
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>