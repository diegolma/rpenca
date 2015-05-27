<?php
	require "clases/usuario.php";
	$usr=new Usuario();
	$mails = array();#aca se van a guardar todos los mails
	$ret=$usr->getDb()->prepare("SELECT mail FROM usuarios");
	$ret->execute();
	$ret->bind_result($mail);#nombrar como me voy a referir a cada columna.
	while($ret->fetch()){#mientras que haya resultados
		$mails[]=$mail;
		echo $mail."<br>";
	}



?>