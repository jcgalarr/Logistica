<?php
session_start();

if (isset($_POST['usuario'])) //Si llego un Nickname via el formulario lo grabamos en la Sesion
{
       
	$_SESSION['usuario'] = $_POST['usuario']; //Nickname Grabado
	$_SESSION['clave'] =$_POST['clave'];
        // echo isset($_POST['usuario']);
       
}


/*$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$_SESSION['usuario'] =$_POST['usuario'];
$_SESSION['clave'] =$_POST['clave'];
*/
//echo $usuario .$clave;	

include_once('../modelo/Usuario.php');
 include_once('../modelo/UsuarioCollector.php');

 $UsuarioCollectorObj = new UsuarioCollector();
 $ObjUsuario = $UsuarioCollectorObj->validarcontrasena($_SESSION['usuario'],$_SESSION['clave']);


//echo $ObjUsuario->getnombre();
 if ( $ObjUsuario->getnombre() != '')
 {
	//echo "Bienvenida";

	}
else
 {
	  //echo "No existe Usuario";	
         $_SESSION['var']='0';
         echo"<script>alert('Usuario/Clave incorrecto');window.location.href=\"LoginView.php\"</script>";
	 //header("location: ../views/LoginView.php");
	}


?>


