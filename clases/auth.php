<?php
	require_once "clases/session.php";

	class Auth{
		public static function logueado(){
			Session::init();
			if(!isset($_SESSION['id'])){
				Session::destroy();
				return false;
			}
		return true;
		}
	}
?>