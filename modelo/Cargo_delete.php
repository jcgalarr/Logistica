<?php
session_start();

include_once('CargoCollector.php');
include_once('Cargo.php'); 


 
 $id = $_GET['id'];

// echo $id;

 $CargoCollectorObj = new CargoCollector();
 $CargoCollectorObj->deleteCargo($id);
header("location: Cargo_list.php"); 
?>

