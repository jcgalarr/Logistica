<?php

class Cargo
{
    private $codigo;
    private $descripcion;
   
    function __construct($codigo,$descripcion) {
       $this->codigo = $codigo;
       $this->descripcion = $descripcion;
     
     }

     function setcodigo($codigo){
       $this->codigo = $codigo;
     }
 
     function getcodigo(){
       return $this->codigo;
     } 

     function setdescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 

     function getdescripcion(){
       return $this->descripcion;
     } 

}

?> 
