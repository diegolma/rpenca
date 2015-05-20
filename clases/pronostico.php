<?php
	
	require_once "clases/clase_base.php";
	/**
	* 
	*/
	class pronostico extends claseBase
	{
		private $id_seleccion, $id_partido, $id_usuario, $goles;


		function __construct($obj=NULL){
			if(isset($obj)){
	            foreach ($obj as $key => $value) {
	                $this->$key=$value;
	            }    
	        }
	        $tabla="pronostica";
	        parent::__construct($tabla);
		}

		public function getIdSeleccion(){
			return $this->id_seleccion;
		}
		public function getIdUsuario(){
			return $this->id_usuario;
		}
		public function getIdPartido(){
			return $this->id_partido;
		}
		public function getGoles(){
			return $this->goles;
		}

		public function setIdSeleccion($a){
			$this->id_seleccion=$a;
		}
		public function setIdUsuario($a){
			$this->id_usuario=$a;
		}
		public function setIdPartido($a){
			$this->id_partido=$a;
		}
		public function setGoles($a){
			$this->goles=$a;
		}

		public function getPronosticos($params=array()){
			$sql="SELECT * FROM PRONOSTICA WHERE";
			foreach ($params as $key => $value) {
				$sql.=" ".$key." = ".$value." AND";
			}
			$aux=explode(" ", $sql);
			if(end($aux)=='WHERE' || end($aux)=='AND'){
				array_pop($aux);	
			}
			$sql=implode(" ", $aux);
			$ret=$this->db->query($sql) or die ("Fallo en la consulta");
			$res= array();
        	while ( $fila = $ret->fetch_object()){            
	            $objeto= new Pronostico($fila);
	            $res[]=$objeto;
	        }
			return $res;
		}
	}
?>