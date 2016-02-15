<?php
 session_start();
 include_once('BodegaCollector.php');
 //$id = $_POST['ID'];
 
 
 $descripcion = $_POST['txtdescripcion'];
 $direccion = $_POST['txtdireccion'];
 $telefono = $_POST['txttel'];
 
 $BodegaCollectorObj = new BodegaCollector();
	$BodegaCollectorObj->insertBodega($descripcion,$direccion,$telefono);
         echo"<script>alert('Registro Grabado con exito');window.location.href=\"../views/BodegaView.php\"</script>";
?>

