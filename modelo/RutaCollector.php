<?php   
include_once('Ruta.php');
include_once('conexion.php');

class RutaCollector extends conexion
{
  
  function showRuta() {
    $rows = self::$db->getRows("SELECT * FROM ruta ");        
    $arrayRuta= array();        
    foreach ($rows as $c){
      $aux = new Ruta($c{'codigo'},$c{'descripcion'},$c{'origen'},$c{'destino'},$c{'tiemporuta'},$c{'tiporuta'});
      array_push($arrayRuta, $aux);
    }
    return $arrayRuta;        
  }
 
  function showRutaId($id) {
    $row = self::$db->getRow("SELECT * FROM ruta where codigo = '$id'");   
    $ruta = new ruta($row{'codigo'},$row{'descripcion'},$row{'origen'},$row{'destino'},$row{'tiemporuta'},$row{'tiporuta'});
    return $ruta;        
  }

  function updateRuta($codigo,$descripcion,$origen,$destino,$tiemporuta,$tiporuta) {
    $update = self::$db->getRow("Update ruta set descripcion='$descripcion',origen='$origen',destino='$destino',tiemporuta='$tiemporuta',tiporuta='$tiporuta' where codigo='$codigo'");             
 return 1;  
  }

  function deleteRuta($id) {
 $delete = self::$db->getRow("Delete from ruta where codigo= '$id'");   
   return 1;          
  }

  function insertRuta($descripcion,$origen,$destino,$tiemporuta,$tiporuta) {
    $new_row = self::$db->getRow("Insert into ruta (descripcion,origen,destino,tiemporuta,tiporuta) values ('$descripcion','$origen','$destino','$tiemporuta','$tiporuta')");
 return 1;               
  }

}
?>
