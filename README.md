# CRUD-PHP-MVC

Proyecto construido con un Framework personalizado de PHP, el cual tiene la característica  del patrón MVC

# Tecnologías adicionales
Jquery, Ajax, javascript y MySQL 

# Notas

1. Si no usa virtualización para la ejecución de la aplicación, debe ajustar el archivo .htacces de la carpeta public de la siguiente forma 

	 * `<IfModule mod_rewrite.c>`
	 * Options -Multiviews
	 * RewriteEngine On
	 * RewriteBase /nombre_del_proyecto/public.
	 * RewriteCond %{REQUEST_FILENAME} !-d
	 * RewriteCond %{REQUEST_FILENAME} !-f
	 * RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]
	 * `</IfModule>` 

2. Ajustar los valores de las siguientes constantes de acuerdo a su configración de base de datos y ruta de la aplicación:

* 'DB_HOST', 'localhost'
* 'DB_USER', 'su_usuario'
* 'DB_PASSWORD', 'su_contrasena'
* 'DB_NAME', 'su_nombre_de_base_de_datos'
* 'ROUTE_URL', 'http://crudusuarios.app'  => es un ejemplo si fuera virtual 
* 'ROUTE_URL', 'http://localhost/nombre_proyecto'  => es un ejemplo si no usa virtualización

3. El archivo crud_mvc.sql contiene la estructura de la base de datos

4. Ajustar las variables url y urlHref del archivo search.js de acuerdo a el valor dado en la variable de configuración ROUTE_URL del punto 2.