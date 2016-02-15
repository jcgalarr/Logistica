<?php
session_start();
 include_once('BodegaCollector.php');


 $codigo = $_POST['txtcodigo'];
 $descripcion = $_POST['txtdescripcion'];
 $direccion = $_POST['txtdireccion'];
 $telefono = $_POST['txttel'];
 
 $BodegaCollectorObj = new BodegaCollector();
 $BodegaCollectorObj->updateBodega($codigo,$descripcion,$telefono,$direccion);
  //header("location: Transportista_list.php"); 
echo"<script>alert('Registro Actualizado con exito');window.location.href=\"../modelo/Bodega_list.php\"</script>";
?>

