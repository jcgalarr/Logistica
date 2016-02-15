<?php		

include_once('Cargo.php');
include_once('conexion.php');

class CargoCollector extends conexion
{
  
  function showCargo() {
    $rows = self::$db->getRows("SELECT * FROM cargo ");        
    $arrayCargo= array();        
    foreach ($rows as $c){
      $aux = new Cargo($c{'codigo'},$c{'descripcion'});

      array_push($arrayCargo, $aux);
    }
    return $arrayCargo;        
  }
 
  function showCargoId($id) {
    	//echo $id;
    $row = self::$db->getRow("SELECT * FROM cargo where codigo = '$id'");   
    //print_r ($row);     
    $Cargo = new Cargo($row{'codigo'},$row{'descripcion'});
    //print_r($Cargo);
    return $Cargo;   
     
  }


  function updateCargo($codigo,$descripcion) {
    $update = self::$db->getRow("Update cargo set descripcion='$descripcion' where codigo='$codigo'");             
   return 1;  
  }

  function deleteCargo($id) {

 $delete = self::$db->getRow("Delete from cargo where codigo= '$id'");   
   return 1;          
  }

  function insertCargo($descripcion) {
    $new_row = self::$db->getRow("Insert into cargo (descripcion) values ('$descripcion')");
 return 1;               
  }



}
?>

