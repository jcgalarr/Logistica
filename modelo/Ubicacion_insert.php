<?php
 session_start();
 include_once('UbicacionCollector.php');
 

 $pasillo = $_POST['txtpasillo'];
 $tipo = $_POST['txttipo'];
 $posinicio = $_POST['txtposini'];
 $posfinal = $_POST['txtposfin'];
 $salto = $_POST['txtsalto'];
 


 //echo $pasillo .$tipo .$posinicio .$posfinal .$salto ;
 $UbicacionCollectorObj = new UbicacionCollector();
 $UbicacionCollectorObj->insertUbicacion($pasillo,$posinicio,$posfinal,$salto,$tipo);

//echo"<script>alert('Registro exitoso');</script>";  
header("location: ../views/UbicacionView.php");  

?>