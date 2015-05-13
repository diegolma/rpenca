<?php
require 'vendor/autoload.php';
require_once('clases/template.php');
require_once('clases/seleccion.php');
require_once('clases/jugador.php');
require_once('clases/jornada.php');
require_once('config/config.php');


function pedir($pedido){
	$client = new GuzzleHttp\Client();
	$res = $client->get($pedido, ['allow_redirects' => false]);
	return $res->json();	//esto es un array multidimensional
}

function infoPais($arrayMulti){	

    //para la data 

    $id = $arrayMulti["team"]["id"];    //id general
    $seleccion = new seleccion();
    $idCopa = $seleccion->getIdCopa($id);	//id en la copa
    $participaciones = $seleccion->getParticipaciones($id);	//participaciones en copa
    $copas = $seleccion->getCopas($id);	//cantidad de copas, CHILE 5pas
    $jugados = $seleccion->getPJ($id);	//partidos jugados en la copa
    $victorias = $seleccion->getPG($id);	//partidos ganados en la copa

    //para la tabla de info
    
    $pais = $arrayMulti["team"]["nameShow"];		//Uruguay
    $nombreCorto = $arrayMulti["team"]["short_name"];	//URU
    $dt = $arrayMulti["team"]["managerNow"];	
    $web = $arrayMulti["team"]["website"];
    $direccion = $arrayMulti["team"]["address"];
    $presidente = $arrayMulti["team"]["chairman"];
    $nombre = $arrayMulti["team"]["fullName"];
    $twitter = $arrayMulti["team"]["twitter"];
    $escudo = $arrayMulti["team"]["shield"];
    
    //para la plantilla    
    $pedido = BODY_API.KEY_API."&req=team_players&team=".$idCopa."&year=2015";
    $array = array();
    $array = plantilla(pedir($pedido));
    $tpl= new Template();
    $datos = array('pais' => $pais, 'nombreCorto' => $nombreCorto, 'dt' => $dt, 'web' => $web, 'direccion' => $direccion, 'presidente' => $presidente, 'nombre' => $nombre, 'twitter' => $twitter, 'escudo' => $escudo, 'jugadores' => $array, 'participaciones' => $participaciones, 'copas' => $copas, 'jugados' => $jugados, 'victorias' => $victorias);
    $tpl->asignar('proyecto',"Penca");
    $tpl->mostrar('info_pais',$datos);    
}

