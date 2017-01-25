<?php
	
	/*
		ROOTcontiene la ruta raiz de nuestro proyecto
		se utilizara paragenerar enlaces y llamar archivos
	*/
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)) . DS);
	define('URL', "http://localhost/projects/Sistema_DS_Pasantia");

	require_once "Config/Autoload.php";
	Config\Autoload::run();
	require_once "Views/Template.php";
	Config\Enrutador::run(new Config\Request());
?>