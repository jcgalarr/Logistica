<?php
session_start();
include_once("TransportistaCollector.php");

//$id = 1;
 $TransportistaCollectorObj = new TransportistaCollector();
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
    <h1>Mantenimiento Transportista</h1>
</header>
<a href="../views/TransportistaView.php">Nuevo</a>

<br/>
<br/>

<div class="table-responsive">
    <table class="table table-condensed table-bordered table-hover">
        <thead>
            <tr>
                <th>RUC</th>
                <th>NOMBRE</th>
                <th>DIRECCION</th>
                <th>TELEFONO 1</th>
  	        <th>TELEFONO 2</th>
	        <th>CELULAR 1</th>
	        <th>CELULAR 2</th>
	        <th colspan = 2>ACCION</th>
           </tr>
        </thead>

<?php  

foreach ($TransportistaCollectorObj->showTransportista() as $c){
?>
  <tbody>
  <tr>
     <td><?php echo $c->getruc() ?></td>
     <td><?php echo $c->getnombre() ?></td>
     <td><?php echo $c->getdireccion() ?></td>
     <td><?php echo $c->gettelefono1() ?></td>
     <td><?php echo $c->gettelefono2() ?></td>
     <td><?php echo $c->getnumcelular1() ?></td>
     <td><?php echo $c->getnumcelular2() ?></td>
   
     <td><a href="Transportista_edit.php?id=<?php echo $c->getruc() ?>">Editar</a></td>
     <td><a href="Transportista_delete.php?id=<?php echo $c->getruc() ?>">Eliminar</a></td>
  </tr>
  </tbody> 
<?php  
}
?>
</table>
</div>
</body>
</html>
