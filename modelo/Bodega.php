<?php

class Bodega
{
    private $codigo;
    private $descripcion;
    private $telefono;
    private $direccion;
   
    function __construct($codigo, $descripcion,$telefono,$direccion) {
       $this->codigo = $codigo;
       $this->descripcion = $descripcion;
       $this->telefono = $telefono;
       $this->direccion = $direccion;
      
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

   function settelefono($telefono){
       $this->telefono = $telefono;
     } 

     function gettelefono(){
       return $this->telefono;
     } 

 function setdireccion($direccion){
       $this->direccion = $direccion;
     } 

     function getdireccion(){
       return $this->direccion;
     } 

 



 
}

?> 
