<?php
session_start();

class Despacho
{
    private $conttipo;
    private $contnum;
    private $contenidotipo;
    private $contenidonum;
    private $ubiasignada;	
    private $ubitipo;
    private $acontrolar;
    private $bodega;
    private $stock;
    private $fechaproceso;
    private $horaproceso;
    private $guia;
    private $articulo;
  
    function __construct($conttipo, $contnum,$contenidotipo,$contenidonum,$ubiasignada,$ubitipo,$acontrolar,$bodega,$stock,$fechaproceso,$horaproceso,$guia,$articulo) {
       $this->conttipo = $conttipo;
       $this->contnum = $contnum;
       $this->contenidotipo = $contenidotipo;
       $this->contenidonum = $contenidonum;
       $this->ubiasignada = $ubiasignada;
       $this->ubitipo = $ubitipo;
       $this->acontrolar = $acontrolar;
       $this->bodega = $bodega;
       $this->stock = $stock;
       $this->fechaproceso = $fechaproceso;
       $this->horaproceso = $horaproceso;
       $this->guia = $guia;
       $this->articulo = $articulo;
     }

   
     function setconttipo($conttipo){
       $this->conttipo = $conttipo;
     }
 
     function getconttipo(){
       return $this->conttipo;
     } 

     function setcontnum($contnum){
       $this->contnum = $contnum;
     } 

     function getcontnum(){
       return $this->contnum;
     } 

   function setcontenidotipo($contenidotipo){
       $this->contenidotipo = $contenidotipo;
     } 

     function getcontenidotipo(){
       return $this->contenidotipo;
     } 

 function setcontenidonum($contenidonum){
       $this->contenidonum = $contenidonum;
     } 

     function getcontenidonum(){
       return $this->contenidonum;
     } 

     function setubiasignada($ubiasignada){
       $this->ubiasignada = $ubiasignada;
     } 

     function getubiasignada(){
       return $this->ubiasignada;
     } 


   function setubitipo($ubitipo){
       $this->ubitipo = $ubitipo;
     } 

     function getubitipo(){
       return $this->ubitipo;
     } 

     function setacontrolar($acontrolar){
       $this->acontrolar = $acontrolar;
     } 

     function getacontrolar(){
       return $this->acontrolar;
     } 

     function setbodega($bodega){
       $this->bodega = $bodega;
     } 

     function getbodega(){
       return $this->bodega;
     } 

     function setstock($stock){
       $this->stock = $stock;
     } 

     function getstock(){
       return $this->stock;
     } 
       
     function setfechaproceso($fechaproceso){
       $this->fechaproceso = $fechaproceso;
     } 

     function getfechaproceso(){
       return $this->fechaproceso;
     } 

     function sethoraproceso($horaproceso){
       $this->horaproceso = $horaproceso;
     } 

     function gethoraproceso(){
       return $this->horaproceso;
     }

     function setguia($guia){
       $this->guia = $guia;
     } 

     function getguia(){
       return $this->guia;
     } 

     function setarticulo($articulo){
       $this->articulo = $articulo;
     } 

     function getarticulo(){
       return $this->articulo;
     }      
}

?> 
