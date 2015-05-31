<?php
require 'vendor/autoload.php';
require 'controladores/ctrl_api.php';
require_once('config/config.php');
//$clave="6913d6f4a6b31e5c07c1cea90562ced4";
$pedido= 'http://www.resultados-futbol.com/scripts/api/api.php?tz=America/Argentina/Buenos_Aires&format=json&key='.KEY_API.'&req=team&id=3768';
//$pedido= 'http://www.resultados-futbol.com/scripts/api/api.php?tz=America/Argentina/Buenos_Aires&format=json&key=6913d6f4a6b31e5c07c1cea90562ced4&req=teams&league=204&groups=all';
infoPais(pedir($pedido));





//print_r($res->json());
	
	/*
	info de un pais dado su id
		http://www.resultados-futbol.com/scripts/api/api.php?tz=America/Argentina/Buenos_Aires&format=json&key='.$clave.'&req=team&id=ID_DEL_PAIS
			
	info de la copa america
		http://www.resultados-futbol.com/scripts/api/api.php?tz=America/Argentina/Buenos_Aires&format=json&key='.$clave.'&req=tables&league=177&group=all&year=2015

	todos los paises de la copa
		http://www.resultados-futbol.com/scripts/api/api.php?tz=America/Argentina/Buenos_Aires&format=json&key='.$clave.'&req=teams&league=177&groups=all
	
	plantilla de un equipo dado su id
		http://www.resultados-futbol.com/scripts/api/api.php?tz=America/Argentina/Buenos_Aires&format=json&key='.$clave.'&req=team_players&team=141916&year=2015

		{id uruguay 3768}	141916 
		
	partidos de un grupo
		http://www.resultados-futbol.com/scripts/api/api.php?tz=America/Argentina/Buenos_Aires&format=json&key='.$clave.'&req=matchs&league=177&group=NUMERO_DEL_GRUPO
	
	clasificacion de un grupo 
		http://www.resultados-futbol.com/scripts/api/api.php?tz=America/Argentina/Buenos_Aires&format=json&key='.$clave.'&req=tables&league=177&group=NUMERO_DEL_GRUPO
	*/
?>