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
    	$this->Nombre=$na;
    }

    public function setApellido($na){
        $this->Apellido=$na;
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
        $nombre=$this->getName();                
        $apellido=$this->getApellido();
        $pass=$this->getPass();
        $email=$this->getEmail();                
        $stmt = $this->getDB()->prepare("INSERT INTO usuarios(nombre,apellido,email,pass) VALUES (?,?,?,?)" );
        $stmt->bind_param("ssss",$nombre,$password,$email);            
        $stmt->execute();        
        //$resultado =$stmt = $this->getDB()->query("SELECT * from  usuarios WHERE email='".$email."'");                    
        if($resultado->affected_rows>0){            
            return true;
        }                  
        return false;
    }

    //LOGIN 

    public function login($email,$pass){
        $resultado =$this->db->prepare("SELECT * FROM USUARIOS WHERE mail=? AND password=?");
        $resultado->bind_param("ss", $email, $pass);
        $resultado->execute();
        $resultado->bind_result($id, $nombre, $apellido, $mail, $password, $id_f, $id_t, $id_g, $avatar);

        while($resultado->fetch()){
            Session::init();
            Session::set('id',$id);
            echo "Entre aca";
            return true;
        }
        return false;
    }

    //LOGOUT 

    public function logout(){
        Session::init();
        Session::destroy();
        header('location: index.php');
        exit();
        
   }
}