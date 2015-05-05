<?php
require "clases/usuario.php";
require "clases/template.php";
require_once "clases/Utils.php";
require_once "clases/auth.php";


	/*function getListado(){ 	 	
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
	}*/

	function home(){
		$tpl= new Template();
		$mensaje="";
		if(isset($_GET["cerrar"])){//Cierro Sesion
			$usr=new Usuario();
			$usr->logout();
		}
		elseif(isset($_POST["user"])){//un usuario quiere iniciar sesion
			Session::init();
			if(!isset($_SESSION["id"])){
				$mail=$_POST["user"];
				$pass=sha1($_POST["password"]);
				$usr=new Usuario();
				if($usr->login($mail, $pass)){//se pudo loguear correctamente
					header("location:dashboard.php");
					exit;
				}else{
					$mensaje="Error: Usuario o contraseña incorrectos.";
				}
			}
		}

		if(Auth::logueado()){
			$usuario=new Usuario();
			$id=Session::get('id');
			$usuario=$usuario->obtenerPorId($id);
		}
		else{
			$usuario="";
		}
		

		$datos=array('usuario' => $usuario,
					 'mensaje' => $mensaje);
		$tpl->asignar('proyecto',"Penca");		
		$tpl->mostrar('home',$datos);
	}

	function dashboard(){
		if(Auth::logueado()){
			$tpl=new Template();
			$mensaje="";
			$usr=new Usuario();
			$usr=$usr->obtenerPorId(Session::get('id'));
			$datos=array('usuario' => $usr,
						 'mensaje' => $mensaje,
						 'proyecto' => "Penca - Dashboard");
			$tpl->mostrar('dashboard',$datos);
		}else{
			header("location:index.php");
			exit;
		}

	}
?>