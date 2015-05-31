<?php
/*!
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2012, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------
$config = array(
		"base_url" => "http://localhost/penca/trunk/libs/hybridauth/hybridauth/",

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
				"keys"    => array ( "key" => "2OO24Ahq95SHiHjZlwnm3UpcO", "secret" => "Qk7QMQExa4mjohsDbxGiQwByHkTgD7Jb8wxQhNz26Itg31tT6w" )
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