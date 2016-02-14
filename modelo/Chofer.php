<?php

class Chofer
{
    private $codigo;
    private $nombre;
    private $apellido;
    private $licencia;
    private $categoria_lic;
    private $numcelular1;
    private $recordpolicial;
    private $transportista;
  
    function __construct($codigo,$nombre,$apellido,$licencia,$categoria_lic,$numcelular1,$recordpolicial,$transportista) {
       $this->codigo = $codigo;
       $this->nombre = $nombre;
       $this->apellido = $apellido;
       $this->licencia = $licencia;
       $this->categoria_lic = $categoria_lic;
       $this->numcelular1 = $numcelular1;
       $this->recordpolicial = $recordpolicial;
       $this->transportista = $transportista;
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

    function setapellido($apellido){
       $this->apellido = $apellido;
    } 

    function getapellido(){
       return $this->apellido;
    } 

    function setlicencia($licencia){
       $this->licencia = $licencia;
    } 

    function getlicencia(){
       return $this->licencia;
    }  

    function setcategoria_lic($categoria_lic){
       $this->categoria_lic = $categoria_lic;
    } 

    function getcategoria_lic(){
       return $this->categoria_lic;
    }

    function setnumcelular1($numcelular1){
       $this->numcelular1 = $numcelular1;
    } 

    function getnumcelular1(){
       return $this->numcelular1;
    }

    function setrecordpolicial($recordpolicial){
       $this->recordpolicial = $recordpolicial;
    } 

    function getrecordpolicial(){
       return $this->recordpolicial;
    } 

    function settransportista($transportista){
       $this->transportista = $transportista;
    } 

    function gettransportista(){
       return $this->transportista;
    } 
}

?> 
