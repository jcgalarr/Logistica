<?php		

include_once('Transportista.php');
include_once('conexion.php');

class TransportistaCollector extends conexion
{
  
  function showTransportista() {
    $rows = self::$db->getRows("SELECT * FROM transportista ");        
    $arrayAreaTrabajo= array();        
    foreach ($rows as $c){
      $aux = new Transportista($c{'ruc'},$c{'nombre'});
      array_push($arrayTransportista, $aux);
    }
    return $arrayTransportista;        
  }
 
  function showTransportista($id) {
    $row = self::$db->getRow("SELECT * FROM transportista where ruc = $id");   
    //print_r ($row);     
    $Transportista = new Transportista($row{'ruc'},$row{'nombre'});
    return $Transportista;        
  }

  function updateTransportista($id, $nombre,$direccion) {
    $update = self::$db->getRow("Update transportista set nombre='$nombre',direccion='$direccion' where ruc=$id");             
 return 1;  
  }

  function deleteTransportista($id) {
   // $delete = self::$db->deleteRow("Delete from area_trabajo where id_area_trabajo=$id");
 $delete = self::$db->getRow("Delete from transportista where ruc=$id");   
   return 1;          
  }

  function insertTransportista($ruc,$nombre,$direccion,$telefono1,$telefono2,$numcelular1,$numcelular2,$tipo,$contrato) {
    $new_row = self::$db->getRow("Insert into transportista (ruc,nombre,direccion,telefono1,telefono2,numcelular1,numcelular2,tipo,contrato) values ('$ruc','$nombre','$direccion','$telefono1','$telefono2','$numcelular1','$numcelular2','$tipo','$contrato'),");
 return 1;               
  }

  //function selectMax() {
  //  $row = self::$db->getRow("SELECT MAX(ruc) from transportista");  
  //  $max = $row{'max'};
//return $max;
  //}

}
?>

