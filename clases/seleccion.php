<?php
/**
* 
*/
class Seleccion extends ClaseBase
{
	private $id="";
	private $nombre="";

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

    public function getName(){
    	return $this->nombre;
    }

    public function getIdSeleccion(){
    	return $this->id;
    }

    //SETTERS
    public function setNombre($nom){
    	$this->nombre=$nom;
    }

    public function setIdSeleccion($a){
    	$this->id=$a;
    }
?>