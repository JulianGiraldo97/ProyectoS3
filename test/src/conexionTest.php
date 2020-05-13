<?php

use PHPUnit\Framework\TestCase;
require_once "conexion.php";

class conexionTest extends TestCase{
 
    /**
     * @test
     * prueba el estado de la conexion
     */
    public function conexionTest(){

       
        $this->expectException(ErrorException::conexion);

    }

 
}
