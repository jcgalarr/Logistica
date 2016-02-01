<?php

class articulo
{
    private $codigo;
    private $nombre;
    private $descripcion;
    private $unidadmedida;
    private $estado;

  
    function __construct($codigo, $nombre,$descripcion,$unidadmedida,$estado) {
       $this->codigo = $codigo;
       $this->nombre = $nombre;
       $this->descripcion = $descripcion;
       $this->unidadmedida = $unidadmedida;
       $this->estado = $estado;
     }

   
     function setcodigo($codigo){
       $this->codigo = $codigo;
     }
 
     function getcodigo(){
       return $this->codigo;
     } 

     function setnombre($nombre){
       $this->nombre = $nombre;
     } 

     function getnombre(){
       return $this->nombre;
     } 

   function setdescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 

     function getdescripcion(){
       return $this->descripcion;
     } 

 function setunidadmedida($unidadmedida){
       $this->unidadmedida = $unidadmedida;
     } 

     function getunidadmedida(){
       return $this->unidadmedida;
     } 

 function setestado($estado){
       $this->estado = $estado;
     } 

     function getestado(){
       return $this->estado;
     } 
  
 
}

?> 
