<?php
	/**
	* 
	*/
	class pronostico extends ClaseBase{
		
		private $fechaPartido;
		private $seleccionA;
		private $seleccionB;
		private $golesA;
		private $golesB;
		private $prediccionA;
		private $prediccionB;


		public function __construct($obj=NULL) {        
	        if(isset($obj)){
	            foreach ($obj as $key => $value) {
	                $this->$key=$value;
	            }    
	        }
	        $tabla="pronosticos";
	        parent::__construct($tabla);
	    }

	    public function getFecha(){
	    	return $this->fechaPartido;
	    }

	    public function selA(){
	    	return $this->seleccionA;
	    }

	    public function selB(){
	    	return $this->seleccionB;
	    }

	    public function golesA(){
	    	return $this->golesA;
	    }

	    public function golesB(){
	    	return $this->golesB;
	    }

	    public function pronA(){
	    	return $this->prediccionA;
	    }

	    public function pronB(){
	    	return $this->prediccionB;
	    }

   		public function setFecha($a){
	    	$this->fechaPartido=$a;
	    }

	    public function setSelA($a){
	    	$this->seleccionA=$a;
	    }

	    public function setSelB($a){
	    	$this->seleccionB=$a;
	    }

	    public function setGolesA($a){
	    	$this->golesA=$a;
	    }

	    public function setGolesB($a){
	    	$this->golesB=$a;
	    }

	    public function setPronA($a){
	    	$this->prediccionA=$a;
	    }

	    public function setPronB($a){
	    	$this->prediccionB=$a;
	    }

	    public function puntos(){
	    	$pA=$this->prediccionA;
	    	$pB=$this->prediccionB;
	    	$gA=$this->golesA;
	    	$gB=$this->golesB;
	    	$puntos=0;
	    	if($pA>$pB){#dijo que ganaba A
	    		if($gA>$gB){
	    			$puntos+=3;
	    		}
	    	}elseif($pA==$pB){#empate
	    		if($gA==$gB){
	    			$puntos+=3;
	    		}
	    	}else{#dijo que pierde A
	    		if($gA<$gB){
	    			$puntos+=3;
	    		}
	    	}
	    	if($gA==$pA && $gB==$pB){
	    		$puntos*=2;
	    	}
	    	return $puntos;
	    }
	}
?>