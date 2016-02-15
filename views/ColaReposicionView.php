<?php
 session_start();
 include_once('../modelo/Almacena.php');
 include_once('../modelo/AlmacenaCollector.php');
 $AlmacenaCollectorObj = new AlmacenaCollector();
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
       <h1>Almacenamiento</h1>
    </div>
	<div class="page-header">
       <h1>Almacenar Pallet</h1>
    </div>
   <form id="frm_almacen" name="frm_almacen" action ="../modelo/Almacena_insert.php" method ="post" class="form-horizontal">
 
    <div class="form-group">
        <label class="control-label col-xs-3">Pallet:</label>
        <div class="col-xs-2">
            <input onkeypress="return ValidNumber(event);" MaxLength="3" Onblur="validapallet();" type="tel" id="txtpallet" name="txtpallet" class="form-control" placeholder="Pallet" value = "101" disabled >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">No.:</label>
        <div class="col-xs-2">
            <input onkeypress="return ValidNumber(event);" MaxLength="6" type="tel" id="txtnumero" name="txtnumero" class="form-control" placeholder="No.">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Producto:</label>
        <div class="col-xs-2">
            <input onkeypress="return ValidNumber(event);" MaxLength="9" type="tel" id="txtproducto" name="txtproducto" class="form-control" placeholder="No.">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Cantidad:</label>
        <div class="col-xs-2">
            <input onkeypress="return ValidNumber(event);" MaxLength="6" type="tel" id="txtcantidad" name="txtcantidad" class="form-control" placeholder="No.">
        </div>
    </div>
    <div class="page-header">
       <h1>Destino-Dejar en</h1>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3" >Ubicacion:</label>
        <div class="col-xs-2">
            <input onkeypress="return ValidNumber(event);" MaxLength="9" type="tel" id="txtubicacion" name="txtubicacion" class="form-control" placeholder="No.">
        </div>
    </div>

    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="button" OnClick="insertar()" class="btn btn-primary" value="Almacenar">
            <input type="reset" class="btn btn-primary" value="Limpiar">
	</div>
    </div>
  </form>
</div>

<script > 

function validapallet()
    {   var num = document.getElementById("txtpallet").value;
              
            if (num.length<3)
            {   alert('Pallet debe ser de 3 digitos');
                document.getElementById("txtpallet").focus();
		return false;
            }
            
        
    }

function insertar()
    {
        if (document.getElementById("txtpallet").value=="") {
            alert('Campo Pallet es Obligatorio');
	    document.getElementById("txtpallet").focus();
            return false;         
        }
	if (document.getElementById("txtnumero").value=="") {
            alert('Campo Numero es Obligatorio');
	    document.getElementById("txtnumero").focus();
            return false;         
        }
	if (document.getElementById("txtubicacion").value=="") {
            alert('Campo Ubicacion es Obligatorio');
	    document.getElementById("txtubicacion").focus();
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
        document.frm_almacen.submit();
    }
</script>

<!-- Js vinculados -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../js/responsive.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script language ="javascript" type = "text/javascript" src= "../js/funcionesgenerales.js">
</script>
</body>
</html>
