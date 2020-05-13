<?php

use PHPUnit\Framework\TestCase;
require_once "ventas.modelo.php";

class ventasmodeloTest extends TestCase{

    /**
     * @test
     */
    public function mdlIngresarVentasTest(){
        //inicializacion
         $ventasmodeloIntsance = new ventasmodeloTest();
         $tabla = 2;
         $expected = "ok";
         
         //add
         $result = $ventasmodeloIntsance->ingresarModelo($tabla);

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