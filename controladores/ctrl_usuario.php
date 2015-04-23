<?php
require "clases/clase_base.php";
require "clases/usuario.php";
require "clases/template.php";
require_once('clases/Utils.php');


	function getListado(){ 	 	
		$buscar="";
		$titulo="Listado";	
	 	if(isset($_POST["buscar"])){
	 		$titulo="Buscando..";
	 		$usuario=new Usuario();
	 		$buscar=$_POST["buscar"];
			$usuarios=$usuario->getBusqueda($buscar);	
			
	 	}else{
	 		$usuario=new Usuario();		
			$usuarios=$usuario->getListado();					
	 	}	
	 	$tpl = new Template();
	 	$datos = array('usuarios' => $usuarios,'buscar' => $buscar,'titulo' => $titulo);
		$tpl->asignar('proyecto',"Penca");
		$tpl->mostrar('usuarios_listado',$datos);
	}

	function home(){
		$titulo="Inicio";
		$tpl= new Template();
		$datos=array('titulo' => $titulo);
		$tpl->asignar('proyecto',"Penca");		
		$tpl->mostrar('home',$datos);
	}
?>