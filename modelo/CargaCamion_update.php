<?php
session_start();
 include_once('CargaCamionCollector.php');

 $cod_camion = $_POST['combocamion'];
 $cod_ruta = $_POST['comboruta'];
 $cadie = $_POST['txtcadie'];
 $puerta = $_POST['txtpuerta'];
 

 //echo $placa .$anio .$marca .$tipo .$tonelaje .$cadies .$pallets .$tipocombustible .$cod_chofer .$cod_transportista;

 $CargaCamionCollectorObj = new CargaCamionCollector();
 $CargaCamionCollectorObj->updateCargaCamion($cod_camion,$cod_ruta,$cadie,$puerta);

  

header("location: CargaCamion_list.php"); 

?>