<?php
  session_start();
  $id = $_GET['id'];


 include_once('Ubicacion.php');
 include_once('UbicacionCollector.php');
 $UbicacionCollectorObj = new UbicacionCollector();
 $ObjUbicacion = $UbicacionCollectorObj->showUbicacionId($id);
 //print_r($ObjUbicacion);
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
       <h1>Mantenimiento de Ubicacion</h1>
    </div>
   <form action ="../modelo/Ubicacion_update.php" method ="post" class="form-horizontal">
   	   
 <div class="form-group">
        <label class="control-label col-xs-3" >Codigo:</label>
        <div class="col-xs-2">
            <input type="text"  id="txtcodigo" onkeypress="return ValidNumber(event);" name="txtcodigo"  class="form-control" value = "<?php echo $ObjUbicacion->getcodigo(); ?>">
    
        </div>
    </div>

        <div class="form-group">
        <label class="control-label col-xs-3" >Pasillo:</label>
        <div class="col-xs-2">
            <input type="text"  id="txtpasillo" onkeypress="return ValidNumber(event);" name="txtpasillo" class="form-control" value = "<?php echo $ObjUbicacion->getpasillo(); ?>">
    
        </div>
    </div>
 
    <div class="form-group">
        <label class="control-label col-xs-3" >Tipo:</label>
        <div class="col-xs-2">
            <input type="text"  id="txttipo" onkeypress="return ValidNumber(event);" name="txttipo"  class="form-control" value = "<?php echo $ObjUbicacion->gettipo(); ?>">
    
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Pos. Inicio:</label>
        <div class="col-xs-9">
            <input type="text"  id="txtposinicio" onkeypress="return ValidNumber(event);" name="txtposinicio"   class="form-control"  value = "<?php echo $ObjUbicacion->getposinicio(); ?>">
        </div>
    </div>
    
  <div class="form-group">
        <label class="control-label col-xs-3" >Pos. Final:</label>
        <div class="col-xs-9">
            <input type="text"  id="txtposfinal" onkeypress="return ValidNumber(event);" name="txtposfinal"   class="form-control"  value = "<?php echo $ObjUbicacion->getposfinal(); ?>">
        </div>
    </div>
    
    
  <div class="form-group">
        <label class="control-label col-xs-3" >Salto:</label>
        <div class="col-xs-9">
            <input type="text"  id="txtsalto" onkeypress="return ValidNumber(event);" name="txtsalto"   class="form-control"  value = "<?php echo $ObjUbicacion->getsalto(); ?>">
        </div>
    </div>
   
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" class="btn btn-primary" OnClick="mensaje()"  value="Actualizar">
            <input type="reset" class="btn btn-primary" value="Limpiar">
      <input type="button" value="Regresar" OnClick="history.back()" class="btn btn-primary">   
      
        </div>
    </div>
  </form>
</div>


    <script > function mensaje(){
        alert('Registro actualizado exitosamente!');
        submit();
    }
    </script>
<!-- Js vinculados -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../js/responsive.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script language ="javascript" type = "text/javascript" src= "../js/funcionesgenerales.js"></script> 
</body>
</html>


