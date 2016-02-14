<?php
session_start();
include_once("ChoferCollector.php");
 $ChoferCollectorObj = new ChoferCollector();
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
    <h1>Mantenimiento de Choferes</h1>
</header>
<br/>
<a class="btn btn-primary" href="../views/ChoferView.php">Nuevo</a>
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
                <th bgcolor="#D8D8D8">LICENCIA</th>
  	        <th bgcolor="#D8D8D8">CATEGORIA DE lICENCIA</th>
	        <th bgcolor="#D8D8D8">CELULAR</th>
	        <th bgcolor="#D8D8D8">RECORD POLICIAL</th>
          <th bgcolor="#D8D8D8">TRANSPORTISTA</th>
	        <th colspan = 3 bgcolor="#D8D8D8">ACCION</th>
           </tr>
        </thead>
<?php  

foreach ($ChoferCollectorObj->showChofer() as $c){
?>
  <tbody>
  <tr>
     <td><?php echo $c->getcodigo() ?></td>
     <td><?php echo $c->getnombre() ?></td>
     <td><?php echo $c->getapellido() ?></td>
     <td><?php echo $c->getlicencia() ?></td>
     <td><?php echo $c->getcategoria_lic() ?></td>
     <td><?php echo $c->getnumcelular1() ?></td>
     <td><?php echo $c->getrecordpolicial() ?></td>
     <td><?php echo $c->gettransportista() ?></td>
 
     <td><a href="Chofer_edit.php?id=<?php echo $c->getcodigo() ?>">Editar</a></td>
     <td><a href="Chofer_delete.php?id=<?php echo $c->getcodigo() ?>">Eliminar</a></td>
  </tr>
  </tbody> 
<?php  
}
?>
</table>
</div>
     <div class="col-xs-offset-5 col-xs-7">
     <input type="button" value="Regresar" OnClick="window.location='../views/ChoferView.php'" class="btn btn-primary">   
     </div>
</div>
</body>
</html>
