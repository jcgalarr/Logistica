<?php
session_start();
include_once("BodegaCollector.php");

//$id = 1;
 $BodegaCollectorObj = new BodegaCollector();
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
    <h1>Bodega</h1>
</header>
<a class="btn btn-primary"  href="../views/BodegaView.php">Nuevo</a>

<br/>
<br/>

<div class="table-responsive">
    <table class="table table-condensed table-bordered table-hover">
        <thead>
            <tr>
                <th bgcolor="#D8D8D8">CODIGO</th>
                <th bgcolor="#D8D8D8">DESCRIPCION</th>
		<th bgcolor="#D8D8D8">TELEFONO</th>
		<th bgcolor="#D8D8D8">DIRECCION</th>
                <th colspan = 2 bgcolor="#D8D8D8">ACCION</th>
           </tr>
        </thead>

<?php  

foreach ($BodegaCollectorObj->showBodega() as $c){
?>
  <tbody>
  <tr>
     <td><?php echo $c->getcodigo() ?></td>
     <td><?php echo $c->getdescripcion() ?></td>
     <td><?php echo $c->gettelefono() ?></td>
     <td><?php echo $c->getdireccion() ?></td>
    
     <td><a href="Bodega_edit.php?id=<?php echo $c->getcodigo() ?>">Editar</a></td>
     <td><a href="Bodega_delete.php?id=<?php echo $c->getcodigo() ?>">Eliminar</a></td>
  </tr>
  </tbody> 
<?php  
}
?>
</table>
</div>
     <div class="col-xs-offset-3 col-xs-7">
     <input type="button" value="Regresar" OnClick="window.location='../views/BodegaView.php'" class="btn btn-primary">   
     </div>
</div>
</div>
</body>
</html>
