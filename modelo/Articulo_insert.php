<?php
 session_start();
 include_once('ArticuloCollector.php');
 

 $nombre = $_POST['txtnombre'];
 $descripcion = $_POST['txtdescripcion'];
 $unidadmedida = $_POST['txtunid'];
 $estado = $_POST['txtestado'];

  
 $ArticuloCollectorObj = new ArticuloCollector();
 $ArticuloCollectorObj->insertArticulo($nombre,$descripcion,$unidadmedida,$estado);

//echo"<script>alert('Registro exitoso');</script>";  
header("location: ../views/ArticuloView.php");  

?>