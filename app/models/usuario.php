<?php 

	class usuario{
		private $db;

		public function __construct(){
			$this->db = new DataBase;
		}

		public function obtenerUsuarios()
		{

			$this->db->query('SELECT * FROM usuarios');
			$resultados = $this->db->regists();
			return $resultados;
		}

		public function obtenerUsuarioId($id)
		{

			$this->db->query('SELECT * FROM usuarios WHERE id_usuario = :id');
			$this->db->bind(':id', $id);
			$fila = $this->db->regist();
			return $fila;

		}

		public function buscarPorNombre($name)
		{	
			if ($name != "" || $name != " ")
			{
				$this->db->query('SELECT * FROM usuarios WHERE nombre LIKE "%":name"%"');
				$this->db->bind(':name', $name);
				$fila = $this->db->regists();
				return $fila;	
			}			
		}

		public function addUser($data){
			$this->db->query('INSERT INTO USUARIOS (NOMBRE, EMAIL, TELEFONO) VALUES (:nombre, :email, :telefono)');

			//vincular los valores
			$this->db->bind(':nombre', $data['nombre']);
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':telefono', $data['telefono']);

			//Ejecutar
			if ($this->db->execute()) {
				return true;
			} else {
				return false;
			}			
		}

		public function updateUser($data){
			
			$this->db->query('UPDATE USUARIOS SET NOMBRE = :nombre, EMAIL = :email, TELEFONO = :telefono WHERE id_usuario = :id');

			//vincular los valores
			$this->db->bind(':id', $data['id_usuario']);
			$this->db->bind(':nombre', $data['nombre']);
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':telefono', $data['telefono']);

			//Ejecutar
			if ($this->db->execute()) {
				return true;
			} else {
				return false;
			}			
		}

		public function deleteUser($data){
			$this->db->query('DELETE FROM USUARIOS WHERE id_usuario = :id');

			//vincular los valores
			$this->db->bind(':id', $data['id_usuario']);
			
			//Ejecutar
			if ($this->db->execute()) {
				return true;
			} else {
				return false;
			}	
		}
	}