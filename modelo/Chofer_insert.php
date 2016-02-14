<?php
 session_start();
 include_once('ChoferCollector.php');
 
 $nombre = $_POST['txtnombre'];
 $apellido = $_POST['txtapellido'];
 $licencia = $_POST['txtlicencia'];
 $categoria_lic = $_POST['combocategoria'];
 $numcelular1 = $_POST['txtcelular'];
 $recordpolicial = $_POST['comborecordpolicial'];
 $transportista = $_POST['combotransportista'];
 
 $ChoferCollectorObj = new ChoferCollector();
 $ObjChofer = $ChoferCollectorObj->validaLicencia($licencia);
 
 if ( $ObjChofer->getlicencia() != '') {
	echo"<script>alert('Licencia ya existe');window.location.href=\"../views/ChoferView.php\"</script>";		
	}
	else {
		$ChoferCollectorObj->insertChofer($nombre,$apellido,$licencia,$categoria_lic,$numcelular1,$recordpolicial,$transportista);
		echo"<script>alert('Registro Grabado con exito');window.location.href=\"../views/ChoferView.php\"</script>";
	}
?>
