<?php
require 'vendor/autoload.php';
require_once('clases/template.php');
require_once('clases/seleccion.php');
require_once('clases/jugador.php');
require_once('clases/jornada.php');
require_once('config/config.php');
require_once 'clases/pronostico.php';
require_once 'clases/partido.php';


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
    $datos = array('pais' => $pais, 'nombreCorto' => $nombreCorto, 'dt' => $dt, 'web' => $web, 'direccion' => $direccion, 'presidente' => $presidente, 'nombre' => $nombre, 'twitter' => $twitter, 'escudo' => $escudo, 'jugadores' => $array, 'participaciones' => $participaciones, 'copas' => $copas, 'jugados' => $jugados, 'victorias' => $victorias);
    return $datos;
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
		$position = $value["pos"]-1;	//posicion en la tabla
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
        $ret[$position] = $seleccion;
    }
    ksort($ret);    
    $jornadas = array();
    $pedido = BODY_API.KEY_API."&req=matchs&league=177&group=".$grupo."&round=1";        
    $jornadas = jornada(pedir($pedido));    //esta es la jornada actual de ese grupo
    $jornadasB = array();
    $pedido = BODY_API.KEY_API."&req=matchs&league=177&group=".$grupo."&round=2";    
    $jornadasB = jornada(pedir($pedido));    //esta es la jornada actual de ese grupo
    $jornadasC = array();    
    $pedido = BODY_API.KEY_API."&req=matchs&league=177&group=".$grupo."&round=3";    
    $jornadasC = jornada(pedir($pedido));    //esta es la jornada actual de ese grupo

    $datos = array('selecciones' => $ret, 
                    'num' => $grupo, 
                    'jornadas' => $jornadas, 
                    'jornadasB' => $jornadasB, 
                    'jornadasC' => $jornadasC);
    return $datos;
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
        $idLocal = $value["dteam1"];
        $idVisitante = $value["dteam2"];

        if($resultado=="x-x"){
            $resultado=0;
        }

        $jornada = new jornada();
        $jornada->setId($id);
        $jornada->setIdLocal($idLocal);
        $jornada->setIdVisitante($idVisitante);
        $jornada->setLocal($local);
        $jornada->setVisitante($visitante);
        $jornada->setEscudoLocal($escudoLocal);
        $jornada->setEscudoVisitante($escudoVisitante);
        $jornada->setFecha($fecha);
        $jornada->setHora($hora);
        $jornada->setMinutos($minutos);
        $jornada->setResultado($resultado);

        $pedido = BODY_API.KEY_API.'&req=teams_history&teams='.$idLocal.','.$idVisitante.'&id='.$id.'&year=2015';
        $jornada->setHistorico(historico(pedir($pedido)));

        $ret[]=$jornada;
    }

    return $ret;
}

function historico($arrayMulti){
    $ret = array();
    foreach ($arrayMulti["matches"] as $key => $value) {
        $golLocal = $value["local_goals"];
        $golVisitante = $value["visitor_goals"];
        $fecha = $value["shedule"];
        $local = $value["local"];
        $visitante = $value["visitor"];
        $competicion = $value["competition_name"];
        $anio = $value["year"];

        $jornada = new jornada();
        $jornada->setLocal($local);
        $jornada->setVisitante($visitante);
        $jornada->setFecha($fecha);
        $jornada->setCompetition($competicion);
        $jornada->setAnio($anio);
        $jornada->setGolL($golLocal);
        $jornada->setGolV($golVisitante);
        $ret[]=$jornada;
    }
    return $ret;
}

function partidosDeHoy(){
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $fecha=date('Y-m-d');
    $fecha='2015-06-12';
    $pedido= BODY_API.KEY_API.'&req=matchsday&competitions=177&date='.$fecha;
    //$pedido="http://www.resultados-futbol.com/scripts/api/api.php?tz=America/Argentina/Buenos_Aires&format=json&key=6913d6f4a6b31e5c07c1cea90562ced4&req=matchsday&competitions=177_all&date=2015-6-12";
    $ped=pedir($pedido);
    $ret=array();
    $s=new Seleccion();
    if($ped['matches'])
        foreach ($ped['matches'] as $key => $value) {
            $hora = $fecha.' '.$value['hour'].':'.$value['minute'].':00';
            $hora = strtotime($hora);
            if($hora-time()>900){#15 minutos
                $p=new Partido();
                $p->setId($value['id']);
                $p->setSeleccionA($s->getSeleccion($value['team1']));
                $p->setSeleccionB($s->getSeleccion($value['team2']));
                $ret[]=$p;
            }
        }
    return $ret;
}

function guardarP(){
    $pedido="http://www.resultados-futbol.com/scripts/api/api.php?tz=America/Argentina/Buenos_Aires&format=json&key=6913d6f4a6b31e5c07c1cea90562ced4&req=matchs&league=177";
    $ped=pedir($pedido);
    $p=new Partido();
    foreach($ped['match'] as $key => $v){
        $fecha=$v['date'];
        $aux=explode("/", $fecha);
        $fecha=implode("-", $aux);
        echo $v['id']." ".$fecha."<br>";
        $sql="INSERT INTO entre (id_p, id_s) VALUES (?, ?)";
        $ret=$p->getDb()->prepare($sql);
        $ret->bind_param("ii", $v['id'], $v['team1']);
        $ret->execute();
        $ret=$p->getDb()->prepare($sql);
        $ret->bind_param("ii", $v['id'], $v['team2']);
        $ret->execute();
    }
}

function livescore(){
    $pedido=BODY_API.KEY_API."&req=livescore&competitions=177";
    $ped=pedir($pedido);
    $s=new Seleccion();
    $ret=array();
    if($ped['matches']){
        foreach ($ped['matches'] as $key => $value) {
            $p=new Partido();
            $id=$value['id'];
            $p->setId($id);
            $p->setFecha(date('Y-m-d'));
            $p->setMinuto($value['live_minute']);
            $aux=explode("-",$value['result']);
            $p->setGa($aux[0]);
            $p->setGb($aux[1]);
            $p->setSeleccionA($s->obtenerPorId($value['team1']));
            $p->setSeleccionB($s->obtenerPorId($value['team2']));
            $ret[]=$p;
        }
    }
    return $ret;
}
?>