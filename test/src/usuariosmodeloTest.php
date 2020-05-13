<?php

use PHPUnit\Framework\TestCase;
require_once "usuarios.modelo.php";

class usuariosmodeloTest extends TestCase{

    /**
     * @test
     */
    public function mdlIngresarUsuariosTest(){
        //inicializacion
         $usuariosmodeloIntsance = new usuariosmodeloTest();
         $tabla = 2;
         $expected = "ok";
         
         //add
         $result = $usuariosmodeloIntsance->ingresarModelo($tabla);

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