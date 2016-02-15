<?php
session_start();
 include_once('DepartamentoCollector.php');


 $codigo = $_POST['txtcodigo'];
 $descripcion = $_POST['txtdescripcion'];


 $DepartamentoCollectorObj = new DepartamentoCollector();
 $DepartamentoCollectorObj->updateDepartamento($codigo,$descripcion);
  header("location: Departamento_list.php"); 
?>

