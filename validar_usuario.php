<?php
$error;
if(!empty($_POST['usuario']) && !empty($_POST['contrasena'])){
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];

	if($usuario == "admin" && $contrasena == "1234"){
		header("Location: index.web.php");
	}elseif($usuario == "user" && $contrasena == "4321"){
		header("Location: index.view.php");
	}else{
	header("Location: index.php");
	}
}
?>