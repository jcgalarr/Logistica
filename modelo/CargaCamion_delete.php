<?php
session_start();
 include_once('CargaCamionCollector.php');
 include_once('cargacamiones.php');
 $id = $_GET['id'];
 $CargaCamionCollectorObj = new CargaCamionCollector();
 $CargaCamionCollectorObj->deleteCargaCamion($id);

//echo"<script>alert('Eliminación} exitosa');</script>";  
header("location: CargaCamion_list.php"); 
?>