<?php
require_once("clase_base.php");
class jugador extends ClaseBase{	

	private $nick = "";
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

    public function setNick($ni){
    	$this->nick=$ni;
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

}


?>