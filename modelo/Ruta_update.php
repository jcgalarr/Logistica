<?php
session_start();
 include_once('RutaCollector.php');

 $codigo = $_POST['txtcodigo'];
 $descripcion = $_POST['txtdescripcion'];
 $origen = $_POST['txtorigen'];
 $destino = $_POST['txtdestino'];
 $tiemporuta = $_POST['txttiempo'];
 $tiporuta = $_POST['tipo'];

 $RutaCollectorObj = new RutaCollector();
 $RutaCollectorObj->updateRuta($codigo,$descripcion,$origen,$destino,(int)$tiemporuta,$tiporuta);

 header("location: Mantenimiento_Rutas.php"); 

?>
