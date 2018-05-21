<?php 
	
	/**
	* Clase controlador principal, su función principal es cargar los modelos y las vistas
	*/
	class Controller
	{
		//Cargar modelo 
		public function model($model){
			//Carga
			require_once '../app/models/' . $model . '.php';
			
			//Instancia el modelo;
			return new $model();
		}

		//Cargar vista
		public function view($view, $data = []){
			//Chequeamos si el archivo vista existe
			if (file_exists('../app/views/' . $view . '.php')) {
				require_once '../app/views/' . $view . '.php';	
			}else{
				//Si el archivo de la vista no existe
				die('The view no exist');
			}
		}
	}