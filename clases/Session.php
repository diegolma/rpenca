<?php
	#session
	class Session{
		public static function init(){ //Crea una sesion
	        if (session_id() == '') {
	            session_start();
	        }
	    }

	    public static function set($key, $value){
	        $_SESSION[$key] = $value;
	    }

	    public static function get($key){
	        if (isset($_SESSION[$key])) {
	            return $_SESSION[$key];
	        }
	        else{
	            return "";
	        }
	    }
	    
	    public static function destroy(){//destruye una sesion
	        session_destroy();
	    }
	}
?>