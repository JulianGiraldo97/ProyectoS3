<?php

use PHPUnit\Framework\TestCase;

class categoriasmodeloTest extends TestCase{

    /**
     * @test
     */
    public function mdlIngresarCategoriasTest(){
        //inicializacion
         $categoriamodeloIntsance = new categoriasmodeloTest();
         $tabla = 2;
         $expected = "ok";
         
         //add
         $result = $categoriamodeloIntsance->ingresarModelo($tabla);

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