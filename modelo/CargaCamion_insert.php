<?php
 session_start();
 include_once('CargaCamionCollector.php');

 

 $cod_camion = $_POST['combocamion'];
 $cod_ruta = $_POST['comboruta'];
 $cadie = $_POST['txtcadie'];
 $puerta = $_POST['txtpuerta'];
 

$CargaCamionCollectorObj = new CargaCamionCollector();
//echo($ruc);
 $ObjCargaCamion = $CargaCamionCollectorObj->showCargaCamionId($cod_camion);
 //print_r($ObjTransportista->getruc());

 if ( $ObjCargaCamion->getcod_camion() != '')
 {
	echo"<script>alert('La Placa del Camión ya existe');window.location.href=\"../views/CargaCamionesView.php\"</script>";		
	}
else
 {
	$CargaCamionCollectorObj->insertCargaCamion($cod_camion,$cod_ruta,$cadie,$puerta);
        // header("location: ../views/TransportistaView.php");  
         echo"<script>alert('Registro Grabado con exito');window.location.href=\"../views/CargaCamionesView.php\"</script>";
	}

?>