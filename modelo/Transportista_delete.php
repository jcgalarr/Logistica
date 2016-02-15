<?php
session_start();
 include_once('TransportistaCollector.php');
 include_once('Transportista.php');
 $id = $_GET['id'];
 $TransportistaCollectorObj = new TransportistaCollector();
 $TransportistaCollectorObj->deleteTransportista($id);
header("location: Transportista_list.php"); 
?>

