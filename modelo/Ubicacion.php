<?php

class Ubicacion
{
  private $codigo;
  private $pasillo;
  private $tipo;
	private $posinicio;
	private $posfinal;
	private $salto;


   
    function __construct($codigo,$pasillo,$tipo,$posinicio,$posfinal,$salto) {
     $this->codigo = $codigo;
     $this->pasillo = $pasillo;
     $this->tipo = $tipo;
	   $this->posinicio = $posinicio;
	   $this->posfinal = $posfinal;
	   $this->salto = $salto;
	   
	   	   
     }

     function setcodigo($codigo){
       $this->codigo = $codigo;
     }
 
     function getcodigo(){
       return $this->codigo;
     } 

     function setpasillo($pasillo){
       $this->pasillo = $pasillo;
     }
 
     function getpasillo(){
       return $this->pasillo;
     } 
	 
   function settipo($tipo){
       $this->tipo = $tipo;
     }
 
     function gettipo(){
       return $this->tipo;
     }
        
	 function setposinicio($posinicio){
       $this->posinicio = $posinicio;
     }
 
     function getposinicio(){
       return $this->posinicio;
     } 
	 
	 function setposfinal($posfinal){
       $this->posfinal = $posfinal;
     }
 
     function getposfinal(){
       return $this->posfinal;
     } 
	 
	 
	 function setsalto($salto){
       $this->salto = $salto;
     }
 
     function getsalto(){
       return $this->salto;
     } 
	 


}

?> 
