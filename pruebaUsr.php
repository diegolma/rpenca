<?php
	require_once "clases/usuario.php";

	$usr=new Usuario();
	$usr=$usr->obtenerPorId(1);

	echo 'Nombre: "'.$usr->getName().'"<br>ID: "'.$usr->getId().'"';
?>