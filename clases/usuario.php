<?php
class usuario extends ClaseBase{	

	public $name="";
	public $email="";
	private $pass="";

	public function __construct($obj=NULL) {        
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="usuarios";
        parent::__construct($tabla);

    }

    //GETTERS

    public function getName(){
    	return $this->name;
    }

    public function getEmail(){
    	return $this->email;
    }

    //SETTERS

    public function setName($na){
    	$this->name=$na;
    }

    public function setEmail($em){
    	$this->email=$em;
    }

    public function setPass($pa){
    	$this->pass=$pa;
    }

    //AGREGAR 

    public function agregar(){            
    	$res=true;	//incializo 
        $nombre=$this->getName();                
        $aux=$this->getPass();
        $password = sha1($aux);
        $email=$this->getEmail();                
        $stmt = $this->getDB()->prepare("INSERT INTO usuarios(nombre,pass,email) VALUES (?,?,?)" );
        $stmt->bind_param("sss",$nombre,$password,$email);            
        $stmt->execute();        
        $resultado =$stmt = $this->getDB()->query("SELECT * from  usuarios WHERE email='".$email."'");                    
        if($resultado->num_rows<1){            
            $res=false;
        }                  
        return $res;
    }

    //LOGIN 

    public function login($email,$pass){
        $resultado =$stmt = $this->getDB()->query("SELECT * from  usuarios WHERE email='".$email."' AND password='".$pass."'" );                    
        if($resultado->num_rows<1){
            return false;
        }    
        $res=$resultado->fetch_object();                        
        Session::init();
        Session::set('usuario_logueado', true);        
        Session::set('usuario_nombre', $res->nombre);
        Session::set('usuario_email', $res->email);
        return true;
    }

    //LOGOUT 

    public function logout(){
        Session::init();
        Session::destroy();
        header('location: login.php');
        exit();
        
   }
}