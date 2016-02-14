<?php
session_start();
 include_once('ChoferCollector.php');
 include_once('Chofer.php');
 $id = $_GET['id'];
 $ChoferCollectorObj = new ChoferCollector();
 $ChoferCollectorObj->deleteChofer($id);

header("location: Mantenimiento_Chofer.php");  
?>
