<?php
require 'vendor/autoload.php';
require_once('config/config.php');
$otro= 'http://www.omdbapi.com/?s=blood&y=&r=json';
$pedido= 'http://www.resultados-futbol.com/scripts/api/api.php?tz=Europe/Madrid&format=json&req=matchsday&key=6913d6f4a6b31e5c07c1cea90562ced4&date=2014-5-18';
$client = new GuzzleHttp\Client();
$res = $client->get($pedido, ['allow_redirects' => false]);
if(!is_null(json_decode($res))){
	echo "Pibe piola";
}else{
	echo $res->getStatusCode();
	//200
	echo $res->getHeader('content-type');
	//application/json; charset=utf8
	echo $res->getBody();
	print_r($res->json());	
}
?>