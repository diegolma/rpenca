<?php
	
	require_once "clases/clase_base.php";
	require_once "clases/seleccion.php";

	class Partido extends ClaseBase{

		private $id, $fecha;

		public function __construct($obj){
			if(isset($obj)){
	            foreach ($obj as $key => $value) {
	                $this->$key=$value;
	            }    
	        }
	        $tabla="peliculas";
	        parent::__construct($tabla);
		}

		public function getFecha(){
			return $this->fecha;
		}

		public function getId(){
			return $this->id;
		}
	}
?>