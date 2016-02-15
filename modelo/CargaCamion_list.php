<?php
session_start();
include_once("CargaCamionCollector.php");
 $CargaCamionCollectorObj = new CargaCamionCollector();
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
    <h1>Carga de Camiones</h1>
</header>
<a class="btn btn-primary" href="../views/CargaCamionesView.php">Nuevo</a>
<br/>
<br/>
 <div class="container">   
<div class="table-responsive">
    <table class="table table-condensed table-bordered table-hover">
        <thead>
            <tr>
                <th bgcolor="#D8D8D8">CODIGO CAMION</th>
                <th bgcolor="#D8D8D8">RUTA</th>
                <th bgcolor="#D8D8D8">CADIE</th>
                <th bgcolor="#D8D8D8">PUERTA</th>
                <th colspan = 3 bgcolor="#D8D8D8">ACCION</th>
	         </tr>
        </thead>

<?php  

foreach ($CamionCollectorObj->showCamion() as $c){
?>
  <tbody>
  <tr>
     <td><?php echo $c->getcod_camion() ?></td>
     <td><?php echo $c->getcod_ruta() ?></td>
     <td><?php echo $c->getcadie() ?></td>
     <td><?php echo $c->getpuerta() ?></td>

    <td><a href="CargaCamion_edit.php?id=<?php echo $c->getcod_camion() ?>">Editar</a></td>
    <td><a href="CargaCamion_delete.php?id=<?php echo $c->getcod_camion() ?>">Eliminar</a></td>
  </tr>
  </tbody> 
<?php  
}
?>
</table>
</div>
     <div class="col-xs-offset-3 col-xs-7">
     <input type="button" value="Regresar" OnClick="window.location='../views/CargaCamionesView.php'" class="btn btn-primary">   
     </div>
</div>

</body>
</html>
