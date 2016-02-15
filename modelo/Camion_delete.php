<?php
session_start();
 include_once('CamionCollector.php');
 include_once('camion.php');
 $id = $_GET['id'];
 $CamionCollectorObj = new CamionCollector();
 $CamionCollectorObj->deleteCamion($id);

//echo"<script>alert('Eliminación} exitosa');</script>";  
header("location: Camion_list.php"); 
?>