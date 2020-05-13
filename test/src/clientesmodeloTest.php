<?php

use PHPUnit\Framework\TestCase;
require_once "clientes.modelo.php";

class clientesmodeloTest extends TestCase{

    /**
     * @test
     */
    public function mdlIngresarClientesTest(){
        //inicializacion
         $clientesmodeloIntsance = new clientesmodeloTest();
         $tabla = 2;
         $expected = "ok";
         
         //add
         $result = $clientesmodeloIntsance->ingresarModelo($tabla);

         //assert
         $this->assertEqual($expected, $result);


    }




    public function ingresarModelo($tabla){
        if($tabla == 2){
            return "ok";    
        }else{
            return "error";
        }
        
    }

}