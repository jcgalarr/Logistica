<?php
 session_start();
 include_once('../modelo/Despacho.php');
 include_once('../modelo/DespachoCollector.php');
 $DespachoCollectorObj = new DespachoCollector();

 //session_start();
 //include_once('../modelo/Transportista.php');
 //include_once('../modelo/TransportistaCollector.php');
 //$TransportistaCollectorObj = new TransportistaCollector();
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
  <div class="col-xs-offset-10 col-xs-9">
    <br>
    <input  type="button" value="Menú" OnClick="window.location='../views/ViewMenu.php'" class="btn btn-primary" class="">
  </div>
  <div class="page-header">
       <h1>Despacho de Mercaderia</h1>
    </div>
	<div class="page-header">
       <h1>Despacho</h1>
    </div>
   <form id="frm_despacho" name="frm_despacho" action ="../modelo/Despacho_insert.php" method ="post" class="form-horizontal">
 
    <div class="form-group">
        <label class="control-label col-xs-3">Caddie:</label>
        <div class="col-xs-2">
            <input type="text" id="txtcaddie" name="txtcaddie" class="form-control" placeholder="Caddie">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Producto:</label>
        <div class="col-xs-2">
            <input type="text" id="txtproducto" name="txtproducto" class="form-control" placeholder="Producto">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Cantidad:</label>
        <div class="col-xs-2">
            <input type="text" id="txtcantidad" name="txtcantidad" class="form-control" placeholder="Cantidad">
        </div>
    </div>

    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="button" OnClick="insertar()" class="btn btn-primary" value="Grabar">
            <input type="reset" class="btn btn-primary" value="Limpiar">
	</div>
    </div>
  
  </form>
</div>

<script > 

function insertar()
    {
        if (document.getElementById("txtcaddie").value=="") {
            alert('Campo Caddie es Obligatorio');
	    document.getElementById("txtcaddie").focus();
            return false;         
        }
	if (document.getElementById("txtproducto").value=="") {
            alert('Campo Producto es Obligatorio');
	    document.getElementById("txtproducto").focus();
            return false;         
        }
        if (document.getElementById("txtcantidad").value=="") {
            alert('Campo Cantidad es Obligatorio');
	    document.getElementById("txtcantidad").focus();
            return false;         
        }
	alert('Grabado exitosamente!');
        document.frm_despacho.submit();
    }
</script>

<!-- Js vinculados -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../js/responsive.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script language ="javascript" type = "text/javascript" src= "../js/funcionesgenerales.js"></script>
</body>
</html>
