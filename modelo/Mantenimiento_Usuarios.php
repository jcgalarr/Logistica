<?php
session_start();
include_once("UsuarioCollector.php");
 $UsuarioCollectorObj = new UsuarioCollector();
?>

<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0"> 
<title>Sistema SGL</title>
    <!-- Estilos CSS vinculados -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">    
</head>
<body>
<header>
    <h1>Mantenimiento de Usuarios</h1>
</header>
<br/>
<a class="btn btn-primary" href="../views/UsuaView.php">Nuevo</a>
<br/>
<br/>
<div class="container">
<div class="table-responsive"> 
    <table class="table table-condensed table-bordered table-hover">
        <thead>
            <tr>
                <th bgcolor="#D8D8D8">CÓDIGO</th>
                <th bgcolor="#D8D8D8">NOMBRE</th>
                <th bgcolor="#D8D8D8">APELLIDO</th>
                <th bgcolor="#D8D8D8">CARGO</th>
  	            <th bgcolor="#D8D8D8">DEPARTAMENTO</th>
      	        <th bgcolor="#D8D8D8">BODEGA</th>
      	        <th bgcolor="#D8D8D8">CÉDULA</th>
                <th bgcolor="#D8D8D8">LOGIN</th>
                <th bgcolor="#D8D8D8">CONTRASEÑA</th>
                <th bgcolor="#D8D8D8">ESTADO</th>
                <th bgcolor="#D8D8D8">TIPO DE USUARIO</th>
      	        <th colspan = 2 bgcolor="#D8D8D8">ACCION</th>
           </tr>
        </thead>
<?php  

foreach ($UsuarioCollectorObj->showUsuario() as $c){
?>
  <tbody>
  <tr>
     <td><?php echo $c->getcodigo() ?></td>
     <td><?php echo $c->getnombre() ?></td>
     <td><?php echo $c->getapellido() ?></td>
     <td><?php echo $c->getcargo() ?></td>
     <td><?php echo $c->getdepartamento() ?></td>
     <td><?php echo $c->getbodega() ?></td>
     <td><?php echo $c->getcedula() ?></td>
     <td><?php echo $c->getlogin() ?></td>
     <td><?php echo $c->getcontrasena() ?></td>
     <td><?php echo $c->getestado() ?></td>
     <td><?php echo $c->gettipousu() ?></td>

     <td><a href="Usuario_edit.php?id=<?php echo $c->getcodigo() ?>">Editar</a></td>
     <td><a href="Usuario_delete.php?id=<?php echo $c->getcodigo() ?>">Eliminar</a></td>
  </tr>
  </tbody> 
<?php  
}
?>
</table>
</div>
     <div class="col-xs-offset-5 col-xs-7">
     <input type="button" value="Regresar" OnClick="window.location='../views/UsuaView.php'" class="btn btn-primary">   
     </div>
</div>
</body>
</html>
