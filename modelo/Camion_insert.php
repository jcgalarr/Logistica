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

$CamionCollectorObj = new CamionCollector();
//echo($ruc);
 $ObjCamion = $CamionCollectorObj->showCamionId($placa);
 //print_r($ObjTransportista->getruc());

 if ( $ObjCamion->getplaca() != '')
 {
	echo"<script>alert('La Placa del Camión ya existe');window.location.href=\"../views/CamionesView.php\"</script>";		
	}
else
 {
	$CamionCollectorObj->insertCamion($placa,$anio,$marca,$tipo,$tonelaje,$cadies,$pallets,$tipocombustible,$cod_chofer,$cod_transportista);
        // header("location: ../views/TransportistaView.php");  
         echo"<script>alert('Registro Grabado con exito');window.location.href=\"../views/CamionesView.php\"</script>";
	}

?>