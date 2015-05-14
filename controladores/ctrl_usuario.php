<?php
require "clases/usuario.php";
require "clases/template.php";
require_once "clases/Utils.php";
require_once "clases/auth.php";
require "vendor/autoload.php";
require "libs/facebook-php-sdk-v4-4.0-dev/autoload.php";//pal facebook

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

	function logout(){
		$usr= new Usuario();
		$usr->logout();
	}

	function getLogin(){
		session_start();

		// Initialize the Facebook SDK.
		FacebookSession::setDefaultApplication( '1606231786259862', '47dd4cb4941076f7c287c977d2b84d1b' );
		$helper = new FacebookRedirectLoginHelper('http://localhost/clase7/fb_login.php');

		$loginUrl = $helper->getLoginUrl();
		$mensaje="";
		if(isset($_POST["email"])){
			$usr= new Usuario();
			
			$email=$_POST["email"];
			$pass=sha1($_POST["password"]);

			if($usr->login($email,$pass)){
				header('Location: index.php');
				exit;
			}else{
				$mensaje="Error! No se pudo agregar el usuario";
			}

			
		}
		$tpl = new Template();
		$tpl->asignar('titulo',"Nuevo Usuario");
		$tpl->asignar('buscar',"");
		$tpl->asignar('mensaje',$mensaje);
		$tpl->asignar('proyecto',"Apps Web");
		$tpl->asignar('loginUrl',$loginUrl);
		$tpl->mostrar('usuarios_login',array());
	}

	function home(){
		$tpl= new Template();
		$mensaje="";
		$loginUrl="#";
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
		}elseif(isset($_POST["name"])){
			if($_POST["password"]===$_POST["password2"]){
				$usr=new Usuario();
				if(!$usr->existe($_POST["email"])){
					$usr->setName($_POST["name"]);
					$usr->setApellido($_POST["lastname"]);
					$usr->setEmail($_POST["email"]);
					$usr->setPass(sha1($_POST["password"]));
					if($usr->agregar()){
						if($usr->login($usr->getEmail(),$usr->getPassword())){
							header("location:dashboard.php");
							exit;
						}
					}
					else{
						$mensaje="No se pudo dar de alta el nuevo usuario. Intentalo mas tarde";
					}
				}
				else{
					$mensaje="El e-mail seleccionado ya se encuentra en uso.";
				}
			}
			else{
				$mensaje="La contraseña y la confirmación deben coincidir";
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

		    try {

			    // Retrieve User’s Profile Information
				$request = ( new FacebookRequest( $session, 'GET', '/me' ) )->
				execute();

				// Get response as an array
			    $user = $request->getGraphObject()->asArray();
			    
			    //mi codigo
			    $usr=new Usuario();
			    if($usr->existe($user["email"])){
			    	$usr->agregarId(1, $user["id"], $user["email"]);
			    }
			    else{}

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

	function dashboard($vista="", $titulo=""){
		if(Auth::logueado()){
			$tpl=new Template();
			$mensaje="";
			$vista="perfil_usr.tpl";
			$titulo="Perfil de Usuario";
			$usr=new Usuario();
			$usr=$usr->obtenerPorId(Session::get('id'));
			
			$email = $usr->getEmail();
			$default = "mm";
			$size = 225;
			$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;

			$usr->setAvatar($grav_url);
			
			$datos=array('usuario' => $usr,
						 'mensaje' => $mensaje,
						 'proyecto' => "Penca - Dashboard",
						 'titulo' =>$titulo,
						 'vista' => $vista);
			$tpl->mostrar('dashboard',$datos);
		}else{
			header("location:index.php");
			exit;
		}
	}

	function editar(){
		if(!Auth::logueado()){
			header('location:index.php');
			exit;
		}
		$id=Session::get('id');
		$usr=new Usuario();
		if(isset($_POST['editname'])){
			$usr->editar($id, 'Nombre', $_POST['editname']);
			echo $_POST['editname'];
		}elseif(isset($_POST['editlastname'])){
			$usr->editar($id, 'Apellido', $_POST['editlastname']);
			echo $_POST['editlastname'];
		}elseif(isset($_POST['oldpassword'])){
			$usr=$usr->obtenerPorId($id);
			$oldpass=sha1($_POST['oldpassword']);
			if($oldpass===$usr->getPassword()){
				if($_POST['password']==$_POST['repassword']){
					$usr->editar($id, 'password', sha1($_POST['password']));
				}
			}
		}
	}

	function borrarse(){
		if(Auth::logueado()){
			$usr=new Usuario();
			$usr=$usr->obtenerPorId(Session::get('id'));
			$usr->baja();
			Session::destroy();
		}
		header('location:index.php');
		exit;
	}
?>