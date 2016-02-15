<?php
session_start();
include_once ('conexion.php');
include_once("../modelo/BodegaCollector.php");
include_once('../modelo/Incorpora.php');
include_once('../modelo/IncorporaCollector.php');
$BodegaCollectorObj = new BodegaCollector();
$IncorporaCollectorObj = new IncorporaCollector();
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
       <h1>Incorporacion de Solicitud de Despacho</h1>
    </div>
	
    <form id="frm_incorpora" name="frm_incorpora" action ="../modelo/Incorpora_insert.php" method ="post" class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-xs-2">Bodega:</label>
        <div class="col-xs-2">
            <select type="text"  id="combobodega" name="combobodega" >
		<?php  

foreach ($BodegaCollectorObj->showBodega() as $c){
?>
		<option value="<?php echo $c->getdescripcion() ?>"><?php echo $c->getdescripcion() ?></option>
<?php  
}
?>
  	    </select>
        </div>
    </div>
   
	
    <div class="form-group">
        <label class="control-label col-xs-2" >Caddie</label>
        <div class="col-xs-2">
            <input type="text" id="txtcaddie" name="txtcaddie" MaxLength="6" onkeypress="return ValidNumber(event);" class="form-control" placeholder="Caddie">
        </div>
    </div>

  <div class="form-group">
        <label class="control-label col-xs-2" >Producto</label>
        <div class="col-xs-2">
            <input type="text" id="txtproducto" name="txtproducto" MaxLength="9" onkeypress="return ValidNumber(event);" class="form-control" placeholder="Producto">
        </div>
    </div>

  <div class="form-group">
        <label class="control-label col-xs-2" >Cantidad</label>
        <div class="col-xs-2">
            <input type="text" class="form-control" placeholder="Cantidad" onkeypress="return ValidNumber(event);" id="txtcantidad" name="txtcantidad">
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
        document.frm_incorpora.submit();
    }
</script>
<!-- Js vinculados -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../js/responsive.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script language ="javascript" type = "text/javascript" src= "../js/funcionesgenerales.js"></script>
</body>
</html>
