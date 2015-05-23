<?php
	
	require_once "clases/clase_base.php";
	require_once "clases/pronostico.php";
	require_once "clases/seleccion.php";

	class Partido extends ClaseBase{

		private $id, $fecha;

		public function __construct($obj=NULL){
			if(isset($obj)){
	            foreach ($obj as $key => $value) {
	                $this->$key=$value;
	            }    
	        }
	        $tabla="partidos";
	        parent::__construct($tabla);
		}

		public function getFecha(){
			return $this->fecha;
		}

		public function getId(){
			return $this->id;
		}


		//Devuelve un array con los id's de las selecciones participantes en el partido
		public function participantes($p=0){
			$ret=$this->db->prepare("SELECT id_s FROM entre WHERE id_p=?");
			$ret->bind_param("i", $this->id);
			$ret->execute();
			$ret->bind_result($id);
			$res=array();
			while($ret->fetch()){
				$sel=new Seleccion();
				$sel=$sel->obtenerPorid($id);
				$res[]=$sel;
			}
			switch ($p) {
				case 1:
				case 2:
					return $res[$p-1];
					break;
				
				default:
					return $res;
					break;
			}
			
		}

		//Retorna un Listado de todas los pronosticos del partido instanciado
		public function pronosticos(){
			$pron=new Pronostico();
			$params = array('id_partido' => $this->id);
			return $pron->getPronosticos($params);
		}

		//Dado el id de una seleccion participante, devuelve el porcentaje de pronosticos a favor de la misma en el partido instanciado.
		public function porcentajeAprobacion($id_s){
			$pron=new Pronostico();
			$total=count($this->pronosticos());
			$params = array('id_partido' => $this->id,
							'id_seleccion' => $id_s);
			$prons=$pron->getPronosticos($params);
			$corresponde=count($prons);
			if($total>0)
				return ($corresponde/$total)*100;
			else
				return 0;
		}
	}
?>