<?php


/**
* 
*/
class Usuario extends Conexion
{
	private $usuario,$password;
	private $model;

	public function __construct()
	{
		$this->model= parent::__construct();
	}
	public function getUsuario() {
		return $this->usuario;
	}
	public function setUsuario($usuario) {
		$this->usuario = $usuario;
	}
	public function getPassword() {
		return $this->password;
	}
	public function setPassword($password) {
		$this->password= $password;
	}
	public function logeo() {
		$query= "SELECT * FROM tasnego WHERE usuario='".$this->usuario."'AND password='".$this->password."'";
		$stmt= $this->model->prepare($query);
		$stmt->execute();

		return $stmt->fetch(PDO::FETCH_ASSOC);	
	}

}


 ?>