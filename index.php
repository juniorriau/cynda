<?php 
	session_start();
	error_reporting(E_ALL);

	define('BASE', realpath('.' . DIRECTORY_SEPARATOR));
	define('APPLICATION_PATH', BASE . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR);
	define('SYSTEM_PATH', BASE . DIRECTORY_SEPARATOR . 'system' . DIRECTORY_SEPARATOR);

	// define('CONTROLLER_PATH', BASE . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR);

	set_include_path(/* Set default require path */BASE . DIRECTORY_SEPARATOR);

	require_once 'system/application.php';

	Application::start();
?>