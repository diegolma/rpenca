<?php	

	require_once "clases/usuario.php";
	require_once "clases/session.php";
	require_once "clases/auth.php";
	require_once "controladores/ctrl_api.php";


	function dashboard(){
		if(Auth::logueado()){
			$vista="principal";
			if(isset($_GET['v']))
				$vista=$_GET['v'];
			$tpl=new Template();
			$usr=new Usuario();
			$usr=$usr->obtenerPorId(Session::get('id'));
			$datos=array();
			switch ($vista) {
				case 'perfil_usr':
					$mensaje="";
					$email = $usr->getEmail();
					$default = "mm";
					$size = 225;
					$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
					$usr->setAvatar($grav_url);
					$datos=array('mensaje' => $mensaje);
					
					break;
				case 'info_grupo':
					if(isset($_GET['group']))
						$group=$_GET['group'];
					else
						$group=1;
					$pedido= BODY_API.KEY_API.'&req=tables&league=177&group='.$group;
					$datos=infoGrupo(pedir($pedido));
					break;
				case 'principal':
					$pdh=partidosDeHoy();
					$live=livescore();
					$datos['pDeHoy']=$pdh;
					$datos['livescore']=$live;
					break;
				case 'info_pais':
					if(isset($_GET['pais'])){
						$pedido = BODY_API.KEY_API.'&req=team&id='.$_GET["pais"];
						$datos=infoPais(pedir($pedido));
					}
					else{
						$vista='404';
					}
					break;
				case 'partidos':
					$datos['part']=(new Partido());
					break;
				default:
					$vista="404";
					break;
			}
			$vista.=".tpl";
			$tpl->asignar('usuario', $usr);
			$tpl->asignar('vista',$vista);
			$tpl->mostrar('dashboard',$datos);
		}else{
			header("location:index.php");
			exit;
		}
	}
?>
