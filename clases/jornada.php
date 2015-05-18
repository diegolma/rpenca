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
	private $idLocal="";
	private $idVisitante="";
	//para el historico agrego
	private $competition="";
	private $anio="";
	private $golL=0;
	private $golV=0;

	private $historico = array();

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

	public function getIdLocal(){
		return $this->idLocal;
	}

	public function setIdLocal($il){
		$this->idLocal=$il;
	}

	public function getIdVisitante(){
		return $this->idVisitante;
	}

	public function setIdVisitante($iv){
		$this->idVisitante=$iv;
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

	public function getCompetition(){
		return $this->competition;
	}

	public function setCompetition($competition){
		$this->competition = $competition;
	}

	public function getAnio(){
		return $this->anio;
	}

	public function setAnio($anio){
		$this->anio = $anio;
	}

	public function getGolL(){
		return $this->golL;
	}

	public function setGolL($golL){
		$this->golL = $golL;
	}

	public function getGolV(){
		return $this->golV;
	}

	public function setGolV($golV){
		$this->golV = $golV;
	}

	public function getHistorico(){
		return $this->historico;
	}

	public function setHistorico($ho){
		$this->historico=$ho;
	}
}
?>