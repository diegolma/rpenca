<?php
require_once "clase_base.php";
class seleccion extends ClaseBase
{
	private $id="";
	private $nombre="";
    private $idGeneral="";
    private $idCopa="";
	private $escudo="";
	private $victorias=0;
	private $derrotas=0;
	private $empates=0;
	private $jugados=0;
	private $puntos=0;
    private $pos=4;

	function __construct($obj=NULL)
	{
		if(isset($obj)){
			foreach ($obj as $key => $value) {
				$this->$key=$value;
			}
		}
		 $tabla="seleccion";
       	 parent::__construct($tabla);		
	}


	//GETTERS
    public function getPos(){
        return $this->pos;
    }

    public function getName(){
    	return $this->nombre;
    }

    public function getIdSeleccion(){
    	return $this->id;
    }
	
	public function getEscudo(){
		return $this->escudo;
	}
	
	public function getVictorias(){
		return $this->victorias;
	}
	
	public function getDerrotas(){
		return $this->derrotas;
	}
	
	public function getEmpates(){
		return $this->empates;
	}
	
	public function getJugados(){
		return $this->jugados;
	}
	
	public function getPuntos(){
		return $this->puntos;
	}

    //SETTERS

    public function setPos($po){
        $this->pos=$po;
    }
	
	public function setEscudo($esc){
		$this->escudo=$esc;
	}
	
	public function setVictorias($vic){
		$this->victorias=$vic;
	}
	
	public function setDerrotas($der){
		$this->derrotas=$der;
	}
	
	public function setEmpates($emp){
		$this->empates=$emp;
	}
	
	public function setJugados($jug){
		$this->jugados=$jug;
	}
	
	public function setPuntos($pun){
		$this->puntos=$pun;
	}
	
    public function setNombre($nom){
    	$this->nombre=$nom;
    }

    public function setIdSeleccion($a){
    	$this->id=$a;
    }

    public function getIdCopa($idGeneral){        
        $res=0;
        $sql="select id_copa from selecciones where id_general=".$idGeneral;                        
        $stmt = $this->getDB()->prepare($sql);        
        $stmt->execute();
        $resultado = $stmt->get_result();
        $res = $resultado->fetch_object();        
        return $res->id_copa;
    }

    public function getCopas($idGeneral){
        $res=0;
        $sql="select copasG from selecciones where id_general=".$idGeneral;                        
        $stmt = $this->getDB()->prepare($sql);        
        $stmt->execute();
        $resultado = $stmt->get_result();
        $res = $resultado->fetch_object();        
        return $res->copasG;    
    }

    public function getParticipaciones($idGeneral){
        $res=0;
        $sql="select participaciones from selecciones where id_general=".$idGeneral;                        
        $stmt = $this->getDB()->prepare($sql);        
        $stmt->execute();
        $resultado = $stmt->get_result();
        $res = $resultado->fetch_object();        
        return $res->participaciones;    
    }

    public function getPJ($idGeneral){
        $res=0;
        $sql="select PJ from selecciones where id_general=".$idGeneral;                        
        $stmt = $this->getDB()->prepare($sql);        
        $stmt->execute();
        $resultado = $stmt->get_result();
        $res = $resultado->fetch_object();        
        return $res->PJ;    
    }

    public function getPG($idGeneral){
        $res=0;
        $sql="select PG from selecciones where id_general=".$idGeneral;                        
        $stmt = $this->getDB()->prepare($sql);        
        $stmt->execute();
        $resultado = $stmt->get_result();
        $res = $resultado->fetch_object();        
        return $res->PG;    
    }
}
?>