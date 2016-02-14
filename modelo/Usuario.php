<?php

class Usuario
{
  
  private $codigo;
	private $nombre;
	private $apellido;
	private $cargo;
	private $departamento;
	private $bodega;
	private $cedula;
	private $login;
	private $contrasena;
  private $estado;
  private $tipousu;
   
    function __construct($codigo,$nombre,$apellido,$cargo,$departamento,$bodega
      ,$cedula,$login,$contrasena,$estado,$tipousu) {
      
     $this->codigo = $codigo;
	   $this->nombre = $nombre;
	   $this->apellido = $apellido;
	   $this->cargo = $cargo;
	   $this->departamento = $departamento;
	   $this->bodega = $bodega;
	   $this->cedula = $cedula;
	   $this->login = $login;
	   $this->contrasena = $contrasena;
     $this->estado = $estado;
     $this->tipousu = $tipousu;

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
	 
	   function setcargo($cargo){
       $this->cargo = $cargo;
     }
 
     function getcargo(){
       return $this->cargo;
     } 

    function setdepartamento($departamento){
       $this->departamento = $departamento;
     }
 
     function getdepartamento(){
       return $this->departamento;
     }

     function setbodega($bodega){
       $this->bodega = $bodega;
     } 

     function getbodega(){
       return $this->bodega;
     } 
	 
	  function setcedula($cedula){
       $this->cedula = $cedula;
     }
 
     function getcedula(){
       return $this->cedula;
     } 
	 
  	 function setlogin($login){
       $this->login = $login;
     }
 
     function getlogin(){
       return $this->login;
     }
	  
	  function setcontrasena($contrasena){
       $this->contrasena = $contrasena;
     }
 
     function getcontrasena(){
       return $this->contrasena;
     }
	 
	   function setestado($estado){
       $this->estado = $estado;
     }
 
     function getestado(){
       return $this->estado;
     }
	 
	   function settipousu($tipousu){
       $this->tipousu = $tipousu;
     }
 
     function gettipousu(){
       return $this->tipousu;
     }

}

?> 

