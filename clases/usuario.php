<?php
require_once "clases/clase_base.php";

class usuario extends ClaseBase{	

	private $id;
    private $Nombre="";
    private $Apellido="";
	public $mail="";
    public $id_f = "";
    public $id_t = "";
    public $id_g = "";
	private $password="";

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

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->Nombre;
    }
     public function getApellido(){
    	return $this->Apellido;
    }

    public function getEmail(){
    	return $this->mail;
    }

    public function getidFB(){
        return $this->id_f;
    }

    public function getidTW(){
        return $this->id_t;    
    }

    public function getidG(){
        return $this->id_g;        
    }

    //SETTERS

    public function setName($na){
    	$this->nombre=$na;
    }

    public function setEmail($em){
    	$this->mail=$em;
    }

    public function setPass($pa){
    	$this->password=$pa;
    }

    public function setidFB($fb){
        $this->id_f=$fb;
    }

    public function setidTW($tw){
        $this->id_t=$tw;
    }

    public function setidG($g){
        $this->id_g=$g;
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
        Session::set('usuario_nombre', $res->name);
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