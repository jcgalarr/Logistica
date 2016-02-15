<?php   
include_once('cargacamiones.php');
include_once('conexion.php');

class CargaCamionCollector extends conexion
{
  
  function showCargaCamion() {
    $rows = self::$db->getRows("SELECT * FROM cargacamion ");        
    $arrayCargaCamion= array();        
    foreach ($rows as $c){
      $aux = new cargacamion($c{'cod_camion'},$c{'cod_ruta'},$c{'cadie'},$c{'puerta'});
      array_push($arrayCargaCamion, $aux);
    }
    return $arrayCargaCamion;        
  }
 
  function showCargaCamionId($id) {
    $row = self::$db->getRow("SELECT * FROM cargacamion where cod_camion = '$id'");   
    $cargacamion = new cargacamion($row{'cod_camion'},$row{'cod_ruta'},$row{'cadie'},$row{'puerta'});
    //echo($row{'tiporuta'});
    return $cargacamion;        
  }

  function updateCargaCamion($cod_camion,$cod_ruta,$cadie,$puerta) {
    $update = self::$db->getRow("Update cargacamion set cod_camion='$cod_camion',cod_ruta='$cod_ruta',cadie='$cadie',puerta='$puerta'");             
 return 1;  
  }

  function deleteCargaCamion($id) {
 $delete = self::$db->getRow("Delete from cargacamion where cod_camion= '$id'");   
   return 1;          
  }

  function insertCargaCamion($cod_camion,$cod_ruta,$cadie,$puerta) {
    //echo $cod_camion .$cod_ruta .$cadie .$puerta;
    $new_row = self::$db->getRow("Insert into cargacamion (cod_camion,cod_ruta,cadie,puerta) values ('$cod_camion','$cod_ruta','$cadie','$puerta')");
 return 1;               
  }

}
?> 