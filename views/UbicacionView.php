<?php
session_start();
include_once ('conexion.php');
?>

<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0"> 
<title>Sistema SGL</title>
    <!-- Estilos CSS vinculados -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/estilos.css" rel="stylesheet">
</head>

<body>
  <div class="container">
   <div class="col-xs-offset-10 col-xs-9">
   <br>
  <input  type="button" value="Menú" OnClick="window.location='../views/ViewMenu.php'" class="btn btn-primary" class="">
  </div>  
	<div class="page-header">
       <h1>Mantenimiento de Ubicacion</h1>
    </div>
   <form id="frm_ubicacion" name="frm_ubicacion" action ="../modelo/Ubicacion_insert.php " method ="post" class="form-horizontal">
	<div class="page-header">
    </div>

    <div class="form-group">
        <label class="control-label col-xs-3">Pasillo:</label>
        <div class="col-xs-2">
            <input type="text" id="txtpasillo" onkeypress="return ValidNumber(event);" name="txtpasillo" class="form-control" placeholder="Pasillo">
        </div>
	<label class="control-label col-xs-3">Tipo:</label>
        <div class="col-xs-2">
            <input type="text" id="txttipo" name="txttipo" class="form-control" placeholder="Tipo">
        </div>
    </div>

 <div class="form-group">
        <label class="control-label col-xs-3">Pos.Inicio:</label>
        <div class="col-xs-2">
            <input type="text" id="txtposini" onkeypress="return ValidNumber(event);" name="txtposini" class="form-control" placeholder="Pos Inicial">
        </div>
	      <label class="control-label col-xs-3">Pos.Final:</label>
        <div class="col-xs-2">
            <input type="text" id="txtposfin" onkeypress="return ValidNumber(event);" name="txtposfin" class="form-control" placeholder="Pos Final">
        </div>
    </div>

 <div class="form-group">
        <label class="control-label col-xs-3">Salto:</label>
        <div class="col-xs-2">
            <input type="text" id="txtsalto" onkeypress="return ValidNumber(event);" name="txtsalto" class="form-control" placeholder="Salto">
        </div>
	
    </div>

    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="button" class="btn btn-primary" OnClick="insertar()"  value="Ingresar">
            <input type="reset"  class="btn btn-primary" value="Limpiar">
            <input type="button" value="Consulta Masiva" OnClick="window.location='../modelo/Ubicacion_list.php'" class="btn btn-primary">
        </div>
    </div>
  </form>
</div>

<!-- Js vinculados -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../js/responsive.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script language ="javascript" type = "text/javascript" src= "../js/funcionesgenerales.js"></script> 

    <script > 
    function insertar()
    {
         //alert(document.getElementById("txtpasillo").value);



    if (document.getElementById("txtpasillo").value!="") {        
        if (document.getElementById("txttipo").value!="") {
            if (document.getElementById("txtposini").value!="") {
                if (document.getElementById("txtposfin").value!="") {
                    if (document.getElementById("txtsalto").value!="") {
                            alert('Grabado exitosamente!');
                            //alert(document.getElementById("txtpasillo").value);
                             document.frm_ubicacion.submit(); 
                         } else {
                          alert('Campo Salto es Obligatorio!');
                          document.getElementById("txtsalto").focus();
                          return false;         
                        }
                    }
                        else
                        {
                              alert('Campo Posición Final es Obligatorio!');
                          document.getElementById("txtposfin").focus();
                          return false;         
                        }
                    }
                      else
                        {
                              alert('Campo Posición Inicial es Obligatorio!');
                          document.getElementById("txtposini").focus();
                          return false;         
                        }
                        }  
                         else
                        {
                              alert('Campo Tipo es Obligatorio!');
                          document.getElementById("txttipo").focus();
                          return false;         
                        }
                        }
                    else
                        {
                              alert('Campo Pasillo es Obligatorio!');
                          document.getElementById("txtpasillo").focus();
                          return false;         
                        } 
    }
    </script>        
</body>
</html>
