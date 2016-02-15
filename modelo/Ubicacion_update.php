<?php
session_start();
 include_once('UbicacionCollector.php');

 $codigo = $_POST['txtcodigo'];
 $pasillo = $_POST['txtpasillo'];
 $tipo = $_POST['txttipo'];
 $posinicio = $_POST['txtposinicio'];
 $posfinal = $_POST['txtposfinal'];
 $salto = $_POST['txtsalto'];
 
 //echo $codigo .$pasillo .$tipo .$posinicio .$posfinal .$salto;
 $UbicacionCollectorObj = new UbicacionCollector();
 $UbicacionCollectorObj->updateUbicacion($codigo,$pasillo,$tipo,$posinicio,$posfinal,$salto);

  

header("location: Ubicacion_list.php"); 

?>