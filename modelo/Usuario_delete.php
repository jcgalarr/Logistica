<?php
session_start();
 include_once('UsuarioCollector.php');
 include_once('Usuario.php');
 $id = $_GET['id'];
 $UsuarioCollectorObj = new UsuarioCollector();
 $UsuarioCollectorObj->deleteUsuario($id);

header("location: Mantenimiento_Usuarios.php");  
?>
