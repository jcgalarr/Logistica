<?php   
include_once('articulo.php');
include_once('conexion.php');

class ArticuloCollector extends conexion
{
  
  function showArticulo() {
    $rows = self::$db->getRows("SELECT * FROM articulo ");        
    $arrayArticulo= array();        
    foreach ($rows as $c){
      $aux = new articulo($c{'codigo'},$c{'nombre'},$c{'descripcion'},$c{'unidadmedida'},$c{'estado'});
      array_push($arrayArticulo, $aux);
    }
    return $arrayArticulo;        
  }
 
  function showArticuloId($id) {
    $row = self::$db->getRow("SELECT * FROM articulo where codigo = '$id'");   
    $articulo = new articulo($row{'codigo'},$row{'nombre'},$row{'descripcion'},$row{'unidadmedida'},$row{'estado'});
    //echo($row{'tiporuta'});
    return $articulo;        
  }

  function updateArticulo($codigo,$nombre,$descripcion,$unidadmedida,$estado) {
    $update = self::$db->getRow("Update articulo set nombre='$nombre',descripcion='$descripcion',unidadmedida='$unidadmedida',estado='$estado' where codigo='$codigo'");             
 return 1;  
  }

  function deleteArticulo($id) {
 $delete = self::$db->getRow("Delete from articulo where codigo= '$id'");   
   return 1;          
  }

  function insertArticulo($nombre,$descripcion,$unidadmedida,$estado) {
    $new_row = self::$db->getRow("Insert into articulo (nombre,descripcion,unidadmedida,estado) values ('$nombre','$descripcion','$unidadmedida','$estado')");
 return 1;               
  }

}
?> 