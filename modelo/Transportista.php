<?php
session_start();
class Transportista
{
    private $ruc;
    private $nombre;
    private $direccion;
    private $telefono1;
    private $telefono2;	
    private $numcelular1;
    private $numcelular2;





  
    function __construct($ruc, $nombre,$direccion,$telefono1,$telefono2,$numcelular1,$numcelular2) {
       $this->ruc = $ruc;
       $this->nombre = $nombre;
       $this->direccion = $direccion;
       $this->telefono1 = $telefono1;
       $this->telefono2 = $telefono2;
       $this->numcelular1 = $numcelular1;
       $this->numcelular2 = $numcelular2;
      



     }

   
     function setruc($ruc){
       $this->ruc = $ruc;
     }
 
     function getruc(){
       return $this->ruc;
     } 

     function setnombre($nombre){
       $this->nombre = $nombre;
     } 

     function getnombre(){
       return $this->nombre;
     } 

   function setdireccion($direccion){
       $this->direccion = $direccion;
     } 

     function getdireccion(){
       return $this->direccion;
     } 

 function settelefono1($telefono1){
       $this->telefono1 = $telefono1;
     } 

     function gettelefono1(){
       return $this->telefono1;
     } 

 function settelefono2($telefono2){
       $this->telefono2 = $telefono2;
     } 

     function gettelefono2(){
       return $this->telefono2;
     } 


   function setnumcelular1($numcelular1){
       $this->numcelular1 = $numcelular1;
     } 

     function getnumcelular1(){
       return $this->numcelular1;
     } 

   function setnumcelular2($numcelular2){
       $this->numcelular2 = $numcelular2;
     } 

     function getnumcelular2(){
       return $this->numcelular2;
     } 

   
       
 
}

?> 
