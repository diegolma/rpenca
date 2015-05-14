<?php
	define("DB_HOST", "localhost");
	define("DB_USR", "root");
	define("DB_PASS", "");
	define("DB_DB", "penca");
	define("KEY_API", "6913d6f4a6b31e5c07c1cea90562ced4"); 	//para api	
	define("BODY_API", "http://www.resultados-futbol.com/scripts/api/api.php?tz=America/Argentina/Buenos_Aires&format=json&key=");	//para toda peticion es igual
	$template_config = 
    array(
        'template_dir' => 'vistas/',
        'compile_dir' => 'libs/smarty/templates_c/',
        'cache_dir' => 'libs/smarty/cache/',
        'config_dir' => 'libs/smarty/configs/',
        );
?>