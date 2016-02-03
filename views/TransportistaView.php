<?php
 session_start();
 include_once('../Modelo/Transportista.php');
 include_once('../Modelo/TransportistaCollector.php');
 $TransportistaCollectorObj = new TransportistaCollector();
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
   <form action ="../Modelo/Transportista_insert.php" method ="post" class="form-horizontal">
 
       

    <div class="form-group">
        <label class="control-label col-xs-3" >Ruc:</label>
        <div class="col-xs-2">
            <input type="tel"  name="txtruc"  class="form-control" placeholder="Ruc">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Nombre:</label>
        <div class="col-xs-9">
            <input type="text"  name="txtnombre"   class="form-control" placeholder="Nombre">
        </div>
    </div>
    
	<div class="form-group">
        <label class="control-label col-xs-3" >Dirección:</label>
        <div class="col-xs-9">
            <input type="text"  name="txtdireccion"   class="form-control" placeholder="Direccion">
        </div>
    </div>
    
    
	<div class="form-group">
        <label class="control-label col-xs-3" >Telefono 1:</label>
        <div class="col-xs-2">
            <input type="tel" name="txttel1" class="form-control" placeholder="Telefono 1">
        </div>
		<label class="control-label col-xs-2" >Telefono 2:</label>
		<div class="col-xs-2">
            <input type="tel" name="txttel2"class="form-control" placeholder="Telefono 2">
        </div>
    </div>
	
	
	<div class="form-group">
        <label class="control-label col-xs-3" >Celular 1:</label>
        <div class="col-xs-2">
            <input type="tel"  name="txtcelular1"   class="form-control" placeholder="Celular 1">
        </div>
		<label class="control-label col-xs-2" >Celular 2:</label>
        <div class="col-xs-2">
            <input type="tel" name="txtcelular2" class="form-control" placeholder="Celular 2">
        </div>
    </div>
	
	
	
    
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" class="btn btn-primary" value="Ingresar">
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
