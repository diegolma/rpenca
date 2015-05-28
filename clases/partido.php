<?php
	
	require_once "clases/clase_base.php";
	require_once "clases/pronostico.php";
	require_once "clases/seleccion.php";

	class Partido extends ClaseBase{

		private $id, $fecha, $seleccionA, $seleccionB;
		private $minuto;
		private $ga, $gb;

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
		public function getMinuto(){
			return $this->minuto;
		}
		public function getGa(){
			return $this->ga;
		}
		public function getGb(){
			return $this->gb;
		}

		public function getSeleccionA(){
			return $this->seleccionA;
		}

		public function getSeleccionB(){
			return $this->seleccionB;
		}

		public function setSeleccionA($a){
			$this->seleccionA=$a;
		}

		public function setSeleccionB($a){
			$this->seleccionB=$a;
		}

		public function setId($a){
			$this->id=$a;
		}

		public function setFecha($a){
			$this->fecha=$a;
		}
		public function setMinuto($a){
			$this->minuto=$a;
		}
		public function setGa($a){
			$this->ga=$a;
		}
		public function setGb($a){
			$this->gb=$a;
		}


		//Devuelve un array con las selecciones participantes en el partido
		public function participantes(){
			$ret=$this->db->prepare("SELECT id_s FROM entre WHERE id_p=?");
			$ret->bind_param("i", $this->id);
			$ret->execute();
			$ret->bind_result($id);
			$res=array();
			$sel=new Seleccion();
			while($ret->fetch()){
				$sel=$sel->obtenerPorId($id);
				$res[]=$sel;
			}
			return $res;
			
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

		//Devuelve un listado con todos los partidos finalizados
		//(tienen un resultado cargado en goles/partido)
		public function finalizados(){
			$sql="SELECT * FROM PARTIDOS WHERE id IN (SELECT id_partido FROM GOLESPARTIDO)";
			$ret=$this->db->prepare($sql);
			$ret->execute();
			$ret->bind_result($id, $f);
			$res=array();
			$s=new Seleccion();
			while($ret->fetch()){
				$p=new Partido();
				$p->id=$id;
				$p->fecha=$f;
				$res[]=$p;
			}
			foreach ($res as $key => $p) {
				$aux = $p->participantes();
				$p->setSeleccionA($aux[0]);
				$p->setSeleccionB($aux[1]);
			}
			return $res;
		}
		public function goles($sel){
			$ret=$this->db->prepare('SELECT goles FROM GOLESPARTIDO WHERE id_partido=? AND id_seleccion=?');
			$ret->bind_param("ii", $this->id, $sel);
			$ret->execute();
			$ret->bind_result($g);
			while($ret->fetch()){
				return $g;
			}
		}

		public function yaPronosticados($usu){
			$ret=$this->db->prepare("SELECT * FROM PARTIDOS WHERE id IN (SELECT id_partido FROM PRONOSTICA WHERE id_usuario=?) AND 
									 id NOT IN (SELECT id_partido FROM GOLESPARTIDO)");
			$ret->bind_param("i", $usu);
			$ret->execute();
			$ret->bind_result($id, $f);
			$res=array();
			$s=new Seleccion();
			while($ret->fetch()){
				$p=new Partido();
				$p->id=$id;
				$p->fecha=$f;
				$res[]=$p;
			}
			foreach ($res as $key => $p) {
				$aux = $p->participantes();
				$p->setSeleccionA($aux[0]);
				$p->setSeleccionB($aux[1]);
			}
			return $res;
		}

		public function sinPronostico($usu){
			$sql="SELECT * FROM PARTIDOS WHERE id NOT IN (SELECT id_partido FROM PRONOSTICA WHERE id_usuario=?) AND id NOT IN (SELECT id_partido FROM GOLESPARTIDO)";
			$ret=$this->db->prepare($sql);
			$ret->bind_param("i", $usu);
			$ret->execute();
			$ret->bind_result($id, $f);
			$res=array();
			$s=new Seleccion();
			while($ret->fetch()){
				$p=new Partido();
				$p->id=$id;
				$p->fecha=$f;
				$res[]=$p;
			}
			foreach ($res as $key => $p) {
				$aux = $p->participantes();
				$p->setSeleccionA($aux[0]);
				$p->setSeleccionB($aux[1]);
			}
			return $res;
		}
	}
?>