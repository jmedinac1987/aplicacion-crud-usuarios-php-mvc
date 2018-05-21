<?php 

	/*Mapeo de la url ingresada por el navegador: 
	1. Controlador
	2. Método
	3. Parametro

	Ejemplo: /articulos/actualizar/4
	*/

	class Core 
	{
		protected $controllerCurrent = 'Pages';
		protected $methodCurrent = 'index';
		protected $parameters = [];

		//Constructor
		public function __construct(){
			//print_r($this->getUrl()); este print_r es solo para verificar si funciona
			$url = $this->getUrl();

			//Busca en controllres si el controlador exite
			if (file_exists('../app/controllers/' . ucwords($url[0]).'.php')) {
				//si existe se setea como controlador por defecto
				$this->controllerCurrent = ucwords($url[0]);

				//unset indice
				unset($url[0]);
			}

			//Se requiere el controlador
			require_once '../app/controllers/' . $this->controllerCurrent . '.php';
			$this->controllerCurrent = new $this->controllerCurrent;

			//Se verifica la segunda parte de la url, es decir el método
			if (isset($url[1])) {
				if (method_exists($this->controllerCurrent, $url[1])) {
					//se chequea el método
					$this->methodCurrent = $url[1];

					//unset indice
					unset($url[1]);
				}
			}

			//Para probar el método
			//echo $this->methodCurrent;
			
			//obtener parametros
			$this->parameters = $url ? array_values($url) : [];

			//funcion callback que utiliza los parametros con array
			call_user_func_array([$this->controllerCurrent, $this->methodCurrent], $this->parameters);
		}

		public function getUrl()
		{
			//Este parametro 'url' se obtiene del archivo .htaccess de public
			//echo $_GET['url'];
			
			if (isset($_GET['url'])) {
				$url = rtrim($_GET['url'], '/');
				$url = filter_var($url, FILTER_SANITIZE_URL);
				$url = explode('/', $url);
				return $url;
			}
			
		}
	}