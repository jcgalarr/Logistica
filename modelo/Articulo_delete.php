<?php
session_start();
 include_once('ArticuloCollector.php');
 include_once('articulo.php');
 $id = $_GET['id'];
 $ArticuloCollectorObj = new ArticuloCollector();
 $ArticuloCollectorObj->deleteArticulo($id);

//echo"<script>alert('Eliminación} exitosa');</script>";  
header("location: Articulo_list.php"); 
?>