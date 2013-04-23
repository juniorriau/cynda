<?php 

class Application {

	public static function _initAutoloader()
	{
		require_once 'system/loader/autoloader.php';
	}

	public static function database()
	{
		require_once 'system/database/pdo.php';
		return Database::getLink();
	}

	public static function helpers()
	{
		require_once 'system/helpers/require.php';
		return Helpers::start();
	}

	public static function router()
	{
		require_once 'system/router.php';
		return Router::route();
	}

	public static function start()
	{
		self::database();
		self::_initAutoloader();
		self::helpers();
		self::router();
	}



}