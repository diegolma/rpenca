<?php
	define("DB_HOST", "localhost");
	define("DB_USR", "root");
	define("DB_PASS", "root");
	define("DB_DB", "penca");
	//define(DB_TYPE, "mysql");

	$template_config = 
    array(
        'template_dir' => 'vistas/',
        'compile_dir' => 'libs/smarty/templates_c/',
        'cache_dir' => 'libs/smarty/cache/',
        'config_dir' => 'libs/smarty/configs/',
        );
?>