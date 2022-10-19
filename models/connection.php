<?php 

class Connection{

	static public function connect(){

		try{

			$link = new PDO("mysql:host=localhost;dbname=marketplace","root", ""); //Link de la base de datos, nombre de la base de datos, usuario y contrasena

			$link->exec("set names utf8");

		}catch(PDOException $e){

			die("Error: ".$e->getMessage());

		}

		return $link;
		
	}

}

