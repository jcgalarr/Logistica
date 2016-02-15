<?php
session_start();
 include_once('ArticuloCollector.php');

 $codigo = $_POST['txtcodigo'];
 $nombre = $_POST['txtnombre'];
 $descripcion = $_POST['txtdescripcion'];
 $unidadmedida = $_POST['txtunidadmedida'];
 $estado = $_POST['txtestado'];

 $ArticuloCollectorObj = new ArticuloCollector();
 $ArticuloCollectorObj->updateArticulo($codigo,$nombre,$descripcion,$unidadmedida,$estado);

  

header("location: Articulo_list.php"); 

?>