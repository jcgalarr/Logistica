<?php
session_start();
 include_once('CamionCollector.php');

 $placa = $_POST['txtplaca'];
 $anio = $_POST['txtanio'];
 $marca = $_POST['marca'];
 $tipo = $_POST['tipo'];
 $tonelaje = $_POST['txttonelaje'];
 $cadies = $_POST['txtcadie'];	
 $pallets = $_POST['txtpallet'];
 $tipocombustible = $_POST['combustible'];
 $cod_chofer = $_POST['combochofer'];
 $cod_transportista = $_POST['combotransportista'];

 //echo $placa .$anio .$marca .$tipo .$tonelaje .$cadies .$pallets .$tipocombustible .$cod_chofer .$cod_transportista;

 $CamionCollectorObj = new CamionCollector();
 $CamionCollectorObj->updateCamion($placa,$anio,$marca,$tipo,$tonelaje,$cadies,$pallets,$tipocombustible,$cod_chofer,$cod_transportista);

  

header("location: Camion_list.php"); 

?>