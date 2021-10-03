<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device width, initial scale-1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>CRUD | Gestor de Tareas | Manual del Sistema</title>

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
	
	<h1>Manual del Sistema</h1>
	<h2>CRUD - Gestor de Tareas</h2>
	<br>
	<h3>Requerimientos generales del sistema de información</h3>
	<br>
	<p>CPU:</p>
	<p>Intel Celeron 800 MHz</p>
	<br>
	<p>RAM:</p>
	<p>2 GB recomendado</p>
	<br>
	<p>Espacio disponible en disco:</p>
	<br>
	<p>1 GB</p>
	<br>
	<p>Sistema Operativo:</p>
	<p>Multiplataforma</p>
	<br>
	<br>
	<h3>Login</h3>
	<br>
	<p>El login del sistema solicita un nombre de usuario y una contraseña. En caso de ser válidas, el sistema permitirá el acceso a la plataforma mediante dos tipos de usuarios y sus respectivos permisos.</p>
	<br>
	<br>
	<h3>Permisos de Usuarios</h3>
	<br>
	<h4>Usuario administrador</h4>
	<br>
	<p>El usuario con permisos de administrador podrá crear tareas, las podrá editar y las podrá eliminar. También podrá visualizar el listado de tareas actuales del sistema. Además, tendrá acceso a la administración del sistema que permite realizar backups (respaldos) y recuperar backups realizados en el tiempo</p>
	<br>
	<h4>Usuario corriente</h4>
	<br>
	<p>El usuario corriente posee sólo permiso para visualizar el listado de tareas actuales del sistema.</p>
	<br>
	<br>
	<h3>Página de Inicio Administración</h3>
	<br>
	<p>La página de inicio del sistema para los usuarios con permisos de administrador, visualizarán un formulario para poder crear nuevas tareas, también visualizará las tareas actuales. Podrá tener acceso al apartado de administración de los backups y restauración.</p>
	<br>
	<br>
	<h3>Página de Inicio Corriente</h3>
	<p>La página de inicio del sistema para los usuarios corrientes, visualizarán las tareas actuales.</p>
	<br>
	<br>
	<h3>Página Backups y Restauración</h3>
	<br>
	<p>Esta página permite realizar un backup al sistema y su base de datos en el momento. Además, permite mediante un menú desplegable poder elegir un punto de restauración del sistema en el tiempo.</p>

</div>

<footer>
	<a href="index.web.php">Volver al sistema</a>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>