<?php		
session_start();
include_once('Almacena.php');
include_once('conexion.php');

class AlmacenaCollector extends conexion
{
  
  function showAlmacena() {
    $rows = self::$db->getRows("SELECT * FROM contenedor ");        
    $arrayTransportista= array();        
    foreach ($rows as $c){
      $aux = new Almacena($c{'cont_tipo'},$c{'cont_num'},$c{'contenido_tipo'},$c{'contenido_num'},$c{'ubinasignada'},$c{'ubitipo'},$c{'acontrolar'},$c{'bodega'}, $c{'stock'},$c{'fecha_proceso'},$c{'hora_proceso'},$c{'guia'},$c{'articulo'});

      array_push($arrayAlmacena, $aux);
    }
    return $arrayAlmacena;        
  }
 
  function showAlmacenaId($contnum) {
    //echo $id;
    $row = self::$db->getRow("SELECT * FROM contenedor where cont_tipo = '301' and cont_num = '$contnum' ");   
    //print_r ($row);     
    $Almacena = new Almacena($row{'cont_tipo'},$row{'cont_num'},$row{'contenido_tipo'},$row{'contenido_num'},$row{'ubinasignada'},$row{'ubitipo'},$row{'acontrolar'},$row{'bodega'}, $row{'stock'},$row{'fecha_proceso'},$row{'hora_proceso'},$row{'guia'},$row{'articulo'});
    return $Almacena;        
  }



  function updateAlmacena($conttipo,$contnum,$contenidotipo,$contenidonum,$ubiasignada,$ubitipo,$acontrolar,$bodega,$stock,$fechaproceso,$horaproceso,$guia,$articulo) {
	
	//echo $numcelular2;
    $update = self::$db->getRow("Update contenedor set cont_tipo='$conttipo',cont_num='$contnum',contenido_tipo='$contenidotipo',contenido_num='$contenidonum',ubinasignada='$ubiasignada',ubitipo='$ubitipo',ubitipo='$ubitipo',acontrolar='$acontrolar',bodega='$bodega',stock='$stock',fecha_proceso='$fechaproceso',hora_proceso='$horaproceso',guia='$guia',articulo='$articulo' where cont_tipo='$conttipo' and cont_num='$contnum' and contenido_tipo='$contenidotipo' and contenido_num='$contenidonum'");             
 return 1;  
  }

  function deleteAlmacena($conttipo,$contnum,$contenidotipo,$contenidonum) {

 $delete = self::$db->getRow("Delete from contenedor where cont_tipo= '$conttipo' and cont_num='$contnum' and contenido_tipo='$contenidotipo' and contenido_num='$contenidonum'");   
   return 1;          
  }

  function insertAlmacena($conttipo,$contnum,$contenidotipo,$contenidonum,$ubiasignada,$ubitipo,$acontrolar,$bodega,$stock,$fechaproceso,$horaproceso,$guia,$articulo) {
    $new_row = self::$db->getRow("Insert into contenedor (cont_tipo,cont_num,contenido_tipo,contenido_num,ubinasignada,ubitipo,acontrolar,bodega,stock,fecha_proceso,hora_proceso,guia,articulo) values ('$conttipo','$contnum','$contenidotipo','$contenidonum','$ubiasignada','$ubitipo','$acontrolar','$bodega','$stock','$fechaproceso','$horaproceso','$guia','$articulo')");
 return 1;               
  }



}
?>

