<?php
	//Cargamos la configuracion inicial 
	require_once 'config/config.php';
	require_once 'helpers/url_helper.php';

	//Autoload de las demás librerias, con esto evitamos cargar uno a uno los archivos de la carpeta librerias
	spl_autoload_register(function($nameClass){
		require_once 'libreries/' . $nameClass . '.php';
	});
