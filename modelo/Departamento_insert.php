<?php
 session_start();
 include_once('DepartamentoCollector.php');
 //$id = $_POST['ID'];
 
 $descripcion = $_POST['txtdescripcion'];
 
 $CargoCollectorObj = new DepartamentoCollector();
 
	$CargoCollectorObj->insertDepartamento($descripcion);
         echo"<script>alert('Registro Grabado con exito');window.location.href=\"../views/DepartamentoView.php\"</script>";

	
?>

