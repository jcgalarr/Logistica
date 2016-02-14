<?php
  session_start();
  $id = $_GET['id'];

 include_once('Ruta.php');
 include_once('RutaCollector.php');
 $RutaCollectorObj = new RutaCollector();
 $ObjRuta = $RutaCollectorObj->showRutaId($id);
 
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
       <h1>Ruta</h1>
    </div>
   <form id="frm_ruta" name="frm_ruta" action ="../modelo/Ruta_update.php" method ="post" class="form-horizontal">
   	    <div class="form-group">
        <label class="control-label col-xs-3" >Codigo de la Ruta:</label>
        <div class="col-xs-2">
            <input type="tel" name="txtcodigo" id="txtcodigo"  class="form-control"  value = "<?php echo $ObjRuta->getcodigo(); ?>">
    
        </div>
    </div>
 
    <div class="form-group">
        <label class="control-label col-xs-3" >Descripcion de Ruta:</label>
        <div class="col-xs-2">
            <input type="text"  name="txtdescripcion" id="txtdescripcion"  class="form-control" value = "<?php echo $ObjRuta->getdescripcion(); ?>">
    
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Origen:</label>
        <div class="col-xs-9">
            <input type="text"  name="txtorigen" id="txtorigen" class="form-control"  value = "<?php echo $ObjRuta->getorigen(); ?>">
        </div>
    </div>
    
  <div class="form-group">
        <label class="control-label col-xs-3" >Destino:</label>
        <div class="col-xs-9">
            <input type="text"  name="txtdestino" id="txtdestino"   class="form-control"  value = "<?php echo $ObjRuta->getdestino(); ?>">
        </div>
    </div>
    
    
  <div class="form-group">
        <label class="control-label col-xs-3" >Tiempo Ruta:</label>
        <div class="col-xs-2">
            <input type="tel" name="txttiempo" id="txttiempo" onkeypress="return ValidNumber(event)" class="form-control"  value = "<?php echo $ObjRuta->gettiemporuta(); ?>">
        </div>
    </div>
    

     <div class="form-group">
        <label class="control-label col-xs-3">Tipo Ruta:</label>
        <div class="col-xs-9">
            <select type="text"  id="tipo" name="tipo" value="<?php echo $ObjRuta->gettiporuta(); ?>" >
               <?php $selected = $ObjRuta->gettiporuta();?>
               <option <?php if ($selected == 'I') echo 'selected';  ?> value="I">Interna</option>
               <option <?php if ($selected == 'E') echo 'selected';  ?> value="E">Externa</option>
            </select>
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
    <script src="../js/funcionesgenerales.js"></script>
</body>
</html>


