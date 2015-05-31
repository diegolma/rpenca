<?php
require_once "clases/usuario.php";
require_once "clases/Session.php";
require_once "clases/template.php";
include('libs/hybridauth/hybridauth/Hybrid/Auth.php');
if(isset($_GET['provider']))
{
$provider = $_GET['provider'];
$config = array(
        "base_url" => "http://localhost/penca/trunk/libs/hybridauth/hybridauth/",

        "providers" => array (
            "Google" => array (
                "enabled" => true,
                "keys"    => array ( "id" => "381541298671-pc8u9n4037ddj3469rf6jkuv8b30fl15.apps.googleusercontent.com", "secret" => "aAvx9lhm4qUcYQ7NJh_JYJbT" ),
            ),

            "Facebook" => array (
                "enabled" => true,
                "keys"    => array ( "id" => "755532661231775", "secret" => "b19d557f899b36d2721f81c70d0c0b05" ),
                "scope" => "public_profile,email"
            ),

            "Twitter" => array (
                "enabled" => true,
                "keys"    => array ( "key" => "2OO24Ahq95SHiHjZlwnm3UpcO", "secret" => "Qk7QMQExa4mjohsDbxGiQwByHkTgD7Jb8wxQhNz26Itg31tT6w" )
            ),
        ),

        // If you want to enable logging, set 'debug_mode' to true.
        // You can also set it to
        // - "error" To log only error messages. Useful in production
        // - "info" To log info and error messages (ignore debug messages)
        "debug_mode" => false,

        // Path to file writable by the web server. Required if 'debug_mode' is not false
        "debug_file" => "debug.log",
);
try{

    $hybridauth = new Hybrid_Auth( $config );

    $authProvider = $hybridauth->authenticate($provider);

    $user_profile = $authProvider->getUserProfile();

    $tipo = "";
    switch ($provider) {
        case 'Google':
                $tipo = "id_g";
        break;
        case 'Facebook':
                $tipo = "id_f";
        break;
        case 'Twitter':
                $tipo = "id_t";
        break;                  
    }

	if($user_profile && isset($user_profile->identifier))
    {
        $usr=new Usuario();                
        $idt = $usr->asociado($tipo,$user_profile->identifier);
        $tpl= new Template();
        $mensaje="";
        $loginUrl="#";
        if($idt == false){  
            $error = true;   
            $datos = array('mensaje' => $mensaje,
                     'urlFB' => $loginUrl,
                     'error' => $error);
            $tpl->asignar('proyecto',"Penca");      
            $tpl->mostrar('home',$datos);            
        }
        else{   //si su id está asociado a un email registrado entonces inicia sesión
            Session::init();
            Session::set('id',$idt);        
            header("location:dashboard.php");   
            exit;           
        }
    }                    
    }  
	catch( Exception $e )
	{ 
	
	 switch( $e->getCode() )
		 {
        case 0 : echo "Unspecified error."; break;
        case 1 : echo "Hybridauth configuration error."; break;
        case 2 : echo "Provider not properly configured."; break;
        case 3 : echo "Unknown or disabled provider."; break;
        case 4 : echo "Missing provider application credentials."; break;
        case 5 : echo "Authentication failed. "
                         . "The user has canceled the authentication or the provider refused the connection.";
                 break;
        case 6 : echo "User profile request failed. Most likely the user is not connected "
                         . "to the provider and he should to authenticate again.";                 
                 break;
        case 7 : echo "User not connected to the provider.";                 
                 break;
        case 8 : echo "Provider does not support this feature."; break;
    }

    // well, basically your should not display this to the end user, just give him a hint and move on..
    echo "<br /><br /><b>Original error message:</b> " . $e->getMessage();

    echo "<hr /><h3>Trace</h3> <pre>" . $e->getTraceAsString() . "</pre>";

	}

}
?>