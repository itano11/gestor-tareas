<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device width, initial scale-1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>CRUD | Gestor de Tareas | Manual de Usuario</title>

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
	
	<h1>Manual de Usuario</h1>
	<h2>CRUD - Gestor de Tareas</h2>
	<br>
	<h2>Introducción</h2>
	<br>
	<h3>Descripción del sistema y objetivos</h3>
	<br>
	<p>El sistema CRUD - Gestor de Tareas tiene como objetivo una correcta gestión de las tareas en desarrollo y por desarrollar por parte de la empresa. A través de esta plataforma, se persigue tener un control de las tareas por desarrollar de los equipos de trabajo y poder realizar el respectivo seguimiento de ellas.</p>
	<br>
	<br>
	<h3>Conocimientos previos de los usuarios</h3>
	<br>
	<p>Para usar el sistema se requiere que el usuario posea los conocimientos básicos de computación y habilidad mínima con el uso del mouse y teclado.</p>
	<br>
	<br>
	<h3>Capacidades mínimas del computador</h3>
	<br>
	<p>El computador debe contar con una capacidad de proceso equivalente a un procesador Intel Celeron 800 MHz, con una RAM mínima recomendada de 2 GB y con al menos 2 GB de espacio libre de almacenamiento.</p>
	<br>
	<br>
	<h3>Software adicional necesario</h3>
	<br>
	<p>El sistema de información es multiplataforma, el cual debe tener instalado un navegador (Google Chrome, Safari, Mozilla Firefox, etc.)</p>
	<br>
	<br>
	<h2>Uso del Sistema</h2>
	<br>
	<p>Al ingresar al sistema, se presenta el siguiente formulario login</p>
	<br>
	<img src="img/login.jpg" alt="Formulario Login">
	<br>
	<p>Para poder acceder al sistema, se deberá ingresar el nombre de uduario y respectiva contraseña. Al acceder al sistema la vista y recursos disponibles dependerán de los permisos dados a los usuarios.</p>
	<br>
	<br>
	<h2>Vista del Sistema para Usuarios Administradores</h2>
	<br>
	<p>La siguiente es la vista del usuario con permisos de administrador.</p>
	<br>
	<br>
	<img src="img/vistaFull.jpg" alt="Vista Full Usuario Administrador">
	<br>
	<br>
	<p>Los usuarios con permisos de administrador podrán crear nuevas tareas, editar las tareas ya creadas y también eliminarlas. También podrán ver el listado de tareas actuales. Además, tendrán acceso a la parate administrativa del sistema donde podrán realizar backup y/o restaurar el sistema en algún punto del tiempo.</p>
	<br>
	<br>
	<h2>Vista del Sistema para Usuarios Corrientes</h2>
	<br>
	<p>La siguiente es la vista del usuario con permisos de usuario corriente.</p>
	<br>
	<br>
	<img src="img/vistaCorriente.jpg" alt="Vista Usuario Corriente">
	<br>
	<br>
	<p>Los usuarios con permiso corriente podrán solamente ver el listado de tareas actuales.</p>
	<br>
	<br>
	<h2>Vista del Panel de Backups/Restauración</h2>
	<br>
	<img src="img/panelAdministracion.jpg" alt="Panel de Backups/Restauración">
	<br>
	<br>
	<p>Acá los usuarios podrán realizar backups del sistema o volver a un punto anterior en el tiempo a través de los backups realizados anteriormente.</p>
	<br>
	<br>
</div>

<footer>
	<a href="index.web.php">Volver al sistema</a>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>