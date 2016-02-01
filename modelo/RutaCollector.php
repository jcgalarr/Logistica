<?php		

include_once('Ruta.php');
include_once('conexion.php');

class RutaCollector extends conexion
{
  
  function showRuta() {
    $rows = self::$db->getRows("SELECT * FROM ruta ");        
    $arrayAreaTrabajo= array();        
    foreach ($rows as $c){
      $aux = new Ruta($c{'codigo'},$c{'descripcion'});
      array_push($arrayRuta, $aux);
    }
    return $arrayRuta;        
  }
 
  function showRuta($codigo) {
    $row = self::$db->getRow("SELECT * FROM ruta where codigo = $codigo");   
    //print_r ($row);     
    $Ruta = new Ruta($row{'codigo'},$row{'descripcion'},$row{'origen'},$row{'destino'},$row{'tiemporuta'},$row{'tiporuta'});
    return $Ruta;        
  }

  function updateRuta($codigo,$descripcion,$origen,$destino,$tiemporuta,$tiporuta) {
    $update = self::$db->getRow("Update ruta set origen='$origen',destino='$destino' where codigo=$codigo");             
 return 1;  
  }

  function deleteRuta($codigo) {
   // $delete = self::$db->deleteRow("Delete from area_trabajo where id_area_trabajo=$codigo");
 $delete = self::$db->getRow("Delete from ruta where codigo=$codigo");   
   return 1;          
  }

  function insertRuta($codigo,$descripcion,$origen,$destino,$tiemporuta,$tiporuta) {
    $new_row = self::$db->getRow("Insert into ruta (codigo,descripcion,origen,destino,tiemporuta,tiporuta) values ('$codigo','$descripcion','$origen','$destino','$tiemporuta','$tiporuta'),");
 return 1;               
  }

  //function selectMax() {
  //  $row = self::$db->getRow("SELECT MAX(codigo) from ruta");  
  //  $max = $row{'max'};
	//return $max;
  //}

}
?>
