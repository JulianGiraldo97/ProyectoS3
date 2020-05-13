<?php

use PHPUnit\Framework\TestCase;
require_once "productos.modelo.php";

class productosmodeloTest extends TestCase{

    /**
     * @test
     */
    public function mdlIngresarProductosTest(){
        //inicializacion
         $productosmodeloIntsance = new productosmodeloTest();
         $tabla = 2;
         $expected = "ok";
         
         //add
         $result = $productosmodeloIntsance->ingresarModelo($tabla);

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