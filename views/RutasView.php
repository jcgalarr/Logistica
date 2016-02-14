<?php
session_start();
include_once ('../modelo/conexion.php');
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
       <h1>Ingreso de Rutas</h1>
    </div>

   <form id="frm_ruta" name="frm_ruta" action ="../modelo/Ruta_insert.php " method ="post" class="form-horizontal">
    
    <div class="form-group">
        <label class="control-label col-xs-3">Descripcion de Ruta:</label>
        <div class="col-xs-9">
            <input type="text" id="txtdescripcion" name="txtdescripcion"  class="form-control" placeholder="Nombre dela Ruta" >
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-3">Origen:</label>
        <div class="col-xs-9">
            <input type="text" id="txtorigen" name="txtorigen" class="form-control"  placeholder="Origen de la Ruta" >
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-3">Destino:</label>
        <div class="col-xs-9">
            <input type="text" id="txtdestino" name="txtdestino" class="form-control"  placeholder="Destino de la Ruta" >
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-3">Tiempo Ruta:</label>
        <div class="col-xs-2">
            <input type="tel" id="txttiempo" onkeypress="return ValidNumber(event)" class="form-control" name="txttiempo"  placeholder="Tiempo de la Ruta" >
        </div>
         <div class="col-xs-2">
            <input type="text" class="form-control " placeholder="HORA(S)" disabled="true">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-3">Tipo Ruta:</label>
        <div class="col-xs-9">
            <select type="text" name="tipo" placeholder="Ruta" >
		<option value="I">Interna</option>
  		<option value="E">Externa</option>
	    </select>
        </div>
    </div>	
    <br/>

    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="button" class="btn btn-primary" OnClick="insertar()"  value="Ingresar">
            <input type="reset"  class="btn btn-primary" value="Limpiar">
            <input type="button" value="Consulta Masiva" OnClick="window.location='../modelo/Mantenimiento_Rutas.php'" class="btn btn-primary">
        </div>
    </div>
  </form>
</div>

<!-- Js vinculados -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../js/responsive.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/funcionesgenerales.js"></script>
    
  <script>
      function insertar(){      
        if (document.getElementById("txtdescripcion").value!="") {
            if (document.getElementById("txtorigen").value!="") {
                if (document.getElementById("txtdestino").value!="") {
                    if (document.getElementById("txttiempo").value!="") {
                        alert('Grabado exitosamente!');
                        document.frm_ruta.submit();
                        }
                        else{
                            alert('Campo Tiempo es Obligatorio!');
                            document.getElementById("txttiempo").focus();
                            return false;
                            }
                        }
                        else{
                            alert('Campo Destino es Obligatorio!');
                            document.getElementById("txtdestino").focus();
                            return false;
                            }
                        }
                        else{
                            alert('Campo Origen es Obligatorio!');
                            document.getElementById("txtorigen").focus();
                            return false;         
                             }
                        }  
                        else {
                            alert('Campo Descripcion es Obligatorio!');
                            document.getElementById("txtdescripcion").focus();
                            return false;         
                        }  
    }
  </script>
</body>
</html>
