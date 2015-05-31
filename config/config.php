<?php
	define("DB_HOST", "localhost");
	define("DB_USR", "root");
	define("DB_PASS", "root");
	define("DB_DB", "penca");
	define("KEY_API", "6913d6f4a6b31e5c07c1cea90562ced4"); 	//para api	
	define("BODY_API", "http://www.resultados-futbol.com/scripts/api/api.php?tz=America/Argentina/Buenos_Aires&format=json&key=");	//para toda peticion es igual
	$template_config = array(
        'template_dir' => 'vistas/',
        'compile_dir' => 'libs/smarty/templates_c/',
        'cache_dir' => 'libs/smarty/cache/',
        'config_dir' => 'libs/smarty/configs/',
        );

    $config = array(
		"base_url" => "",	//url a auth.php

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
				"keys"    => array ( "key" => "310962782-bjd9XiEB3qEIRhWe4CkQ9awHmDDjFmH2aLFpMIOZ ", "secret" => "o21uNPKOfpChm9OTOtwytWtEVykEqp96Mi5d0m98Gp6vt" )
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
?>