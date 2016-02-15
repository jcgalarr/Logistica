<?php
session_start();
include_once("CargoCollector.php");

//$id = 1;
 $CargoCollectorObj = new CargoCollector();
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
    <h1>Mantenimiento Cargos</h1>
</header>
<a class="btn btn-primary"  href="../views/CargoView.php">Nuevo</a>

<br/>
<br/>

<div class="table-responsive">
    <table class="table table-condensed table-bordered table-hover">
        <thead>
            <tr>
                <th bgcolor="#D8D8D8">CODIGO</th>
                <th bgcolor="#D8D8D8">DESCRIPCION</th>
                <th colspan = 2 bgcolor="#D8D8D8">ACCION</th>
           </tr>
        </thead>

<?php  

foreach ($CargoCollectorObj->showCargo() as $c){
?>
  <tbody>
  <tr>
     <td><?php echo $c->getcodigo() ?></td>
     <td><?php echo $c->getdescripcion() ?></td>
    
     <td><a href="Cargo_edit.php?id=<?php echo $c->getcodigo() ?>">Editar</a></td>
     <td><a href="Cargo_delete.php?id=<?php echo $c->getcodigo() ?>">Eliminar</a></td>
  </tr>
  </tbody> 
<?php  
}
?>
</table>
</div>
     <div class="col-xs-offset-3 col-xs-7">
     <input type="button" value="Regresar" OnClick="window.location='../views/CargoView.php'" class="btn btn-primary">   
     </div>
</div>
</div>
</body>
</html>
