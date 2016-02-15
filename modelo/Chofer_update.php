<?php
session_start();
 include_once('ChoferCollector.php');

 $codigo = $_POST['txtcodigo'];
 $nombre = $_POST['txtnombre'];
 $apellido = $_POST['txtapellido'];
 $licencia = $_POST['txtlicencia'];
 $categoria_lic = $_POST['combocategoria'];
 $numcelular1 = $_POST['txtcelular'];
 $recordpolicial = $_POST['comborecordpolicial'];
 $transportista = $_POST['combotransportista'];
 



 $ChoferCollectorObj = new ChoferCollector();
 $ObjChofer = $ChoferCollectorObj->validaLicencia($licencia);

  // echo $codigo;
//print_r ($ObjChofer->getcodigo());


 
 if ( $ObjChofer->getcodigo() != $codigo){
 	echo"<script>alert('Licencia ya esta asignada a otro chofer.No se actualizo el registro');window.location.href=\"../modelo/Mantenimiento_Chofer.php\"</script>";
 	}
 	else{
 		$ChoferCollectorObj->updateChofer($codigo,$nombre,$apellido,$licencia,$categoria_lic,$numcelular1,$recordpolicial,$transportista);
 		echo"<script>alert('Registro Actualizado con exito');window.location.href=\"../modelo/Mantenimiento_Chofer.php\"</script>";
 		}

?>


