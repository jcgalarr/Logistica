<?php
  session_start();
  $id = $_GET['id'];

 // echo $id;
 include_once('Transportista.php');
 include_once('TransportistaCollector.php');
 $TransportistaCollectorObj = new TransportistaCollector();
 $ObjTransportista = $TransportistaCollectorObj->showTransportistaId($id);
 //print_r($ObjTransportista);
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
  <div class="container">
	<div class="page-header">
       <h1>Transportista</h1>
    </div>
   <form action ="../modelo/Transportista_update.php" method ="post" class="form-horizontal">
 
       

    <div class="form-group">
        <label class="control-label col-xs-3" >Ruc:</label>
        <div class="col-xs-2">
            <input type="tel"  name="txtruc"  class="form-control" value = "<?php echo $ObjTransportista->getruc(); ?>">
    
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Nombre:</label>
        <div class="col-xs-9">
            <input type="text"  name="txtnombre"   class="form-control" value = "<?php echo $ObjTransportista->getnombre(); ?>">
        </div>
    </div>
    
	<div class="form-group">
        <label class="control-label col-xs-3" >Dirección:</label>
        <div class="col-xs-9">
            <input type="text"  name="txtdireccion"   class="form-control" value = "<?php echo $ObjTransportista->getdireccion(); ?>">
        </div>
    </div>
    
    
	<div class="form-group">
        <label class="control-label col-xs-3" >Telefono 1:</label>
        <div class="col-xs-2">
            <input type="tel" name="txttel1" class="form-control" value = "<?php echo $ObjTransportista->gettelefono1(); ?>">
        </div>
		<label class="control-label col-xs-2" >Telefono 2:</label>
		<div class="col-xs-2">
            <input type="tel" name="txttel2"class="form-control"  value = "<?php echo $ObjTransportista->gettelefono2(); ?>">
        </div>
    </div>
	
	
	<div class="form-group">
        <label class="control-label col-xs-3" >Celular 1:</label>
        <div class="col-xs-2">
            <input type="tel"  name="txtcelular1"   class="form-control"  value = "<?php echo $ObjTransportista->getnumcelular1(); ?>">
        </div>
		<label class="control-label col-xs-2" >Celular 2:</label>
        <div class="col-xs-2">
            <input type="tel" name="txtcelular2" class="form-control" value = "<?php echo $ObjTransportista->getnumcelular2(); ?>">
        </div>
    </div>
	
	
	
    
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" class="btn btn-primary" value="Actualizar">
            <input type="reset" class="btn btn-primary" value="Limpiar">
	    <input type="button" value="Regresar" OnClick="history.back()" class="btn btn-primary">		
			
        </div>
    </div>
  </form>
</div>

<!-- Js vinculados -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../js/responsive.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>


