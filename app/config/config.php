<?php 
	
	//Configración de acceso a la base de datos
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'jorge');
	define('DB_NAME', 'crud_mvc');

	//Ruta de la aplicacion 
	define('ROUTE_APP', dirname(dirname(__FILE__)));//Se define la ruta padre de la cual se desprenderan las demás, define es reservado de php que permite definir una constante

	//Ruta URL Ejemplo: http://localhost/FrameworkMvc/
	define('ROUTE_URL', 'http://crudusuarios.app');

	//Ruta del website
	define('NAMEWEBSITE', 'CRUD MVC - Jmedinac');
	