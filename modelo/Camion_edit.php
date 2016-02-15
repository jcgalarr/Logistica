<?php
  session_start();
  $id = $_GET['id'];


 include_once('camion.php');
 include_once('CamionCollector.php');
 $CamionCollectorObj = new CamionCollector();
 $ObjCamion = $CamionCollectorObj->showCamionId($id);

 include_once("../modelo/TransportistaCollector.php");
$TransportistaCollectorObj = new TransportistaCollector();
include_once("../modelo/ChoferCollector.php");
$ChoferCollectorObj = new ChoferCollector();
 
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
       <h1>Mantenimiento de Camiones</h1>
    </div>
   <form action ="../modelo/Camion_update.php" method ="post" class="form-horizontal">
   	    <div class="form-group">
        <label class="control-label col-xs-3" >Placa:</label>
        <div class="col-xs-2">
            <input type="text"  id="txtplaca" name="txtplaca"  class="form-control"  value = "<?php echo $ObjCamion->getplaca(); ?>">
    
        </div>
    </div>
 
    <div class="form-group">
        <label class="control-label col-xs-3" >Año:</label>
        <div class="col-xs-2">
            <input type="text"  id="txtanio" name="txtanio"  class="form-control" value = "<?php echo $ObjCamion->getanio(); ?>">
    
        </div>
    </div>
     <div class="form-group">
        <label class="control-label col-xs-3">Marca:</label>
        <div class="col-xs-9">
            <select type="text"  id="marca" name="marca" class="form-control" placeholder="Marca" value="<?php echo $ObjCamion->getmarca(); ?>" >
               <<?php $selected = $ObjCamion->getmarca();?>
               <option <?php if ($selected == 'H') echo 'selected';  ?> value="H">HINO</option>
               <option <?php if ($selected == 'M') echo 'selected';  ?> value="M">MERCEDES</option>
               <option <?php if ($selected == 'Q') echo 'selected';  ?> value="Q">QMC</option>
            </select>
        </div>
    </div> 
     <div class="form-group">
        <label class="control-label col-xs-3">Tipo:</label>
        <div class="col-xs-9">
            <select type="text"  id="tipo" name="tipo" class="form-control" placeholder="Tipo" value="<?php echo $ObjCamion->gettipo(); ?>" >
               <<?php $selected = $ObjCamion->gettipo();?>
               <option <?php if ($selected == 'P') echo 'selected';  ?> value="P">Pequeño</option>
               <option <?php if ($selected == 'M') echo 'selected';  ?> value="M">Mediano</option>
               <option <?php if ($selected == 'G') echo 'selected';  ?> value="G">Grande</option>
            </select>
        </div>
    </div>     
    
  <div class="form-group">
        <label class="control-label col-xs-3" >Tonelaje:</label>
        <div class="col-xs-9">
            <input type="text"  id="txttonelaje" name="txttonelaje"   class="form-control"  value = "<?php echo $ObjCamion->gettonelaje(); ?>">
        </div>
    </div>
  <div class="form-group">
        <label class="control-label col-xs-3" >Caddies:</label>
        <div class="col-xs-9">
            <input type="text"  id="txtcadie" name="txtcadie"   class="form-control"  value = "<?php echo $ObjCamion->getcadies(); ?>">
        </div>
    </div>    

<div class="form-group">
        <label class="control-label col-xs-3" >Pallets:</label>
        <div class="col-xs-9">
            <input type="text"  id="txtpallet" name="txtpallet"   class="form-control"  value = "<?php echo $ObjCamion->getpallets(); ?>">
        </div>
    </div>     
     <div class="form-group">
        <label class="control-label col-xs-3">Tipo Combustible:</label>
        <div class="col-xs-9">
            <select type="text"  id="combustible" name="combustible" class="form-control" placeholder="Combustible" value="<?php echo $ObjCamion->gettipocombustible(); ?>" >
               <<?php $selected = $ObjCamion->gettipocombustible();?>
               <option <?php if ($selected == 'D') echo 'selected';  ?> value="D">Diesel</option>
               <option <?php if ($selected == 'S') echo 'selected';  ?> value="S">Super</option>
               <option <?php if ($selected == 'E') echo 'selected';  ?> value="E">Extra</option>
            </select>
        </div>
    </div>  

    <div class="form-group">
    <!--COMBO CARGADO DE LA BASE-->
        <label class="control-label col-xs-3">Chofer:</label>
        <div class="col-xs-9">
            <select type="text"  id="combochofer" name="combochofer" >
        <?php  
            foreach ($ChoferCollectorObj->showChofer() as $c){
        ?>
        <option value="<?php echo $c->getlicencia() ?>"><?php echo $c->getnombre() ?></option>
        <?php  
        }
        ?>
        </select>
        </div>
    </div>  
    <div class="form-group">
    <!--COMBO CARGADO DE LA BASE-->
        <label class="control-label col-xs-3">Transportista:</label>
        <div class="col-xs-9">
            <select type="text"  id="combotransportista" name="combotransportista" >
        <?php  
            foreach ($TransportistaCollectorObj->showTransportista() as $c){
        ?>
        <option value="<?php echo $c->getruc() ?>"><?php echo $c->getnombre() ?></option>
        <?php  
        }
        ?>
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
    <script src="../js/bootstrap.min.js"></script>s
</body>
</html>


