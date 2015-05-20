<?php
require_once "clases/clase_base.php";
require_once "clases/pronostico_usr.php";

class Usuario extends ClaseBase{	

	private $id;
    private $Nombre="";
    private $Apellido="";
	public $mail="";
    public $id_f = "";
    public $id_t = "";
    public $id_g = "";
	private $password="";
    private $avatar=NULL;

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

    public function getAvatar(){
        return $this->avatar;
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

    public function setAvatar($avat){
        $this->avatar=$avat;
    }
    //AGREGAR 

    public function agregar(){             
        $resultado=$this->getDB()->prepare("INSERT INTO USUARIOS (Nombre, Apellido, mail, password) VALUES (?,?,?,?)");
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
        $resultado =$this->getDB()->prepare("SELECT * FROM USUARIOS WHERE mail=? AND password=?");
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
        $resultado=$this->getDB()->prepare("SELECT id FROM USUARIOS WHERE mail=?");
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
            $resultado=$this->getDB()->prepare("UPDATE USUARIOS SET $col = ? WHERE id = ?");
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

    public function pronosticos(){
        $resultados = array();
        $sql="SELECT fecha, selA.nombre, eA.goles, eB.goles, selB.nombre, proA.goles, proB.goles
              FROM ((((((pronostica as proA JOIN pronostica as proB ON proA.id_partido=proB.id_partido AND proA.id_usuario=proB.id_usuario AND proA.id_seleccion>proB.id_seleccion) JOIN selecciones as selA ON selA.id=proA.id_seleccion) JOIN selecciones as selB ON selB.id=proB.id_seleccion) JOIN entre as eA ON eA.id_p=proA.id_partido AND eA.id_s=proA.id_seleccion) JOIN entre as eB ON eB.id_p=proA.id_partido AND eB.id_s=proB.id_seleccion) JOIN partidos as P ON P.id=proA.id_partido)
              WHERE proA.id_usuario=?";
        $resultado=$this->db->prepare($sql);
        $resultado->bind_param("i", $this->id);
        $resultado->execute();
        $resultado->bind_result($fecha, $nomA, $golA, $golB, $nomB, $proA, $proB);
        while($resultado->fetch()){
            $pron=new Pronostico();
            $pron->setFecha($fecha);
            $pron->setSelA($nomA);
            $pron->setSelB($nomB);
            $pron->setGolesA($golA);
            $pron->setGolesB($golB);
            $pron->setPronA($proA);
            $pron->setPronB($proB);
            $resultados[]=$pron;
        }
        return $resultados;
    }

    public function editar($id, $key, $valor){
        $sql="UPDATE USUARIOS SET $key=? WHERE id=?";
        $resultado=$this->db->prepare($sql);
        $resultado->bind_param("si",$valor, $id);
        $resultado->execute();
        if($resultado->affected_rows>0){
            return true;
        }
        else{
            return false;
        }   
    }

    public function baja(){
        $id=$this->id;
        $sql="DELETE FROM USUARIOS WHERE id=?";
        $sql2="DELETE FROM PRONOSTICA WHERE id_usuario=?";
        
        $res=$this->db->prepare($sql2);
        $res->bind_param("i",$id);
        $res->execute();

        $res=$this->db->prepare($sql);
        $res->bind_param("i",$id);
        $res->execute();

        if($res->affected_rows>0){
            return true;
        }else{
            return false;
        }
    }
    //devuelve estadisticas del usuario instanciado, se puede requerir:
    //pronosticos, aciertos, aciertos exactos o puntos generados.
    public function estadisticas($requiere='pronosticos'){
        $pron=$this->pronosticos();
        $pronosticos=count($pron);
        $aciertos=0;
        $exactos=0;
        $puntos=0;
        foreach ($pron as $key => $pronos) {
            if($pronos->puntos()>=3){
                $aciertos++;
                if($pronos->puntos()>=6){
                    $exactos++;
                }
            }
            $puntos+=$pronos->puntos();
        }
        switch ($requiere) {
            case 'pronosticos':
                return $pronosticos;
                break;
            case 'aciertos':
                return $aciertos;
                break;
            case 'exactos':
                return $exactos;
                break;
            case 'puntos':
                return $puntos;
                break;
            
            default:
                return "No definido";
                break;
        }
    }

    public function getUsrXshaMail($shamail){
        $res=$this->db->prepare("SELECT * FROM USUARIOS");
        $res->execute();
        $res->bind_result($id, $nombre, $apellido, $mail, $password, $id_f, $id_t, $id_g, $avatar);
        while($res->fetch()){
            if($shamail==sha1($mail)){
                $this->id=$id;
                $this->nombre=$nombre;
                $this->apellido=$apellido;
                $this->mail=$mail;
                return true;
            }
        }
        return false;
    }
}