function infoGrupo($arrayMulti){ 
	
	$ret = array();    
	foreach ($arrayMulti["table"] as $key => $value) {
        
        $grupo = $value["group"];
        $id = $value["id"];
		$pais = $value["team"];	//nombre
		$puntos = $value["points"];
		$victorias = $value["wins"];
		$empates = $value["draws"];
		$derrotas = $value["losses"];
		$jugados = $victorias + $empates + $derrotas;
		$position = $value["pos"];	//posicion en la tabla
		$escudo = $value["shield"];
	
		$seleccion = new seleccion();
        $seleccion->setIdSeleccion($id);
        $seleccion->setNombre($pais);
        $seleccion->setPuntos($puntos);
        $seleccion->setVictorias($victorias);
        $seleccion->setEmpates($empates);
        $seleccion->setDerrotas($derrotas);
        $seleccion->setJugados($jugados);
		$seleccion->setPos($position);
		$seleccion->setEscudo($escudo);
        switch ($position) {
            case '1':
                $index = 0;
                break;
            case '2':
                $index = 1;
                break;
            case '3':
                $index = 2;
                break;
            case '4':
                $index = 3;
                break;            
        }                 
        $ret[$index] = $seleccion;
    }
    ksort($ret);    
    $pedido = BODY_API.KEY_API."&req=matchs&league=177&group=".$grupo;    
    $jornadas = array();
    $jornadas = jornada(pedir($pedido));    //esta es la jornada actual de ese grupo
    $jornadasB = array();
    $jornadasC = array();
    $actual = jornadaActual(pedir($pedido));
    $b = 0;
    $c = 0;
    switch ($actual) {
         case '1':
             $pedido = BODY_API.KEY_API."&req=matchs&league=177&group=".$grupo."&round=2";
             $jornadasB = jornada(pedir($pedido));
             $b = 2;
             $pedido = BODY_API.KEY_API."&req=matchs&league=177&group=".$grupo."&round=3";
             $jornadasC = jornada(pedir($pedido));
             $c = 3;
             break;
         case '2':
             $pedido = BODY_API.KEY_API."&req=matchs&league=177&group=".$grupo."&round=1";
             $jornadasB = jornada(pedir($pedido));
             $b = 1;
             $pedido = BODY_API.KEY_API."&req=matchs&league=177&group=".$grupo."&round=3";
             $jornadasC = jornada(pedir($pedido));
             $c = 3;
             break;
         case '3':
             $pedido = BODY_API.KEY_API."&req=matchs&league=177&group=".$grupo."&round=1";
             $jornadasB = jornada(pedir($pedido));
             $b = 1;
             $pedido = BODY_API.KEY_API."&req=matchs&league=177&group=".$grupo."&round=2";
             $jornadasC = jornada(pedir($pedido));
             $c = 2;
             break;             
     }  


    $tpl = new Template();
    $datos = array('selecciones' => $ret, 'num' => $grupo, 'jornadas' => $jornadas, 'jornadasB' => $jornadasB, 'jornadasC' => $jornadasC, 'actual' => $actual, 'b' => $b, 'c' => $c);
    $tpl->mostrar('info_grupo',$datos);
}

function plantilla($arrayMulti){
    $ret = array();
	foreach ($arrayMulti["player"] as $key => $value) {
        
        $nick = $value["nick"];
        $position = $value["role"]; //1-golero 2-defensa 3-mediocampo 4-delantero
        $goles = $value["goals"];
        $amarillas = $value["yellows"];
        $rojas = $value["reds"];
        $foto = $value["image"];         

        $es = "";
        switch ($position) {
            case '1':
                $es = "Golero";
                break;
            case '2':
                $es = "Defensa";
                break;
            case '3':
                $es = "Mediocampo";
                break;
            case '4':
                $es = "Atacante";
                break;            
        }

        if ($goles==""){
            $goles=0;
        }
        if ($amarillas=="") {
            $amarillas=0;
        }
        if ($rojas=="") {
            $rojas=0;
        }

        $jugador = new jugador();
        $jugador->setNick($nick);
        $jugador->setPos($es);
        $jugador->setGol($goles);
        $jugador->setAma($amarillas);
        $jugador->setRoj($rojas);
        $jugador->setFoto($foto);
        $ret[]=$jugador;
    }
    return $ret;
}

function jornada($arrayMulti){

    $ret = array();
    foreach ($arrayMulti["match"] as $key => $value) {
        $id = $value["id"];
        $local = $value["local"];
        $visitante = $value["visitor"];
        $escudoLocal = $value["local_shield"];
        $escudoVisitante = $value["visitor_shield"];
        $fecha = $value["date"];
        $hora = $value["hour"] + 5;
        $minutos = $value["minute"];
        $resultado = $value["result"];        

        $jornada = new jornada();
        $jornada->setId($id);
        $jornada->setLocal($local);
        $jornada->setVisitante($visitante);
        $jornada->setEscudoLocal($escudoLocal);
        $jornada->setEscudoVisitante($escudoVisitante);
        $jornada->setFecha($fecha);
        $jornada->setHora($hora);
        $jornada->setMinutos($minutos);
        $jornada->setResultado($resultado);
        $ret[]=$jornada;
    }

    return $ret;
}

function jornadaActual($arrayMulti){
    $ret = 1;
    foreach ($arrayMulti["match"] as $key => $value) {
        $ret = $value["round"];
    }    
    return $ret;
}

?>