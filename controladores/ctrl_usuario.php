<?php
require_once "clases/usuario.php";
require_once "clases/template.php";
require_once "clases/Utils.php";
require_once "clases/auth.php";
<<<<<<< .mine
require_once "ctrl_api.php";
require_once "config/config.php";
require_once "vendor/autoload.php";
=======
require_once "clases/session.php";
require_once "controladores/ctrl_api.php";
require_once "vendor/autoload.php";
require_once "libs/facebook-php-sdk-v4-4.0-dev/autoload.php";//pal facebook
>>>>>>> .r41

<<<<<<< .mine
=======
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

>>>>>>> .r41
	function home(){
		$tpl= new Template();
		$mensaje="";
<<<<<<< .mine
		$loginUrl="#";		
		if (isset($_GET["grupo"])) {
			$pedido = BODY_API.KEY_API.'&req=tables&league=177&group='.$_GET["grupo"];
			infoGrupo(pedir($pedido));
			exit;
		}
		elseif(isset($_GET["pais"])){			
			$pedido = BODY_API.KEY_API.'&req=team&id='.$_GET["pais"];
			infoPais(pedir($pedido));
			exit;
		}
		elseif(isset($_GET["cerrar"])){//Cierro Sesion
=======
		$loginUrl="#";
		if(isset($_GET["cerrar"])){//Cierro Sesion
>>>>>>> .r41
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
					echo "Error: Usuario o contraseña incorrectos.";
					exit;
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
		$error=false;	
		$datos=array('usuario' => $usuario,
					 'mensaje' => $mensaje,
					 'urlFB' => $loginUrl,
					 'error' => $error);
		$tpl->asignar('proyecto',"Penca");		
		$tpl->mostrar('home',$datos);
	}

<<<<<<< .mine
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

=======
>>>>>>> .r41
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

	function olvidada(){
		$mensaje="";
		$usr="";
		$estilo="";
		$id="";
		$vista='reseteo_pass';
		if(isset($_POST['mail'])){
			$vista="alert";
			$mail=$_POST['mail'];
			$usr=new Usuario();
			if($usr->existe($mail)){#true si existe el usuario
				Utils::reseteo($mail);
				$mensaje="Te enviamos un mensaje con las instrucciones 
						para reestablecer tu contrase&ntilde;a a $mail.";
				$estilo="alert alert-success";
			}else{
				$mensaje="El e-mail ingresado no está registrado.";
				$estilo="alert alert-danger";
			}
		}elseif(isset($_GET['usr']) && isset($_GET['dt']) && isset($_GET['dte'])){
			#viene desde el link enviado
			#el mail codificado con sha1, dt fecha y hora de envio, dte = sha1(dte)->para corroborar
			$dt=$_GET['dt'];//ya es un int
			$dte=$_GET['dte'];
			$shamail=$_GET['usr'];
			if(sha1($dt)==$dte){//confirmacion de que no se haya alterado la uri.
				$date=time();//fecha unix actual
				if($date-$dt<=7200){//7200 son los segundos en 2hs 
					//se procede con el reseteo.
					$usr=new Usuario();
					if(!$usr->getUsrXshaMail($shamail)){
						$mensaje="La URL ingresada es inválida o ha expirado.";
					}
					else{
						$vista="passyrepass";
						$id=$usr->getId();
						$usr="";
					}
				}
			}
			else{
				
				$mensaje="La URL ingresada es inválida o ha expirado.";
			}
		}elseif(isset($_POST['pass']) && isset($_POST['repass']) && isset($_POST['id'])){
			if($_POST['pass']==$_POST['repass']){
				$usr=(new Usuario())->obtenerPorId($_POST['id']);
				$usr->editar($_POST['id'], 'password', sha1($_POST['pass']));
				$usr->login($usr->getEmail(), sha1($_POST['pass']));
				header('location:dashboard.php');
				exit;
			}
			else{
				$mensaje='La contraseña y la confirmación deben coincidir.<br>
						  <a href="" class="alert-link">Intenta de nuevo</a>';
				$vista="alert";
				$estilo="alert alert-danger";
			}
		}
		$loginUrl="";
		if($vista!="alert"){
			session_start();
			FacebookSession::setDefaultApplication('755532661231775','b19d557f899b36d2721f81c70d0c0b05');
			$helper = new FacebookRedirectLoginHelper('http://localhost/penca/trunk/loginFB.php');
			$permissions = array(
				   'scope' => 'public_profile,email'
				);
			$loginUrl = $helper->getLoginUrl($permissions);
		}

		$tpl=new Template();
		$datos=array(
			'usuario' => $usr,
			'id' => $id,
			'mensaje' => $mensaje,
			'estilo' => $estilo,
			'urlFB' => $loginUrl
		);
		$tpl->mostrar($vista,$datos);
	}

	function apostar(){
		var_dump($_POST);
		if(isset($_POST['partido']) && isset($_POST['sel1']) && isset($_POST['sel2']) && isset($_POST['pred1']) && isset($_POST['pred2'])){
			if(Auth::logueado()){
				$p=new Pronostico();
				$p->setIdPartido($_POST['partido']);
				$p->setIdSeleccion($_POST['sel1']);
				$p->setGoles($_POST['pred1']);
				$p2=new Pronostico();
				$p2->setIdPartido($_POST['partido']);
				$p2->setIdSeleccion($_POST['sel2']);
				$p2->setGoles($_POST['pred2']);
				$param = array($p, $p2);
				$usr = new Usuario();
				$id=Session::get('id');
				$usr=$usr->obtenerPorId($id);
				$usr->pronosticar($param);
			}
		}
	}
?>