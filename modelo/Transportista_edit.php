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
   <form id="frm_trans" name="frm_trans" action ="../modelo/Transportista_update.php" method ="post" class="form-horizontal">
 
       

    <div class="form-group">
        <label class="control-label col-xs-3" >Ruc:</label>
        <div class="col-xs-2">
            <input type="tel" onkeypress="return ValidNumber(event);" name="txtruc" id="txtruc" class="form-control" value = "<?php echo $ObjTransportista->getruc(); ?>">
    
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Nombre:</label>
        <div class="col-xs-9">
            <input type="text"  name="txtnombre" id="txtnombre"    class="form-control" value = "<?php echo $ObjTransportista->getnombre(); ?>">
        </div>
    </div>
    
	<div class="form-group">
        <label class="control-label col-xs-3" >Dirección:</label>
        <div class="col-xs-9">
            <input type="text"  name="txtdireccion" id="txtdireccion"   class="form-control" value = "<?php echo $ObjTransportista->getdireccion(); ?>">
        </div>
    </div>
    
    
	<div class="form-group">
        <label class="control-label col-xs-3" >Telefono 1:</label>
        <div class="col-xs-2">
            <input type="tel" onkeypress="return ValidNumber(event);" id="txttel1" name="txttel1" class="form-control" value = "<?php echo $ObjTransportista->gettelefono1(); ?>">
        </div>
		<label class="control-label col-xs-2" >Telefono 2:</label>
		<div class="col-xs-2">
            <input type="tel" onkeypress="return ValidNumber(event);" id="txttel2" name="txttel2" class="form-control"  value = "<?php echo $ObjTransportista->gettelefono2(); ?>">
        </div>
    </div>
	
	
	<div class="form-group">
        <label class="control-label col-xs-3" >Celular 1:</label>
        <div class="col-xs-2">
            <input type="tel"  name="txtcelular1" id="txtcelular1"  class="form-control"  value = "<?php echo $ObjTransportista->getnumcelular1(); ?>">
        </div>
		<label class="control-label col-xs-2" >Celular 2:</label>
        <div class="col-xs-2">
            <input type="tel" onkeypress="return ValidNumber(event);" name="txtcelular2" id="txtcelular2" class="form-control" value = "<?php echo $ObjTransportista->getnumcelular2(); ?>">
        </div>
    </div>
	
	
	
    
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="button" OnClick="mensaje()" class="btn btn-primary" value="Actualizar">
            <input type="reset" class="btn btn-primary" value="Limpiar">
	    <input type="button" value="Regresar" OnClick="window.location='Transportista_list.php'" class="btn btn-primary">		
			
        </div>
    </div>
  </form>
</div>

<!-- Js vinculados -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../js/responsive.js"></script>
    <script src="../js/bootstrap.min.js"></script>
<script language ="javascript" type = "text/javascript" src= "../js/funcionesgenerales.js"></script>


<script>
      function mensaje(){
        //alert('Registro actualizado exitosamente!');
        //submit();
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
</body>
</html>


