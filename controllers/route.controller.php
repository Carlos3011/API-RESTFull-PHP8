<?php 

class RoutesController{

	/*=============================================
	Ruta Principal
	=============================================*/
	
	public function index(){

		include "routes/route.php";

	}

	/*=============================================
	Nombre de la base de datos
	=============================================*/

	static public function database(){

		return "marketplace"; // nombre de la base de datos que se utilizara
	}

	/*=============================================
	Tablas protegidas
	=============================================*/

	static public function tablePrivate(){

		$tables = ["users","disputes","orders","sales","messages"];

		return $tables;

	}

}
