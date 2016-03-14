<?php 
	
	require_once "Config/autoload.php";
	config\autoload::run();
	$est = new Models\Estudiante();
	$est->set("id",1);
	$datos = $est->view();
	print $datos['nombre'];
	
?>
