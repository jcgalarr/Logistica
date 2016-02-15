<?php
 session_start();
 include_once('UserCollector.php');
  
 
 $id = $_POST['txtid'];
 $nombre = $_POST['txtnombre'];

 echo $id;
 echo $nombre;
  
 $UserCollectorObj = new UserCollector();
	$UserCollectorObj->insertUser($id,$nombre);
         echo"<script>alert('Registro Grabado con exito');window.location.href=\"../views/UserView.php\"</script>";
?>

