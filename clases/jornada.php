<?php
require_once "clase_base.php";
class jornada extends ClaseBase
{
	private $id="";
	private $local="";    
	private $visitante="";
	private $escudoLocal="";
	private $escudoVisitante="";
	private $fecha="";
	private $hora="";
	private $minutos="";
	private $resultado="";

	function __construct($obj=NULL)
	{
		if(isset($obj)){
			foreach ($obj as $key => $value) {
				$this->$key=$value;
			}
		}
		 $tabla="jornada";
       	 parent::__construct($tabla);		
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getLocal(){
		return $this->local;
	}

	public function setLocal($local){
		$this->local = $local;
	}

	public function getVisitante(){
		return $this->visitante;
	}

	public function setVisitante($visitante){
		$this->visitante = $visitante;
	}

	public function getEscudoLocal(){
		return $this->escudoLocal;
	}

	public function setEscudoLocal($escudoLocal){
		$this->escudoLocal = $escudoLocal;
	}

	public function getEscudoVisitante(){
		return $this->escudoVisitante;
	}

	public function setEscudoVisitante($escudoVisitante){
		$this->escudoVisitante = $escudoVisitante;
	}

	public function getFecha(){
		return $this->fecha;
	}

	public function setFecha($fecha){
		$this->fecha = $fecha;
	}

	public function getHora(){
		return $this->hora;
	}

	public function setHora($hora){
		$this->hora = $hora;
	}

	public function getMinutos(){
		return $this->minutos;
	}

	public function setMinutos($minutos){
		$this->minutos = $minutos;
	}

	public function getResultado(){
		return $this->resultado;
	}

	public function setResultado($resultado){
		$this->resultado = $resultado;
	}

}
?>