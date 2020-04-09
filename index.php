<?php

	/**
	 * @package		Quản lí nhiệm vụ Demo
	 * @author 		Phạm Dự
	 * @email 		Phamdund97@gmail.com
	 * @filesource 	src/Controllers/tasksController.php
	 * @Position    Internship in Arrow White Tech (AHT) Company
	 */

	require_once(  __DIR__ . '/vendor/autoload.php'); 

	//Define root url
	define('WEBROOT', str_replace("/index.php", "", $_SERVER["SCRIPT_NAME"]));
	define('ROOT', str_replace("/index.php", "", $_SERVER["SCRIPT_FILENAME"]));
	define('SRCROOT', str_replace("mvc", "mvc/src/", ROOT));
	
	use Test\Dispatcher;
	
	$dispatch = new Dispatcher();
	$dispatch->dispatch();
?>