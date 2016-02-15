<?php
  session_start();
  $id = $_GET['id'];

 include_once('Chofer.php');
 include_once('ChoferCollector.php');
 $ChoferCollectorObj = new ChoferCollector();
 $ObjChofer = $ChoferCollectorObj->showChoferId($id);

 include_once("TransportistaCollector.php");
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
    <div class="page-header">
       <h1>Edición de Choferes</h1>
    </div>
   <form class="form-horizontal" id="frm_chofer" name="frm_chofer"  action ="../modelo/Chofer_update.php" method ="post">
    <div class="form-group">
        <label class="control-label col-xs-3">Código</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" name="txtcodigo" value = "<?php echo $ObjChofer->getcodigo(); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Nombres</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" name="txtnombre"   value = "<?php echo $ObjChofer->getnombre(); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Apellidos</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" name="txtapellido"  value = "<?php echo $ObjChofer->getapellido(); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Nro. Licencia</label>
        <div class="col-xs-9">
            <input type="text" onkeypress="return ValidNumber(event)" class="form-control" name="txtlicencia"  value = "<?php echo $ObjChofer->getlicencia(); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Categoria</label>
        <div class="col-xs-9">
            <select type="text" name="combocategoria" id="combocategoria"  value="<?php echo $ObjChofer->getcategoria_lic(); ?>" >
            <?php $selected = $ObjChofer->getcategoria_lic(); ?>
        <option <?php if ($selected == 'A') echo 'selected';  ?> value="A">Clase A</option>
        <option <?php if ($selected == 'B') echo 'selected';  ?> value="B">Clase B</option>
        <option <?php if ($selected == 'C') echo 'selected';  ?> value="C">Clase C</option>
        <option <?php if ($selected == 'D') echo 'selected';  ?> value="D">Clase D</option>
        <option <?php if ($selected == 'E') echo 'selected';  ?> value="E">Clase E</option>
        <option <?php if ($selected == 'F') echo 'selected';  ?> value="F">Clase F</option>
        </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Celular</label>
        <div class="col-xs-9">
            <input type="text" onkeypress="return ValidNumber(event)" class="form-control" name="txtcelular" value = "<?php echo $ObjChofer->getnumcelular1(); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Record Policial</label>
        <div class="col-xs-9">
        <select type="text"  id="comborecordpolicial" name="comborecordpolicial" value="<?php echo $ObjChofer->getrecordpolicial(); ?>">
        <?php $selected = $ObjChofer->getrecordpolicial(); ?>
        <option <?php if ($selected == 'S') echo 'selected';  ?> value="S">Si</option>
        <option <?php if ($selected == 'N') echo 'selected';  ?> value="N">No</option>
        </select>
    </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Transportista</label>
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
            <input type="button" class="btn btn-primary" OnClick="mensaje()"  value="Actualizar">
            <input type="reset" class="btn btn-primary" value="Limpiar">
            <input type="button" value="Regresar" OnClick="history.back()" class="btn btn-primary">   
        </div>
    </div>
  </form>
</div>
    <script > function mensaje(){
        //alert('Registro actualizado exitosamente!');
        //alert('Entro!');
        document.frm_chofer.submit();
    }
    </script>
<!-- Js vinculados -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../js/responsive.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/funcionesgenerales.js"></script>
</body>
</html>
