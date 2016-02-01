<?php		

include_once('GrupoDetalle.php');
include_once('conexion.php');

class GrupoDetalleCollector extends conexion
{
  
  function showGrupoDetalle() {
    $rows = self::$db->getRows("SELECT * FROM grupodetalle ");        
    $arrayAreaTrabajo= array();        
    foreach ($rows as $c){
      $aux = new GrupoDetalle($c{'codigo'},$c{'grupo'},$c{'modulo'},$c{'secuencia'},$c{'descripcion'},$c{'fecha'});
      array_push($arrayGrupoDetalle, $aux);
    }
    return $arrayGrupoDetalle;        
  }
 
  function showGrupoDetalle($codigo) {
    $row = self::$db->getRow("SELECT * FROM grupodetalle where codigo = $codigo");   
    $GrupoDetalle = new GrupoDetalle($row{'codigo'},$row{'grupo'},$row{'modulo'},$row{'secuencia'},$row{'descripcion'}, $row{'fecha'});
    return $GrupoDetalle;        
  }

  function updateGrupoDetalle($codigo,$grupo,$modulo,$secuencia,$descripcion,$fecha) {
    $update = self::$db->getRow("Update grupodetalle set grupo='$grupo',modulo='$modulo',secuencia='$secuencia',descripcion='$descripcion',fecha='$fecha' where codigo=$codigo");             
	return 1;  
  }

  function deleteGrupoDetalle($codigo) {
   $delete = self::$db->getRow("Delete from grupodetalle where codigo=$codigo");   
   return 1;          
  }

  function insertGrupoDetalle($codigo,$grupo,$modulo,$secuencia,$descripcion,$fecha) {
    $new_row = self::$db->getRow("Insert into grupodetalle (codigo,grupo,modulo,secuencia,descripcion, fecha) values ('$codigo','$grupo','$modulo','$secuencia','$descripcion','$fecha'),");
 return 1;               
  }

  

}
?>
