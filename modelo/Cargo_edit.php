<?php
  session_start();
  $id = $_GET['id'];

 // echo $id;
 include_once('Cargo.php');
 include_once('CargoCollector.php');
 $CargoCollectorObj = new CargoCollector();
 $ObjCargo = $CargoCollectorObj->showCargoId($id);
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
       <h1>Cargo</h1>
    </div>
   <form id="frm_cargo" name="frm_cargo" action ="../modelo/Cargo_update.php" method ="post" class="form-horizontal">
 
       

    <div class="form-group">
        <label class="control-label col-xs-3" >Código:</label>
        <div class="col-xs-2">
            <input type="tel" onkeypress="return ValidNumber(event);" name="txtcodigo"  class="form-control" value = "<?php echo $ObjCargo->getcodigo(); ?>">
    
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Descripción:</label>
        <div class="col-xs-9">
            <input type="text" id="txtdescripcion"  name="txtdescripcion"   class="form-control" value = "<?php echo $ObjCargo->getdescripcion(); ?>">
        </div>
    </div>
    
	
	
	
    
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="button" OnClick="mensaje()" class="btn btn-primary" value="Actualizar">
            <input type="reset" class="btn btn-primary" value="Limpiar">
	    <input type="button" value="Regresar" OnClick="window.location='Cargo_list.php'" class="btn btn-primary">		
			
        </div>
    </div>
  </form>
</div>

<!-- Js vinculados -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../js/responsive.js"></script>
    <script src="../js/bootstrap.min.js"></script>

<script>
      function mensaje(){
	 {
         //alert(document.getElementById("txtdescripcion").value);
        

             if (document.getElementById("txtdescripcion").value!="") {
                             document.frm_cargo.submit(); 
                         } else {
                          alert('Campo Descripcion  es Obligatorio!');
                          document.getElementById("txtdescripcion").focus();
                          return false;         
                        }
                    }
                        

       // alert('Registro actualizado exitosamente!');
       // submit();
    }
		    
</script>
</body>
</html>


