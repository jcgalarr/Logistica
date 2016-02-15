<?php
  session_start();
  $id = $_GET['id'];

 // echo $id;
 include_once('Bodega.php');
 include_once('BodegaCollector.php');
 $BodegaCollectorObj = new BodegaCollector();
 $ObjBodega = $BodegaCollectorObj->showBodegaId($id);
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
       <h1>Bodega</h1>
    </div>
   <form id="frm_bodega" name="frm_bodega" action ="../modelo/Bodega_update.php" method ="post" class="form-horizontal">
 
       <div class="form-group">
        <label class="control-label col-xs-3">Codigo:</label>
        <div class="col-xs-9">
            <input type="text"  name="txtcodigo" id="txtcodigo"    class="form-control" value = "<?php echo $ObjBodega->getcodigo(); ?>">
        </div>
    </div>

   
    <div class="form-group">
        <label class="control-label col-xs-3">Descripcion:</label>
        <div class="col-xs-9">
            <input type="text"  name="txtdescripcion" id="txtdescripcion"    class="form-control" value = "<?php echo $ObjBodega->getdescripcion(); ?>">
        </div>
    </div>
    
	<div class="form-group">
        <label class="control-label col-xs-3" >Dirección:</label>
        <div class="col-xs-9">
            <input type="text"  name="txtdireccion" id="txtdireccion"   class="form-control" value = "<?php echo $ObjBodega->getdireccion(); ?>">
        </div>
    </div>
    

<div class="form-group">
        <label class="control-label col-xs-3" >Telfono:</label>
        <div class="col-xs-9">
            <input type="text"  name="txttel" id="txttel" onkeypress="return ValidNumber(event);"   class="form-control" value = "<?php echo $ObjBodega->gettelefono(); ?>">
        </div>
    </div>
     
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="button" OnClick="mensaje()" class="btn btn-primary" value="Actualizar">
            <input type="reset" class="btn btn-primary" value="Limpiar">
	    <input type="button" value="Regresar" OnClick="window.location='Bodega_list.php'" class="btn btn-primary">		
			
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
  if (document.getElementById("txtdescripcion").value =="") {
                alert('Campo Descripcion es Obligatorio!');
                          document.getElementById("txtdescripcion").focus();
                          return false;       
	}

  if (document.getElementById("txtdireccion").value =="") {
                alert('Campo Dirección es Obligatorio!');
                          document.getElementById("txtdireccion").focus();
                          return false;       
	}


  if (document.getElementById("txttel").value =="") {
                alert('Campo telefono es Obligatorio!');
                          document.getElementById("txttel").focus();
                          return false;       
	}

document.frm_bodega.submit();

       

    }
		    
</script>
</body>
</html>


