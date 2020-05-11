<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=us-cdbr-east-06.cleardb.net;dbname=heroku_4747415471f18de",
			            "root",
			            "");

		$link->exec("set names utf8");

		return $link;

	}

}