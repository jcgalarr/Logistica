<?php		

include_once('Usuario.php');
include_once('conexion.php');

class UsuarioCollector extends conexion
{
  
  function showUsuario() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'codigo'},$c{'nombre'},$c{'apellido'},$c{'cargo'},$c{'departamento'},$c{'bodega'},$c{'cedula'},$c{'login'},$c{'contrasena'},$c{'estado'},$c{'tipousu'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }

    function validaCedula ($id) {
    $row = self::$db->getRow("SELECT * FROM usuario where cedula = '$id'");
    $Usuario = new Usuario($row{'codigo'},$row{'nombre'},$row{'apellido'},$row{'cargo'},$row{'departamento'},$row{'bodega'},$row{'cedula'},$row{'login'},$row{'contrasena'},$row{'estado'},$row{'tipousu'});
    return $Usuario;        
  }
 
  function showUsuarioId($id) {
    //echo $id;
    $row = self::$db->getRow("SELECT * FROM usuario where codigo = '$id'");   
    //print_r ($row); 
    $Usuario = new Usuario($row{'codigo'},$row{'nombre'},$row{'apellido'},$row{'cargo'},$row{'departamento'},$row{'bodega'},$row{'cedula'},$row{'login'},$row{'contrasena'},$row{'estado'},$row{'tipousu'});
    return $Usuario;        
  }

  function updateUsuario($codigo,$nombre,$apellido,$cargo,$departamento,$bodega,$cedula,$login,$contrasena,$estado,$tipousu) {
    $update = self::$db->getRow("Update usuario set nombre='$nombre',apellido='$apellido',cargo='$cargo',departamento='$departamento',bodega='$bodega',cedula='$cedula',login='$login',contrasena='$contrasena',estado='$estado',tipousu='$tipousu' where codigo= '$codigo'");             
	return 1;  
  }

  function deleteUsuario($id) {
   $delete = self::$db->getRow("Delete from usuario where codigo='$id'");   
   return 1;          
  }

  function insertUsuario($nombre,$apellido,$cargo,$departamento,$bodega,$cedula,$login,$contrasena,$estado,$tipousu) {
    $new_row = self::$db->getRow("Insert into usuario (nombre,apellido,cargo,departamento,bodega,cedula,login,contrasena,estado,tipousu) values ('$nombre','$apellido','$cargo','$departamento','$bodega','$cedula','$login','$contrasena','$estado','$tipousu')");
 return 1;               
  }
}
?>
