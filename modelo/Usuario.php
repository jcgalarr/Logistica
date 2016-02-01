<?php

class Usuario
{
    private $codigo;
	private $nombre;
	private $apellido;
	private $permisos;
    private $privilegios;
	private $cargo;
	private $departamento;
	private $bodega;
	private $cedula;
	private $fechacrea;
	private $fechamodi;
   
    function __construct($codigo,$nombre,$apellido,$permisos,$privilegios,$cargo,$departamento,$bodega,$cedula,$fechacrea,$fechamodi) {
       $this->codigo = $codigo;
	   $this->nombre = $nombre;
	   $this->apellido = $apellido;
	   $this->permisos = $permisos;
       $this->privilegios = $privilegios;
	   $this->cargo = $cargo;
	   $this->departamento = $departamento;
	   $this->bodega = $bodega;
	   $this->cedula = $cedula;
	   $this->fechacrea = $fechacrea;
	   $this->fechamodi = $fechamodi;
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
	 
	 function setpermisos($permisos){
       $this->permisos = $permisos;
     }
 
     function getpermisos(){
       return $this->permisos;
     } 

     function setprivilegios($privilegios){
       $this->privilegios = $privilegios;
     } 

     function getprivilegios(){
       return $this->privilegios;
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
	 
	 function setfechacrea($fechacrea){
       $this->fechacrea = $fechacrea;
     }
 
     function getfechacrea(){
       return $this->fechacrea;
     }
	 
	 function setfechamodi($fechamodi){
       $this->fechamodi = $fechamodi;
     }
 
     function getfechamodi(){
       return $this->fechamodi;
     }

}

?> 
