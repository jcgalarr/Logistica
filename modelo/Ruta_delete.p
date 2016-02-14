<?php
session_start();
 include_once('RutaCollector.php');
 include_once('Ruta.php');
 $id = $_GET['id'];
 $RutaCollectorObj = new RutaCollector();
 $RutaCollectorObj->deleteRuta($id);

header("location: Mantenimiento_Rutas.php"); 
?>
