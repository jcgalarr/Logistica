<?php
session_start();
 include_once('CargoCollector.php');


 $codigo = $_POST['txtcodigo'];
 $descripcion = $_POST['txtdescripcion'];


 $CargoCollectorObj = new CargoCollector();
 $CargoCollectorObj->updateCargo($codigo,$descripcion);
  header("location: Cargo_list.php"); 
?>

