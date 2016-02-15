<?php   
include_once('Ubicacion.php');
include_once('conexion.php');

class UbicacionCollector extends conexion
{
  
  function showUbicacion() {
    $rows = self::$db->getRows("SELECT * FROM ubicacion ");        
    $arrayUbicacion= array();        
    foreach ($rows as $c){
      $aux = new ubicacion($c{'codigo'},$c{'pasillo'},$c{'tipo'},$c{'posinicio'},$c{'posfinal'},$c{'salto'});
      array_push($arrayUbicacion, $aux);
    }
    return $arrayUbicacion;        
  }
 
  function showUbicacionId($id) {
    $row = self::$db->getRow("SELECT codigo,pasillo,tipo,posinicio,posfinal,salto FROM ubicacion where codigo = '$id'");   
    $ubicacion = new ubicacion($row{'codigo'},$row{'pasillo'},$row{'tipo'},$row{'posinicio'},$row{'posfinal'},$row{'salto'});
    //echo($row{'tiporuta'});
    return $ubicacion;    

  }

  function updateUbicacion($codigo,$pasillo,$tipo,$posinicio,$posfinal,$salto) {
    //echo $codigo .$pasillo .$tipo .$posinicio .$posfinal .$salto;
    $update = self::$db->getRow("Update ubicacion set pasillo='$pasillo',tipo='$tipo',posinicio='$posinicio',posfinal='$posfinal',salto='$salto' where codigo='$codigo'");             
 return 1;  
  }

  function deleteUbicacion($id) {
 $delete = self::$db->getRow("Delete from ubicacion where codigo= '$id'");   
   return 1;          
  }

  function insertUbicacion($pasillo,$posinicio,$posfinal,$salto,$tipo) {
    $new_row = self::$db->getRow("Insert into ubicacion (pasillo,posinicio,posfinal,salto,tipo) values ('$pasillo','$posinicio','$posfinal','$salto','$tipo')");
 return 1;               
  }

}
?> 