<?php
session_start();
include_once("CamionCollector.php");
 $CamionCollectorObj = new CamionCollector();
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
    <h1>Mantenimiento de Camiones</h1>
</header>
<a class="btn btn-primary" href="../views/CamionesView.php">Nuevo</a>
<br/>
<br/>
 <div class="container">   
<div class="table-responsive">
    <table class="table table-condensed table-bordered table-hover">
        <thead>
            <tr>
                <th bgcolor="#D8D8D8">PLACA</th>
                <th bgcolor="#D8D8D8">AÑO</th>
                <th bgcolor="#D8D8D8">MARCA</th>
                <th bgcolor="#D8D8D8">TIPO</th>
  	            <th bgcolor="#D8D8D8">TONELAJE</th>
                <th bgcolor="#D8D8D8">CADIES</th>
                <th bgcolor="#D8D8D8">PALLETS</th>
                <th bgcolor="#D8D8D8">TIPO COMBUSTIBLE</th>
                <th bgcolor="#D8D8D8">CHOFER</th>
                <th bgcolor="#D8D8D8">TRANSPORTISTA</th>
                <th colspan = 3 bgcolor="#D8D8D8">ACCION</th>
	         </tr>
        </thead>

<?php  

foreach ($CamionCollectorObj->showCamion() as $c){
?>
  <tbody>
  <tr>
     <td><?php echo $c->getplaca() ?></td>
     <td><?php echo $c->getanio() ?></td>
     <td><?php echo $c->getmarca() ?></td>
     <td><?php echo $c->gettipo() ?></td>
     <td><?php echo $c->gettonelaje() ?></td>
     <td><?php echo $c->getcadies() ?></td>
     <td><?php echo $c->getpallets() ?></td>
     <td><?php echo $c->gettipocombustible() ?></td>
     <td><?php echo $c->getcod_chofer() ?></td>
     <td><?php echo $c->getcod_transportista() ?></td>

    <td><a href="Camion_edit.php?id=<?php echo $c->getplaca() ?>">Editar</a></td>
    <td><a href="Camion_delete.php?id=<?php echo $c->getplaca() ?>">Eliminar</a></td>
  </tr>
  </tbody> 
<?php  
}
?>
</table>
</div>
     <div class="col-xs-offset-3 col-xs-7">
     <input type="button" value="Regresar" OnClick="window.location='../views/CamionesView.php'" class="btn btn-primary">   
     </div>
</div>

</body>
</html>
