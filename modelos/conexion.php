<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=us-cdbr-east-06.cleardb.net;dbname=heroku_4747415471f18de",
			            "b4de1cdf927ebc",
			            "38a4a834");

		$link->exec("set names utf8");

		return $link;

	}

}