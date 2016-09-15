<?php

/**
* 
*/
class Conexion
{
	private $pdo;
	public function __construct()
	{
		try {
			$this->pdo = new PDO('mysql:host=localhost;dbname=proyecto;charset=utf8;','root','');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $this->pdo;
		} catch (PDOException $e) {
			print("Error en la base de datos");
			die();
		}
	}
}