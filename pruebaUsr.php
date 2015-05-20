<?php
	echo "sha1('hola'): ".sha1("hola")."<br> ";
	 require_once "clases/partido.php";
	 $partido=new Partido();
	 $partido=$partido->obtenerPorId(1);
	 $variable=$partido->participantes();
	 foreach ($variable as $key => $value) {
	 	echo "Seleccion Participante: ".$value."<br>\t
	 		Aprobacion: ".$partido->porcentajeAprobacion($value)."%<br>";
	 }
?>