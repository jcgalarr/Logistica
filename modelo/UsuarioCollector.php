<?php		

include_once('Usuario.php');
include_once('conexion.php');

class UsuarioCollector extends conexion
{
  
  function showUsuario() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    $arrayAreaTrabajo= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'codigo'},$c{'nombre'},$c{'apellido'},$c{'permisos'},$c{'privilegios'},$c{'cargo'},$c{'departamento'},$c{'bodega'},$c{'cedula'},$c{'fechacrea'},$c{'fechamodi'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
 
  function showUsuario($codigo) {
    $row = self::$db->getRow("SELECT * FROM usuario where codigo = $codigo");   
    $Usuario = new Usuario($row{'codigo'},$row{'nombre'},$row{'apelido'},$row{'permisos'},$row{'privilegios'},$row{'cargo'},$row{'departamento'},$row{'bodega'},$row{'cedula'},$row{'fechacrea'},$row{'fechamodi'});
    return $Usuario;        
  }

  function updateUsuario($codigo,$nombre,$apellido,$permisos,$privilegios,$cargo,$departamento,$bodega,$cedula,$fechacrea,$fechamodi) {
    $update = self::$db->getRow("Update usuario set nombre='$nombre',apellido='$apellido',permisos='$permisos',privilegios='$privilegios',cargo='$cargo',departamento='$departamento',bodega='$bodega',cedula='$cedula',fechacrea='$fechacrea',fechamodi='$fechamodi' where codigo=$codigo");             
	return 1;  
  }

  function deleteUsuario($codigo) {
   $delete = self::$db->getRow("Delete from usuario where codigo=$codigo");   
   return 1;          
  }

  function insertUsuario($codigo,$nombre,$apellido,$permisos,$privilegios,$cargo,$departamento,$bodega,$cedula,$fechacrea,$fechamodi) {
    $new_row = self::$db->getRow("Insert into usuario (codigo,nombre,apellido,permisos,privilegios,cargo,departamento,bodega,cedula,fechacrea,fechamodi) values ('$codigo','$nombre','$apellido','$permisos','$privilegios','$cargo','$departamento','$bodega','$cedula','$fechacrea','$fechamodi'),");
 return 1;               
  }

  

}
?>
