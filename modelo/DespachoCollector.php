<?php		

include_once('Despacho.php');
include_once('conexion.php');

class DespachoCollector extends conexion
{
  
  function updateDespacho($conttipo,$contnum,$contenidotipo,$contenidonum,$ubiasignada,$ubitipo,$acontrolar,$bodega,$stock,$fechaproceso,$horaproceso,$guia,$articulo) {
     $row = self::$db->getRow("SELECT * FROM contenedor where cont_tipo = '301' and articulo = '$articulo'");   
    
    $stock1 = (int)$row{'stock'};  
    $stock1 = $stock1 - $stock;
    $update = self::$db->getRow("Update contenedor set stock = '$stock1' where cont_tipo='301' and articulo='$articulo'");             
    return 1; 	
	
  }

  function deleteDespacho($conttipo,$contnum,$contenidotipo,$contenidonum,$articulo) {

 $delete = self::$db->getRow("Delete from contenedor where cont_tipo= '$conttipo' and cont_num='$contnum' and contenido_tipo='$contenidotipo' and contenido_num='$contenidonum' and articulo = '$articulo'");   
   return 1;          
  }


  


}
?>
