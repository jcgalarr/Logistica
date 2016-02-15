<?php
session_start();
 include_once('UbicacionCollector.php');
 include_once('Ubicacion.php');
 $id = $_GET['id'];
 $UbicacionCollectorObj = new UbicacionCollector();
 $UbicacionCollectorObj->deleteUbicacion($id);

//echo"<script>alert('Eliminación} exitosa');</script>";  
header("location: Ubicacion_list.php"); 
?>