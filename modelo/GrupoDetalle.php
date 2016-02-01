<?php

class GrupoDetalle
{
    private $codigo;
	private $grupo;
	private $modulo;
	private $secuencia;
    private $descripcion;
	private $fecha;
   
    function __construct($codigo,$grupo,$modulo,$secuencia,$descripcion,$fecha) {
       $this->codigo = $codigo;
	   $this->grupo = $grupo;
	   $this->modulo = $modulo;
	   $this->secuencia = $secuencia;
       $this->descripcion = $descripcion;
	   $this->fecha = $fecha;
     }

     function setcodigo($codigo){
       $this->codigo = $codigo;
     }
 
     function getcodigo(){
       return $this->codigo;
     } 
	 
	 function setgrupo($grupo){
       $this->grupo = $grupo;
     }
 
     function getgrupo(){
       return $this->grupo;
     } 
	 
	 function setmodulo($modulo){
       $this->modulo = $modulo;
     }
 
     function getmodulo(){
       return $this->modulo;
     } 
	 
	 function setsecuencia($secuencia){
       $this->secuencia = $secuencia;
     }
 
     function getsecuencia(){
       return $this->secuencia;
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
