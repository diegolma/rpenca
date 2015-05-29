<?php
require_once("clase_base.php");
require_once ("config/config.php");
class Jugador extends ClaseBase{	

    private $id=0;
	private $nick = "";
    private $apellido= "";
    private $edad="";
    private $pedido="";
    private $peso=0;
    private $altura=0;
    private $paisDJ="";
    private $equipo="";
    private $liga="";
    private $twitter="";
    private $cumple="";
    private $position = 0;
	private $gol = 0;
    private $ama = 0;
    private $roj = 0;
    private $foto = "";	

	public function __construct($obj=NULL) {        
    if(isset($obj)){
        foreach ($obj as $key => $value) {
            $this->$key=$value;
        }    
    }
    $tabla="jugador";
    parent::__construct($tabla);
	}

	public function getNick(){
        return $this->nick;
    }

    public function getApellido(){
        return $this->apellido;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function getCumple(){
        return $this->cumple;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function getTwitter(){
        return $this->twitter;
    }
    public function getPos(){
    	return $this->position;
    }

    public function getGol(){
    	return $this->gol;
    }

    public function getAma(){
    	return $this->ama;
    }

    public function getRoj(){
    	return $this->roj;
    }

    public function getFoto(){
    	return $this->foto;
    }
    public function getEquipo(){
        return $this->equipo;
    }
    public function setEquipo($e){
        $this->equipo=$e;
    }
    public function getPedido(){
        return $this->pedido;
    }
    public function setPedido($p){
        $this->pedido=$p;
    }
    public function getLiga(){
        return $this->liga;
    }
    public function getidJugador(){
        return $this->id;
    }
    public function setidJugador($i){
        $this->id=$i;
    }
    public function getPaisDJ(){
        return $this->paisDJ;
    }
    public function setPaisDJ($p){
        $this->paisDJ=$p;
    }
    public function setLiga($l){
        $this->liga=$l;
    }

    public function setNick($ni){
    	$this->nick=$ni;
    }
    public function setApellido($ape){
        $this->apellido=$ape;
    }
    public function setEdad($e){
         $this->edad=$e;
    }
    public function setCumple($c){
        $this->cumple=$c;
    }
    public function setPeso($p){
        $this->peso=$p;
    }
    public function setAltura($a){
        $this->altura=$a;
    }
    public function setTwitter($t){
        $this->twitter=$t;
    }

	public function setPos($po){
		$this->position=$po;
	}

	public function setGol($go){
		$this->gol=$go;
	}

	public function setAma($am){
		$this->ama=$am;
	}

	public function setRoj($ro){
		$this->roj=$ro;
	}

	public function setFoto($fo){
		$this->foto=$fo;
	}
    public function getCompletoBD($idJugador){
        $res=0;
        $sql="select completo from jugador where idJ=".$idJugador;                        
        $stmt = $this->getDB()->prepare($sql);        
        $stmt->execute();
        $resultado = $stmt->get_result();
        $res = $resultado->fetch_object();        
        return $res->completo;    
    }
    public function getPesoBD($idJugador){
        $res=0;
        $sql="select peso from jugador where idJ=".$idJugador;                        
        $stmt = $this->getDB()->prepare($sql);        
        $stmt->execute();
        $resultado = $stmt->get_result();
        $res = $resultado->fetch_object();        
        return $res->peso;    
    }
    public function getCumpleBD($idJugador){
        $res=0;
        $sql="select fNac from jugador where idJ=".$idJugador;                        
        $stmt = $this->getDB()->prepare($sql);        
        $stmt->execute();
        $resultado = $stmt->get_result();
        $res = $resultado->fetch_object();        
        return $res->fNac;    
    }
    public function getEdadBD($idJugador){
        $res=0;
        $sql="select edad from jugador where idJ=".$idJugador;                        
        $stmt = $this->getDB()->prepare($sql);        
        $stmt->execute();
        $resultado = $stmt->get_result();
        $res = $resultado->fetch_object();        
        return $res->edad;    
    }
    public function getAlturaBD($idJugador){
        $res=0;
        $sql="select altura from jugador where idJ=".$idJugador;                        
        $stmt = $this->getDB()->prepare($sql);        
        $stmt->execute();
        $resultado = $stmt->get_result();
        $res = $resultado->fetch_object();        
        return $res->altura;    
    }
    public function getPositionBD($idJugador){
        $res=0;
        $sql="select position from jugador where idJ=".$idJugador;                        
        $stmt = $this->getDB()->prepare($sql);        
        $stmt->execute();
        $resultado = $stmt->get_result();
        $res = $resultado->fetch_object();        
        return $res->position;    
    }
    public function getLigaPaisBD($idJugador){
        $res=0;
        $sql="select liga from jugador where idJ=".$idJugador;                        
        $stmt = $this->getDB()->prepare($sql);        
        $stmt->execute();
        $resultado = $stmt->get_result();
        $res = $resultado->fetch_object();        
        return $res->liga;    
    }
    public function getEquipoBD($idJugador){
        $res=0;
        $sql="select equipo from jugador where idJ=".$idJugador;                        
        $stmt = $this->getDB()->prepare($sql);        
        $stmt->execute();
        $resultado = $stmt->get_result();
        $res = $resultado->fetch_object();        
        return $res->equipo;    
    }
    public function getTwitterBD($idJugador){
        $res=0;
        $sql="select twitter from jugador where idJ=".$idJugador;                        
        $stmt = $this->getDB()->prepare($sql);        
        $stmt->execute();
        $resultado = $stmt->get_result();
        $res = $resultado->fetch_object();        
        return $res->twitter;    
    }
    public function getFotoBD($idJugador){
        $res=0;
        $sql="select avatar from jugador where idJ=".$idJugador;                        
        $stmt = $this->getDB()->prepare($sql);        
        $stmt->execute();
        $resultado = $stmt->get_result();
        $res = $resultado->fetch_object();        
        return $res->avatar;    
    }

}



?>