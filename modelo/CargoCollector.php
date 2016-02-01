<?php		

include_once('Cargo.php');
include_once('conexion.php');

class CargoCollector extends conexion
{
  
  function showCargo() {
    $rows = self::$db->getRows("SELECT * FROM cargo ");        
    $arrayAreaTrabajo= array();        
    foreach ($rows as $c){
      $aux = new Cargo($c{'codigo'},$c{'descripcion'});
      array_push($arrayCargo, $aux);
    }
    return $arrayCargo;        
  }
 
  function showCargo($codigo) {
    $row = self::$db->getRow("SELECT * FROM cargo where codigo = $codigo");   
    //print_r ($row);     
    $Cargo = new Cargo($row{'codigo'},$row{'descripcion'});
    return $Cargo;        
  }

  function updateCargo($codigo,$descripcion) {
    $update = self::$db->getRow("Update cargo set descripcion='$descripcion' where codigo=$codigo");             
 return 1;  
  }

  function deleteCargo($codigo) {
   // $delete = self::$db->deleteRow("Delete from area_trabajo where id_area_trabajo=$codigo");
 $delete = self::$db->getRow("Delete from cargo where codigo=$codigo");   
   return 1;          
  }

  function insertCargo($codigo,$descripcion) {
    $new_row = self::$db->getRow("Insert into cargo (codigo,descripcion) values ('$codigo','$descripcion'),");
 return 1;               
  }

  //function selectMax() {
  //  $row = self::$db->getRow("SELECT MAX(codigo) from cargo");  
  //  $max = $row{'max'};
	//return $max;
  //}

}
?>
