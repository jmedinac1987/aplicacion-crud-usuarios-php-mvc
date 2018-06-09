# CRUD-PHP-MVC
Proyecto construido con un Framework personalizado de PHP, el cual tiene la característica  del patrón MVC

# Tecnologías adicionales
Jquery, Ajax, javascript y MySQL 

# Nota

Si usa virtualización, debe ajustar el archivo .htacces de la carpeta public de la siguiente forma:

<IfModule mod_rewrite.c>
Options -Multiviews
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]
</IfModule>
