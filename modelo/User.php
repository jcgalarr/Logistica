<?php

class User
{
    private $id;
    private $nombre;
    
    function __construct($id, $nombre) {
       $this->id = $id;
       $this->nombre = $nombre;
             
     }

   
     function setid($id){
       $this->id = $id;
     }
 
     function getid(){
       return $this->id;
     } 

     function setnombre($nombre){
       $this->nombre = $nombre;
     } 

     function getnombre(){
       return $this->nombre;
     } 

   
 
}

?> 
