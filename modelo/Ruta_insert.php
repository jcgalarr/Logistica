<?php
 session_start();
 include_once('RutaCollector.php');
 
 $descripcion = $_POST['txtdescripcion'];
 $origen = $_POST['txtorigen'];
 $destino = $_POST['txtdestino'];
 $tiemporuta = $_POST['txttiempo'];
 $tiporuta = $_POST['tipo'];
  
 $RutaCollectorObj = new RutaCollector();
 $RutaCollectorObj->insertRuta($descripcion,$origen,$destino,(int)$tiemporuta,$tiporuta);
 
header("location: ../views/RutasView.php");  
?>
