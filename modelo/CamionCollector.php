<?php   
include_once('camion.php');
include_once('conexion.php');

class CamionCollector extends conexion
{
  
  function showCamion() {
    $rows = self::$db->getRows("SELECT * FROM camion ");        
    $arrayCamion= array();        
    foreach ($rows as $c){
      $aux = new camion($c{'placa'},$c{'anio'},$c{'marca'},$c{'tipo'},$c{'tonelaje'},$c{'cadies'},$c{'pallets'},$c{'tipocombustible'},$c{'cod_chofer'},$c{'cod_transportista'});
      array_push($arrayCamion, $aux);
    }
    return $arrayCamion;        
  }
 
  function showCamionId($id) {
    $row = self::$db->getRow("SELECT * FROM camion where placa = '$id'");   
    $camion = new camion($row{'placa'},$row{'anio'},$row{'marca'},$row{'tipo'},$row{'tonelaje'},$row{'cadies'},$row{'pallets'},$row{'tipocombustible'},$row{'cod_chofer'},$row{'cod_transportista'});
    //echo($row{'tiporuta'});
    return $camion;        
  }

  function updateCamion($placa,$anio,$marca,$tipo,$tonelaje,$cadies,$pallets,$tipocombustible,$cod_chofer,$cod_transportista) {
    $update = self::$db->getRow("Update camion set placa='$placa',anio='$anio',marca='$marca',tipo='$tipo',tonelaje='$tonelaje',cadies='$cadies',pallets='$pallets',tipocombustible='$tipocombustible',cod_chofer='$cod_chofer',cod_transportista='$cod_transportista' where placa='$placa'");             
 return 1;  
  }

  function deleteCamion($id) {
 $delete = self::$db->getRow("Delete from camion where placa= '$id'");   
   return 1;          
  }

  function insertCamion($placa,$anio,$marca,$tipo,$tonelaje,$cadies,$pallets,$tipocombustible,$cod_chofer,$cod_transportista) {
    echo $placa .$anio .$marca .$tipo .$tonelaje .$cadies .$pallets .$tipocombustible .$cod_chofer .$cod_transportista;
    $new_row = self::$db->getRow("Insert into camion (placa,anio,marca,tipo,tonelaje,cadies,pallets,tipocombustible,cod_chofer,cod_transportista) values ('$placa','$anio','$marca','$tipo','$tonelaje','$cadies','$pallets','$tipocombustible','$cod_chofer','$cod_transportista')");
 return 1;               
  }

}
?> 