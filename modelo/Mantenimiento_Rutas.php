<?php
session_start();
include_once("RutaCollector.php");
 $RutaCollectorObj = new RutaCollector();
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
    <h1>Mantenimiento de Rutas</h1>
</header>
<br/>
<a class="btn btn-primary" href="../views/RutasView.php">Nuevo</a>
<br/>
<br/>
 <div class="container">   
<div class="table-responsive">
    <table class="table table-condensed table-bordered table-hover">
        <thead>
            <tr>
                <th bgcolor="#D8D8D8">CÓDIGO</th>
                <th bgcolor="#D8D8D8">DESCRIPCIÓN</th>
                <th bgcolor="#D8D8D8">ORIGEN</th>
                <th bgcolor="#D8D8D8">DESTINO</th>
  	            <th bgcolor="#D8D8D8">TIEMPO DE RUTA</th>
	              <th bgcolor="#D8D8D8">TIPO DE RUTA</th>
	              <th colspan = 2 bgcolor="#D8D8D8">ACCION</th>
           </tr>
        </thead>

<?php  

foreach ($RutaCollectorObj->showRuta() as $c){
?>
  <tbody>
  <tr>
     <td><?php echo $c->getcodigo() ?></td>
     <td><?php echo $c->getdescripcion() ?></td>
     <td><?php echo $c->getorigen() ?></td>
     <td><?php echo $c->getdestino() ?></td>
     <td><?php echo $c->gettiemporuta() ?></td>
     <td><?php echo $c->gettiporuta() ?></td>
        
    <td><a href="Ruta_edit.php?id=<?php echo $c->getcodigo() ?>">Editar</a></td>
    <td><a href="Ruta_delete.php?id=<?php echo $c->getcodigo() ?>">Eliminar</a></td>
  </tr>
  </tbody> 
<?php  
}
?>
</table>
</div>
     <div class="col-xs-offset-5 col-xs-7">
     <input type="button" value="Regresar" OnClick="window.location='../views/RutasView.php'" class="btn btn-primary">   
     </div>
</div>
</body>
</html>
