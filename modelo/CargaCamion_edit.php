<?php
  session_start();
  $id = $_GET['id'];


 include_once('cargacamiones.php');
 include_once('CargaCamionCollector.php');
 $CargaCamionCollectorObj = new CargaCamionCollector();
 $ObjCargaCamion = $CargaCamionCollectorObj->showCargaCamionId($id);

include_once ('conexion.php');
include_once("../modelo/CamionCollector.php");
$CamionCollectorObj = new CamionCollector();
include_once("../modelo/RutaCollector.php");
$RutaCollectorObj = new RutaCollector();
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
       <h1>Carga de Camiones</h1>
    </div>
   <form action ="../modelo/CargaCamion_update.php" method ="post" class="form-horizontal">
    <div class="form-group">
    <!--COMBO CARGADO DE LA BASE-->
        <label class="control-label col-xs-3">Camion:</label>
        <div class="col-xs-9">
            <select type="text"  id="combocamion" name="combocamion" >
        <?php  
            foreach ($CamionCollectorObj->showCamion() as $c){
        ?>
        <option value="<?php echo $c->getplaca() ?>"><?php echo $c->getplaca() ?></option>
        <?php  
        }
        ?>
        </select>
        </div>
    </div>  
    <div class="form-group">
    <!--COMBO CARGADO DE LA BASE-->
        <label class="control-label col-xs-3">Ruta:</label>
        <div class="col-xs-9">
            <select type="text"  id="comboruta" name="comboruta" >
        <?php  
            foreach ($RutaCollectorObj->showRuta() as $c){
        ?>
        <option value="<?php echo $c->getcodigo() ?>"><?php echo $c->getdescripcion() ?></option>
        <?php  
        }
        ?>
        </select>
        </div>
    </div>  

  <div class="form-group">
        <label class="control-label col-xs-3" >Caddie:</label>
        <div class="col-xs-9">
            <input type="text"  id="txtcadie" name="txtcadie"   class="form-control"  value = "<?php echo $ObjCargaCamion->getcadie(); ?>">
        </div>
    </div>
  <div class="form-group">
        <label class="control-label col-xs-3" >Puerta:</label>
        <div class="col-xs-9">
            <input type="text"  id="txtpuerta" name="txtpuerta"   class="form-control"  value = "<?php echo $ObjCargaCamion->getpuerta(); ?>">
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
    <script src="../js/bootstrap.min.js"></script>s
</body>
</html>


