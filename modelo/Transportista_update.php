<?php
session_start();
 include_once('TransportistaCollector.php');
 //include_once('Transportista.php');

 $ruc = $_POST['txtruc'];
 $nombre = $_POST['txtnombre'];
 $direccion = $_POST['txtdireccion'];
 $telefono1 = $_POST['txttel1'];
 $telefono2 = $_POST['txttel2'];
 $celular1 = $_POST['txtcelular1'];
 $celular2 = $_POST['txtcelular2'];

//echo  $celular2;		

 $TransportistaCollectorObj = new TransportistaCollector();
 $TransportistaCollectorObj->updateTransportista($ruc,$nombre,$direccion,$telefono1,$telefono2,$celular1,$celular2);
  //header("location: Transportista_list.php"); 
echo"<script>alert('Registro Actualizado con exito');window.location.href=\"../modelo/Transportista_list.php\"</script>";
?>

