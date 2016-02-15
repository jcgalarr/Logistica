<?php
 session_start();
  
 include_once('../modelo/Transportista.php');
 include_once('../modelo/TransportistaCollector.php');
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
   <div class="col-xs-offset-10 col-xs-9">
    <br>
    <input  type="button" value="Menu" OnClick="window.location='../views/ViewMenu.php'"  class="btn btn-primary" class="">
  </div>
   <div class="page-header">
       <h1>Transportista</h1>
    </div>
  

   <form id="frm_trans" name="frm_trans" action ="../modelo/Transportista_insert.php" method ="post" class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-xs-3" >Ruc:</label>
        <div class="col-xs-2">
            <input  onkeypress="return ValidNumber(event);" MaxLength="13" type="tel" id="txtruc" name="txtruc"  class="form-control" placeholder="Ruc">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Nombre:</label>
        <div class="col-xs-9">
            <input type="text" id="txtnombre" name="txtnombre"   class="form-control" placeholder="Nombre">
        </div>
    </div>
    
	<div class="form-group">
        <label class="control-label col-xs-3" >Dirección:</label>
        <div class="col-xs-9">
            <input type="text" id="txtdireccion" name="txtdireccion"   class="form-control" placeholder="Direccion">
        </div>
    </div>
    
    
	<div class="form-group">
        <label class="control-label col-xs-3" >Telefono 1:</label>
        <div class="col-xs-2">
            <input onkeypress="return ValidNumber(event);" type="tel"  id="txttel1" name="txttel1" class="form-control" placeholder="Telefono 1">
        </div>
		<label class="control-label col-xs-2" >Telefono 2:</label>
		<div class="col-xs-2">
            <input onkeypress="return ValidNumber(event);" type="tel" id="txttel2"  name="txttel2"class="form-control" placeholder="Telefono 2">
        </div>
    </div>
	
	
	<div class="form-group">
        <label class="control-label col-xs-3" >Celular 1:</label>
        <div class="col-xs-2">
            <input onkeypress="return ValidNumber(event);" type="tel"  id="txtcelular1"  name="txtcelular1"   class="form-control" placeholder="Celular 1">
        </div>
		<label class="control-label col-xs-2" >Celular 2:</label>
        <div class="col-xs-2">
            <input onkeypress="return ValidNumber(event);" type="tel"  id="txtcelular2"   name="txtcelular2" class="form-control" placeholder="Celular 2">
        </div>
    </div>
	
	
	
    
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="button" OnClick="insertar()" class="btn btn-primary" value="Ingresar">
            <input type="reset" class="btn btn-primary" value="Limpiar">
	    <input type="button" value="Consulta Masiva" OnClick="window.location='../modelo/Transportista_list.php'" class="btn btn-primary">	
           	
			
        </div>
    </div>
  </form>
</div>
<script > 


    function insertar()
    {
         //alert(document.getElementById("txtdescripcion").value);
        

        if (document.getElementById("txtruc").value!="") {
            if (document.getElementById("txtnombre").value!="") {
                if (document.getElementById("txtdireccion").value!="") {
                    if (document.getElementById("txttel1").value!="") {
                            //alert('Grabado exitosamente!');
                             document.frm_trans.submit(); 
                         } else {
                          alert('Campo Telefono 1 es Obligatorio!');
                          document.getElementById("txttel1").focus();
                          return false;         
                        }
                    }
                        else
                        {
                              alert('Campo Direccion es Obligatorio!');
                          document.getElementById("txtdireccion").focus();
                          return false;         
                        }
                    }
                      else
                        {
                              alert('Campo Nombre es Obligatorio!');
                          document.getElementById("txtnombre").focus();
                          return false;         
                        }
                        }  
                         else
                        {
                              alert('Campo ruc  es Obligatorio!');
                          document.getElementById("txtruc").focus();
                          return false;         
                        }  

          
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
