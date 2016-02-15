<?php
session_start();

include_once('DepartamentoCollector.php');
include_once('Departamento.php'); 


 
 $id = $_GET['id'];

// echo $id;

 $DepartamentoCollectorObj = new DepartamentoCollector();
 $DepartamentoCollectorObj->deleteDepartamento($id);
header("location: Departamento_list.php"); 
?>

