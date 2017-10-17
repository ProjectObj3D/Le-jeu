<?php

define('MYSQL_HOST', 'localhost');
define('MYSQL_NAME', 'cystopia');
define('MYSQL_USER', 'root');
define('MYSQL_PASS', 'root');


spl_autoload_register(function($class){

	$folder = 'classes';
	if (strpos($class, 'Model')) {
		$folder = 'models';
	}
	elseif (strpos($class, 'Controller')) {
		$folder = 'controllers';
	}

	$file = '.'.DIRECTORY_SEPARATOR.$folder.DIRECTORY_SEPARATOR.$class.'.php';
	if (file_exists($file)) 
	{
		require $file;
	}

});


if (!isset($_SESSION)) session_start(); 

if (isset($_GET['logout'])){
	 unset($_SESSION['CY']);
	 unset($_SESSION['Error']);
}
