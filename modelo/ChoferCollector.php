<?php		
include_once('Chofer.php');
include_once('conexion.php');

class ChoferCollector extends conexion
{
  
  function showChofer() {
    $rows = self::$db->getRows("SELECT * FROM chofer ");        
    $arrayChofer= array();        
    foreach ($rows as $c){
      $aux = new Chofer($c{'codigo'},$c{'nombre'},$c{'apellido'},$c{'licencia'},$c{'categoria_lic'},$c{'numcelular1'},$c{'recordpolicial'},$c{'transportista'});
      array_push($arrayChofer, $aux);
    }
    return $arrayChofer;        
  }
 
   function validaLicencia($id) {
    $row = self::$db->getRow("SELECT * FROM chofer where licencia = '$id'");
    $Chofer = new Chofer($row{'codigo'},$row{'nombre'},$row{'apellido'},$row{'licencia'},$row{'categoria_lic'},$row{'numcelular1'},$row{'recordpolicial'},$row{'transportista'});
    return $Chofer;        
  }



  function showChoferId($id) {
    //echo $id;
    $row = self::$db->getRow("SELECT * FROM chofer where codigo = '$id'");   
    //print_r ($row);     
    $Chofer = new Chofer($row{'codigo'},$row{'nombre'},$row{'apellido'},$row{'licencia'},$row{'categoria_lic'},$row{'numcelular1'},$row{'recordpolicial'},$row{'transportista'});
    return $Chofer;        
  }


  function updateChofer($codigo,$nombre,$apellido,$licencia,$categoria_lic,$numcelular1,$recordpolicial,$transportista) {
    $update = self::$db->getRow("Update chofer set nombre='$nombre',apellido='$apellido',licencia='$licencia',categoria_lic='$categoria_lic',numcelular1='$numcelular1',recordpolicial='$recordpolicial',transportista='$transportista' where codigo='$codigo'");             
 return 1;  
  }

  function deleteChofer($id) {
 $delete = self::$db->getRow("Delete from chofer where codigo= '$id'");   
   return 1;          
  }

  function insertChofer($nombre,$apellido,$licencia,$categoria_lic,$numcelular1,$recordpolicial, $transportista) {
    $new_row = self::$db->getRow("Insert into chofer (nombre,apellido,licencia,categoria_lic,numcelular1,recordpolicial,transportista) values ('$nombre','$apellido','$licencia','$categoria_lic','$numcelular1','$recordpolicial','$transportista')");
 return 1;               
  }
}
?>

