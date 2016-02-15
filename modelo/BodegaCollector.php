<?php		

include_once('Bodega.php');
include_once('conexion.php');

class BodegaCollector extends conexion
{
  
  function showBodega() {
    $rows = self::$db->getRows("SELECT * FROM bodega ");        
    $arrayBodega= array();        
    foreach ($rows as $c){
      $aux = new Bodega($c{'codigo'},$c{'descripcion'},$c{'telefono'},$c{'direccion'});

      array_push($arrayBodega, $aux);
    }
    return $arrayBodega;        
  }
 
  function showBodegaId($id) {
    	//echo $id;
    $row = self::$db->getRow("SELECT * FROM bodega where codigo = $id");   
    //print_r ($row);     
    $Bodega = new Bodega($row{'codigo'},$row{'descripcion'},$row{'telefono'},$row{'direccion'});
    //print_r($Bodega);
    return $Bodega;   
     
  }


  function updateBodega($codigo,$descripcion,$telefono,$direccion) {
	
	//echo $numcelular2;
    $update = self::$db->getRow("Update bodega set descripcion='$descripcion',telefono='$telefono',direccion='$direccion' where codigo=$codigo");             
 return 1;  
  }

 

  function deleteBodega($id) {

 $delete = self::$db->getRow("Delete from bodega where codigo= $id");   
   return 1;          
  }

  function insertBodega($descripcion,$telefono,$direccion) {
    $new_row = self::$db->getRow("Insert into bodega (descripcion,telefono,direccion) values ('$descripcion','$telefono','$direccion')");
 return 1;               
  }



}
?>

