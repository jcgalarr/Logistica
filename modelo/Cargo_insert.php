<?php
 session_start();
 include_once('CargoCollector.php');
 //$id = $_POST['ID'];
 
 $descripcion = $_POST['txtdescripcion'];
 
 $CargoCollectorObj = new CargoCollector();
 
	$CargoCollectorObj->insertCargo($descripcion);
         echo"<script>alert('Registro Grabado con exito');window.location.href=\"../views/CargoView.php\"</script>";

	
?>

