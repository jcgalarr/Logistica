<?php

class Ruta
{
    private $codigo;
    private $descripcion;
    private $origen;
    private $destino;
    private $tiemporuta;
    private $tiporuta;
    

  
    function __construct($codigo,$descripcion,$origen,$destino,$tiemporuta,$tiporuta) {
       $this->codigo = $codigo;
       $this->descripcion = $descripcion;
       $this->origen = $origen;
       $this->destino = $destino;
       $this->tiemporuta = $tiemporuta;
       $this->tiporuta = $tiporuta;
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

     function setorigen($origen){
       $this->origen = $origen;
     } 

     function getorigen(){
       return $this->origen;
     } 

     function setdestino($destino){
       $this->destino = $destino;
     } 

     function getdestino(){
       return $this->destino;
     } 

     function settiemporuta($tiemporuta){
       $this->tiemporuta = $tiemporuta;
     } 

     function gettiemporuta(){
       return $this->tiemporuta;
     } 

     function settiporuta($tiporuta){
       $this->tiporuta = $tiporuta;
     } 

     function gettiporuta(){
       return $this->tiporuta;
     }        
}

?> 
