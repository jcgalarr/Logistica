<?php
session_start();
include_once("ArticuloCollector.php");
 $ArticuloCollectorObj = new ArticuloCollector();
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
    <h1>Mantenimiento de Articulos</h1>
</header>
<a class="btn btn-primary" href="../views/ArticuloView.php">Nuevo</a>
<br/>
<br/>
 <div class="container">   
<div class="table-responsive">
    <table class="table table-condensed table-bordered table-hover">
        <thead>
            <tr>
                <th bgcolor="#D8D8D8">CÓDIGO</th>
                <th bgcolor="#D8D8D8">NOMBRE</th>
                <th bgcolor="#D8D8D8">DESCRIPCIÓN</th>
                <th bgcolor="#D8D8D8">UNIDAD DE MEDIDA</th>
  	            <th bgcolor="#D8D8D8">ESTADO</th>
                <th colspan = 3 bgcolor="#D8D8D8">ACCION</th>
	         </tr>
        </thead>

<?php  

foreach ($ArticuloCollectorObj->showArticulo() as $c){
?>
  <tbody>
  <tr>
     <td><?php echo $c->getcodigo() ?></td>
     <td><?php echo $c->getnombre() ?></td>
     <td><?php echo $c->getdescripcion() ?></td>
     <td><?php echo $c->getunidadmedida() ?></td>
     <td><?php echo $c->getestado() ?></td>
     
        
    <td><a href="Articulo_edit.php?id=<?php echo $c->getcodigo() ?>">Editar</a></td>
    <td><a href="Articulo_delete.php?id=<?php echo $c->getcodigo() ?>">Eliminar</a></td>
  </tr>
  </tbody> 
<?php  
}
?>
</table>
</div>
     <div class="col-xs-offset-3 col-xs-7">
     <input type="button" value="Regresar" OnClick="window.location='../views/ArticuloView.php'" class="btn btn-primary">   
     </div>
</div>

</body>
</html>
