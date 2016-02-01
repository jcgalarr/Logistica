<?php

class camion
{
    private $placa;
    private $anio;
    private $marca;
    private $tipo;
    private $tonelaje;
    private $cadies;
    private $pallets;
    private $tipocombustible;
    private $cod_chofer;
    private $cod_transportista;
  
    function __construct($placa, $anio,$marca,$tipo,$tonelaje,$cadies,$pallets,$tipocombustible,$cod_chofer,$cod_transportista) {
       $this->placa = $placa;
       $this->anio = $anio;
       $this->marca = $marca;
       $this->tipo = $tipo;
       $this->tonelaje = $tonelaje;
       $this->cadies = $cadies;
       $this->pallets = $pallets;
       $this->tipocombustible = $tipocombustible;
       $this->cod_chofer = $cod_chofer;
       $this->cod_transportista = $cod_transportista;
     }


   
     function setplaca($placa){
       $this->placa = $placa;
     }
 
     function getplaca(){
       return $this->placa;
     } 

     function setanio($anio){
       $this->anio = $anio;
     } 

     function getanio(){
       return $this->anio;
     } 

   function setmarca($marca){
       $this->marca = $marca;
     } 

     function getmarca(){
       return $this->marca;
     } 

 function settipo($tipo){
       $this->tipo = $tipo;
     } 

     function gettipo(){
       return $this->tipo;
     } 

 function settonelaje($tonelaje){
       $this->tonelaje = $tonelaje;
     } 

     function gettonelaje(){
       return $this->tonelaje;
     } 
  
 function setcadies($cadies){
       $this->cadies = $cadies;
     } 

     function getcadies(){
       return $this->cadies;
     } 
 function setpallets($pallets){
       $this->pallets = $pallets;
     } 

     function getpallets(){
       return $this->pallets;
     }   
 function settipocombustible($tipocombustible){
       $this->tipocombustible = $tipocombustible;
     } 

     function gettipocombustible(){
       return $this->tipocombustible;
     }   
 function setcod_chofer($cod_chofer){
       $this->cod_chofer = $cod_chofer;
     } 

     function getcod_chofer(){
       return $this->cod_chofer;
     }   
 function setcod_transportista($cod_transportista){
       $this->cod_transportista = $cod_transportista;
     } 

     function getcod_transportista(){
       return $this->cod_transportista;
     }  
}

?> 
