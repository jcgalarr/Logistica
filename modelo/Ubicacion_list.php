<?php
session_start();
include_once("UbicacionCollector.php");
 $UbicacionCollectorObj = new UbicacionCollector();
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
    <h1>Mantenimiento de Ubicaciones</h1>
</header>
<a class="btn btn-primary" href="../views/UbicacionView.php">Nuevo</a>
<br/>
<br/>
 <div class="container">   
<div class="table-responsive">
    <table class="table table-condensed table-bordered table-hover">
        <thead>
            <tr>
                <th bgcolor="#D8D8D8">CÓDIGO</th>
                <th bgcolor="#D8D8D8">PASILLO</th>
                <th bgcolor="#D8D8D8">TIPO</th>
                <th bgcolor="#D8D8D8">POSICION INICIAL</th>
                <th bgcolor="#D8D8D8">POSICION FINAL</th>
  	            <th bgcolor="#D8D8D8">SALTO</th>
                <th colspan = 3 bgcolor="#D8D8D8">ACCION</th>
	         </tr>
        </thead>

<?php  

foreach ($UbicacionCollectorObj->showUbicacion() as $c){
?>
  <tbody>
  <tr>
     <td><?php echo $c->getcodigo() ?></td>
     <td><?php echo $c->getpasillo() ?></td>
     <td><?php echo $c->gettipo() ?></td>
     <td><?php echo $c->getposinicio() ?></td>
     <td><?php echo $c->getposfinal() ?></td>
     <td><?php echo $c->getsalto() ?></td>
     
     
        
    <td><a href="Ubicacion_edit.php?id=<?php echo $c->getcodigo() ?>">Editar</a></td>
    <td><a href="Ubicacion_delete.php?id=<?php echo $c->getcodigo() ?>">Eliminar</a></td>
  </tr>
  </tbody> 
<?php  
}
?>
</table>
</div>
     <div class="col-xs-offset-3 col-xs-7">
     <input type="button" value="Regresar" OnClick="window.location='../views/UbicacionView.php'" class="btn btn-primary">   
     </div>
</div>

</body>
</html>
