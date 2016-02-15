<?php		

include_once('Departamento.php');
include_once('conexion.php');

class DepartamentoCollector extends conexion
{
  
  function showDepartamento() {
    $rows = self::$db->getRows("SELECT * FROM departamento ");        
    $arrayDepartamento= array();        
    foreach ($rows as $c){
      $aux = new Departamento($c{'codigo'},$c{'descripcion'});
      array_push($arrayDepartamento, $aux);
    }
    return $arrayDepartamento;        
  }
 
  function showDepartamentoId($codigo) {
    $row = self::$db->getRow("SELECT * FROM departamento where codigo = $codigo");   
    //print_r ($row);     
    $Departamento = new Departamento($row{'codigo'},$row{'descripcion'});
    return $Departamento;        
  }


  function updateDepartamento($codigo,$descripcion) {
	
	//echo $numcelular2;
    $update = self::$db->getRow("Update departamento set descripcion='$descripcion' where codigo=$codigo");             
 return 1;  
  }


  function deleteDepartamento($codigo) {
   // $delete = self::$db->deleteRow("Delete from area_trabajo where id_area_trabajo=$codigo");
 $delete = self::$db->getRow("Delete from departamento where codigo=$codigo");   
   return 1;          
  }

  function insertDepartamento($descripcion) {
    $new_row = self::$db->getRow("Insert into departamento (descripcion) values ('$descripcion')");
 return 1;               
  }

  //function selectMax() {
  //  $row = self::$db->getRow("SELECT MAX(codigo) from departamento");  
  //  $max = $row{'max'};
	//return $max;
  //}

}
?>
