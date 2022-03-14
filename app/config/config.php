<?php 
	
	//Configración de acceso a la base de datos
	define('DB_HOST', '***');
	define('DB_USER', '***');
	define('DB_PASSWORD', '***');
	define('DB_NAME', '***');

	//Ruta de la aplicacion 
	define('ROUTE_APP', dirname(dirname(__FILE__)));//Se define la ruta padre de la cual se desprenderan las demás, define es reservado de php que permite definir una constante

	//Ruta URL Ejemplo: http://localhost/FrameworkMvc/
	define('ROUTE_URL', 'http://crudusuarios.app');

	//Ruta del website
	define('NAMEWEBSITE', 'CRUD MVC - Jmedinac');
	