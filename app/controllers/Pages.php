<?php 

class Pages extends Controller
{
	
	public function __construct()
	{
		$this->usuarioModelo = $this->model('usuario');
	}

	public function index(){
		//Obtener los usuarios		
		$usuarios = $this->usuarioModelo->obtenerUsuarios();

		$data = ['usuarios'=> $usuarios];

		$this->view('pages/Start', $data);
	}

	public function adds(){

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$data = [
						'nombre'=> trim($_POST['nombre']),
						'email'=> trim($_POST['email']),
						'telefono'=> trim($_POST['telefono'])
					];		

			if ($this->usuarioModelo->addUser($data)) {
				redireccion('/pages');//este método esta en helpers en url_helper.php
			}else{
				die('Algo salió mal');
			}
		}else{

			$data = [

				'nombre'=> '',
				'email'=> '',
				'telefono'=> ''
			];

			$this->view('pages/adds', $data);		
		}		
	}

	public function buscar($info)
	{
			//obtener la información del usuario desde el modelo
			$users = $this->usuarioModelo->buscarPorCamposEmailNombre($info);		
			$data = ['usuarios'=> $users];
			echo json_encode($data);//se retorna json porque se manejara desde javascript		
	}

	public function edit($id){

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$data = [
						'id_usuario' => $id,
						'nombre'=> trim($_POST['nombre']),
						'email'=> trim($_POST['email']),
						'telefono'=> trim($_POST['telefono'])
					];		

			if ($this->usuarioModelo->updateUser($data)) {
				redireccion('/pages');//este método esta en helpers en url_helper.php
			}else{
				die('Algo salió mal');
			}
		}else{

			//obtener la información del usuario desde el modelo
			$user = $this->usuarioModelo->obtenerUsuarioId($id);

			$data = [
				'id_usuario' => $user->id_usuario,
				'nombre'=> $user->nombre,
				'email'=> $user->email,
				'telefono'=> $user->telefono
			];

			$this->view('pages/edit', $data);		
		}	
	}

	public function delete($id){

		//obtener la información del usuario desde el modelo
		$user = $this->usuarioModelo->obtenerUsuarioId($id);

		$data = [
			'id_usuario' => $user->id_usuario,
			'nombre'=> $user->nombre,
			'email'=> $user->email,
			'telefono'=> $user->telefono
		];

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$data = [
						'id_usuario' => $id
					];		

			if ($this->usuarioModelo->deleteUser($data)) {
				redireccion('/pages');//este método esta en helpers en url_helper.php
			}else{
				die('Algo salió mal');
			}
		}	
		$this->view('pages/delete', $data);			
	}
}