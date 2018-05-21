<?php 
	
	//Clase para conectarse a la base de datos y ejecutar consultas PDO
	class DataBase{

		private $host = DB_HOST;//Definida previamente en el archivo config
		private $user = DB_USER;
		private $password = DB_PASSWORD;
		private $nameBD = DB_NAME;

		private $dbh;
		private $stmt;
		private $error;

		public function __construct(){

			//Configurar la conexión 
			$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->nameBD;

			$options = array(PDO::ATTR_PERSISTENT => true, 
							 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

			//Crea una instancia PDO
			try{
				$this->dbh = new PDO($dsn, $this->user, $this->password, $options);
				$this->dbh->exec('set names utf8');

			}catch(PDOException $e){
				$this->error = $e->getMessage();
				echo $this->error;
			}
		}

		//Preramos la consulta 
		public function query($sql){
			$this->stmt = $this->dbh->prepare($sql);
		}

		//Vinculamos la consulta con bind 
		public function bind($param, $value, $type = null){
			if (is_null($type)) {
				switch (true) {
					case is_int($value):
						$type = PDO::PARAM_INT;
						break;
					case is_bool($value):
						$type = PDO::PARAM_BOOL;
						break;
					case is_null($value):
						$type = PDO::PARAM_NULL;
						break;
					default:
						$type = PDO::PARAM_STR;
						break;
				}
			}

			$this->stmt->bindValue($param, $value, $type);
		}

		//Ejecuta la consulta 
		public function execute(){
			return $this->stmt->execute();
		}

		//Obtener todos los registros 
		public function regists(){
			$this->execute();
			return $this->stmt->fetchAll(PDO::FETCH_OBJ);
		}

		//Obtener un único registro
		public function regist(){
			$this->execute();
			return $this->stmt->fetch(PDO::FETCH_OBJ);
		}

		//Obtener la cantidad de filas
		public function countRow(){
			return $this->stmt->rowCount();
		}
	}