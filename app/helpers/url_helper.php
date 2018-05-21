<?php 

//Para redireccionar las páginas
function redireccion($page){
	header('location: ' . ROUTE_URL . $page);
}