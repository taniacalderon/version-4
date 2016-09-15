<?php

require_once'model/usuario.php';
class LoginControlador
{
	private $model;

	public function __construct (){
		$this->model = new Usuario();
	}


	Public function Index()
	{
		require_once'views/header.html';
		require_once'views/login/index.php';
		require_once'views/footer.html';
	}
	public function logeo()
	{
		$usuarios = $this->model;

		$usuarios->setUsuario($_REQUEST['usuario']);
		$usuarios->setPassword($_REQUEST['password']);
		$stmt= $usuarios->logeo($usuarios);
		switch ($stmt['rol']) {
			case 'administrador':
			session_start();
				 header("location:?controller=administrador&accion=index");
				 $_SESSION['doc_administrador'] = $stmt['documento'];
				break;
			
			case 'usuario':
			session_start();
					header("location:?controller=aprendiz&accion=index");
					$_SESSION['doc_usuario'] = $stmt['documento'];
				break;

			default:
				 header("location:index.php");
				break;
		}
	}

	public function salir()
	{
		session_start();
		session_destroy();
		header("location:index.php");
	}
}