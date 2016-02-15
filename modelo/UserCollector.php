<?php		

include_once('User.php');
include_once('conexion.php');

class UserCollector extends conexion
{
  
  function showUser() {
    $rows = self::$db->getRows("SELECT * FROM examen ");        
    $arrayUser= array();        
    foreach ($rows as $c){
      $aux = new User($c{'id'},$c{'nombre'});

      array_push($arrayUser, $aux);
    }
    return $arrayUser;        
  }
 
  
  function insertUser($id,$nombre) {
    $new_row = self::$db->getRow("Insert into examen (id,nombre) values ('$id','$nombre')");
 return 1;               
  }



}
?>
