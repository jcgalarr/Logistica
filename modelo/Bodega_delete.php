<?php
session_start();
 include_once('BodegaCollector.php');
 include_once('Bodega.php');
 $id = $_GET['id'];
 $BodegaCollectorObj = new BodegaCollector();
 $BodegaCollectorObj->deleteBodega($id);
header("location: Bodega_list.php"); 
?>

