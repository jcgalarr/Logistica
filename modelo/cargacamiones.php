<?php

class cargacamiones
{
    private $cod_camion;
    private $cod_ruta;
    private $cadie;
    private $puerta;
  
    function __construct($cod_camion, $cod_ruta,$cadie,$puerta) {
       $this->cod_camion = $cod_camion;
       $this->cod_ruta = $cod_ruta;
       $this->cadie = $cadie;
       $this->puerta = $puerta;

     }

   
     function setcod_camion($cod_camion){
       $this->cod_camion = $cod_camion;
     }
 
     function getcod_camion(){
       return $this->cod_camion;
     } 

     function setcod_ruta($cod_ruta){
       $this->cod_ruta = $cod_ruta;
     } 

     function getcod_ruta(){
       return $this->cod_ruta;
     } 


 function setcadie($cadie){
       $this->cadie = $cadie;
     } 

     function getcadie(){
       return $this->cadie;
     } 
 function setpuerta($puerta){
       $this->puerta = $puerta;
     } 

     function getpuerta(){
       return $this->puerta;
     }   
}

?> 
