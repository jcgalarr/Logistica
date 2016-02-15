<?php		
session_start();
include_once('Transportista.php');
include_once('conexion.php');

class TransportistaCollector extends conexion
{
  
  function showTransportista() {
    $rows = self::$db->getRows("SELECT * FROM transportista ");        
    $arrayTransportista= array();        
    foreach ($rows as $c){
      $aux = new Transportista($c{'ruc'},$c{'nombre'},$c{'direccion'},$c{'telefono1'},$c{'telefono2'},$c{'numcelular1'},$c{'numcelular2'});

      array_push($arrayTransportista, $aux);
    }
    return $arrayTransportista;        
  }
 
  function showTransportistaId($id) {
    	//echo $id;
    $row = self::$db->getRow("SELECT * FROM transportista where ruc = '$id'");   
    //print_r ($row);     
    $Transportista = new Transportista($row{'ruc'},$row{'nombre'},$row{'direccion'},$row{'telefono1'},$row{'telefono2'},$row{'numcelular1'},$row{'numcelular2'});
    //print_r($Transportista);
    return $Transportista;   
     
  }


  function updateTransportista($ruc,$nombre,$direccion,$telefono1,$telefono2,$numcelular1,$numcelular2) {
	
	//echo $numcelular2;
    $update = self::$db->getRow("Update transportista set nombre='$nombre',direccion='$direccion',telefono1='$telefono1',telefono2='$telefono2',numcelular1='$numcelular1',numcelular2='$numcelular2' where ruc='$ruc'");             
 return 1;  
  }

  function deleteTransportista($id) {

 $delete = self::$db->getRow("Delete from transportista where ruc= '$id'");   
   return 1;          
  }

  function insertTransportista($ruc,$nombre,$direccion,$telefono1,$telefono2,$numcelular1,$numcelular2) {
    $new_row = self::$db->getRow("Insert into transportista (ruc,nombre,direccion,telefono1,telefono2,numcelular1,numcelular2) values ('$ruc','$nombre','$direccion','$telefono1','$telefono2','$numcelular1','$numcelular2')");
 return 1;               
  }



}
?>

