<?php		

include_once('GrupoUsuario.php');
include_once('conexion.php');

class GrupoUsuarioCollector extends conexion
{
  
  function showGrupoUsuario() {
    $rows = self::$db->getRows("SELECT * FROM grupousuario ");        
    $arrayAreaTrabajo= array();        
    foreach ($rows as $c){
      $aux = new GrupoUsuario($c{'codigo'},$c{'descripcion'},$c{'fecha'});
      array_push($arrayGrupoUsuario, $aux);
    }
    return $arrayGrupoUsuario;        
  }
 
  function showGrupoUsuario($codigo) {
    $row = self::$db->getRow("SELECT * FROM grupousuario where codigo = $codigo");   
    $GrupoUsuario = new GrupoUsuario($row{'codigo'},$row{'descripcion'}, $row{'fecha'});
    return $GrupoUsuario;        
  }

  function updateGrupoUsuario($codigo,$descripcion,$fecha) {
    $update = self::$db->getRow("Update grupousuario set descripcion='$descripcion',fecha='$fecha' where codigo=$codigo");             
	return 1;  
  }

  function deleteGrupoUsuario($codigo) {
   $delete = self::$db->getRow("Delete from grupousuario where codigo=$codigo");   
   return 1;          
  }

  function insertGrupoUsuario($codigo,$descripcion,$fecha) {
    $new_row = self::$db->getRow("Insert into grupousuario (codigo,descripcion, fecha) values ('$codigo','$descripcion','$fecha'),");
 return 1;               
  }

  

}
?>
