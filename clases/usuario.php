<?php
require_once "clases/clase_base.php";

class Usuario extends ClaseBase{	

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

    public function getPassword(){
        return $this->password;
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
        $resultado=$this->db->prepare("INSERT INTO USUARIOS (Nombre, Apellido, mail, password) VALUES (?,?,?,?)");
        $resultado->bind_param("ssss",$this->Nombre, $this->Apellido, $this->mail, $this->password);
        $resultado->execute();
        if($resultado->affected_rows>0){
            return true;
        }else{
            return false;
        }
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
            return true;
        }
        return false;
    }

    //LOGOUT 

    public function logout(){
        Session::init();
        Session::destroy();
        header('location:index.php');
        exit();
        
    }

    public function existe($mail){
        $resultado=$this->db->prepare("SELECT id FROM USUARIOS WHERE mail=?");
        $resultado->bind_param("s",$mail);
        $resultado->execute();
        $resultado->bind_result($id);
        while($resultado->fetch()){
            return $id;
        }
        return false;
    }

    public function agregarId($tipo, $id, $mail){
        //Se supone que existe el usuario
        $user=$this->existe($mail);
        if($user){
            switch ($tipo){
                case 1://FB
                    $col="id_f";
                break;
                case 2://TW
                    $col="id_t";
                break;
                case 3://G+
                    $col="id_g";
                break;
            }
            $resultado=$this->db->prepare("UPDATE USUARIOS SET $col = ? WHERE id = ?");
            $resultado->bind_param("is", $id, $user);
            $resultado->execute();
            if($resultado->affected_rows>0){
                echo "OK";
            }
            else{
                echo "mal";
            }
        }
    }
}