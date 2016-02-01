<?php

class GrupoUsuario
{
    private $codigo;
	private $descripcion;
	private $fecha;
   
    function __construct($codigo,$descripcion,$fecha) {
       $this->codigo = $codigo;
	   $this->descripcion = $descripcion;
	   $this->fecha = $fecha;
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
	 
	 function setfecha($fecha){
       $this->fecha = $fecha;
     }
 
     function getfecha(){
       return $this->fecha;
     } 

}

?> 
