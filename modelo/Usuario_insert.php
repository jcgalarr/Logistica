<?php
 session_start();
 include_once('UsuarioCollector.php');
 
 $nombre = $_POST['txtnombre'];
 $apellido = $_POST['txtapellido'];
 $cargo = $_POST['combocargo'];
 $departamento = $_POST['combodepartamento'];
 $bodega = $_POST['combobodega'];
 $cedula = $_POST['txtcedula'];
 $login = $_POST['txtlogin'];
 $contrasena = $_POST['txtcontrasena'];
 $estado = $_POST['comboestado'];
 $tipousu = $_POST['combotipo'];

 $UsuarioCollectorObj = new UsuarioCollector();
 $ObjUsuario = $UsuarioCollectorObj->validaCedula($cedula);
 
 if ( $ObjUsuario->getcedula() != '') {
	echo"<script>alert('Cédula ya existe!');window.location.href=\"../views/UsuaView.php\"</script>";		
	}
	else {
		$UsuarioCollectorObj->insertUsuario($nombre,$apellido,(int)$cargo,(int)$departamento,(int)$bodega,$cedula,$login,$contrasena,$estado,$tipousu);
		echo"<script>alert('Registro Grabado con éxito');window.location.href=\"../views/UsuaView.php\"</script>";
	}
?>
