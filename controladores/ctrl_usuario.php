<?php
require "clases/usuario.php";
require "clases/template.php";
require_once "clases/Utils.php";
require_once "clases/auth.php";
require "vendor/autoload.php";

use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;


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
			//Cosas para el inicio de sesion con fb :P
			session_start();
			FacebookSession::setDefaultApplication('755532661231775','b19d557f899b36d2721f81c70d0c0b05');
			$helper = new FacebookRedirectLoginHelper('http://localhost/penca/trunk/loginFB.php');
			$permissions = array(
				   'scope' => 'public_profile,email'
				);
			$loginUrl = $helper->getLoginUrl($permissions);

		}
		

		$datos=array('usuario' => $usuario,
					 'mensaje' => $mensaje,
					 'urlFB' => $loginUrl);
		$tpl->asignar('proyecto',"Penca");		
		$tpl->mostrar('home',$datos);
	}

	function loginFB($params){
		session_start();

		FacebookSession::setDefaultApplication( '755532661231775', 'b19d557f899b36d2721f81c70d0c0b05' );
		$helper = new FacebookRedirectLoginHelper('http://localhost/penca/trunk/loginFB.php');
		try {
		    if ( isset( $_SESSION['access_token'] ) ) {
		        // Check if an access token has already been set.
		        $session = new FacebookSession( $_SESSION['access_token'] );
		    } else {
		        // Get access token from the code parameter in the URL.
		        $session = $helper->getSessionFromRedirect();
		    }
		} catch( FacebookRequestException $ex ) {

		    // When Facebook returns an error.
		    print_r( $ex );
		} catch( \Exception $ex ) {

		    // When validation fails or other local issues.
		    print_r( $ex );
		}
		if ( isset( $session ) ) {

		    // Retrieve & store the access token in a session.
		    $_SESSION['access_token'] = $session->getToken();
		    // Logged in
		    echo 'Successfully logged in!';

		    try {

			    // Retrieve User’s Profile Information
				$request = ( new FacebookRequest( $session, 'GET', '/me' ) )->
				execute();

				// Get response as an array
			    $user = $request->getGraphObject()->asArray();

			    //echo "Name: " . $user_profile->getName();
			    print_r( $user );




			  } catch(FacebookRequestException $e) {

			    echo "Exception occured, code: " . $e->getCode();
			    echo " with message: " . $e->getMessage();

			  }   
		} else {

		    // Generate the login URL for Facebook authentication.
		    $permissions = array(
			   'scope' => 'public_profile,email'
			);

			$loginUrl = $helper->getLoginUrl($permissions);
		    echo '<a href="' . $loginUrl . '">Login</a>';
		}
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