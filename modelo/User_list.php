<?php
session_start();
include_once("UserCollector.php");

//$id = 1;
 $UserCollectorObj = new UserCollector();
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
    <h1>User</h1>
</header>
<a class="btn btn-primary"  href="../views/UserView.php">Nuevo</a>

<br/>
<br/>

<div class="table-responsive">
    <table class="table table-condensed table-bordered table-hover">
        <thead>
            <tr>
                <th bgcolor="#D8D8D8">CODIGO</th>
                <th bgcolor="#D8D8D8">NOMBRE</th>
		
           </tr>
        </thead>

<?php  

foreach ($UserCollectorObj->showUser() as $c){
?>
  <tbody>
  <tr>
     <td><?php echo $c->getid() ?></td>
     <td><?php echo $c->getnombre() ?></td>
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
