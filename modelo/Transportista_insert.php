<?php
 session_start();
 include_once('TransportistaCollector.php');
 //$id = $_POST['ID'];
 
 $ruc = $_POST['txtruc'];
 $nombre = $_POST['txtnombre'];
 $direccion = $_POST['txtdireccion'];
 $telefono1 = $_POST['txttel1'];
 $telefono2 = $_POST['txttel2'];
 $celular1 = $_POST['txtcelular1'];
 $celular2 = $_POST['txtcelular2'];
 
 $TransportistaCollectorObj = new TransportistaCollector();
//echo($ruc);
 $ObjTransportista = $TransportistaCollectorObj->showTransportistaId($ruc);
 //print_r($ObjTransportista->getruc());

 if ( $ObjTransportista->getruc() != '')
 {
	echo"<script>alert('Ruc ya existe');window.location.href=\"../views/TransportistaView.php\"</script>";		
	}
else
 {
	$TransportistaCollectorObj->insertTransportista($ruc,$nombre,$direccion,$telefono1,$telefono2,$celular1,$celular2);
        // header("location: ../views/TransportistaView.php");  
         echo"<script>alert('Registro Grabado con exito');window.location.href=\"../views/TransportistaView.php\"</script>";
	}

	
?>

