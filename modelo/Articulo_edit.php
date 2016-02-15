<?php
  session_start();
  $id = $_GET['id'];


 include_once('articulo.php');
 include_once('ArticuloCollector.php');
 $ArticuloCollectorObj = new ArticuloCollector();
 $ObjArticulo = $ArticuloCollectorObj->showArticuloId($id);
 
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
       <h1>Articulo</h1>
    </div>
   <form action ="../modelo/Articulo_update.php" method ="post" class="form-horizontal">
   	    <div class="form-group">
        <label class="control-label col-xs-3" >Codigo del Articulo:</label>
        <div class="col-xs-2">
            <input type="text"  id="txtcodigo" name="txtcodigo"  class="form-control"  value = "<?php echo $ObjArticulo->getcodigo(); ?>">
    
        </div>
    </div>
 
    <div class="form-group">
        <label class="control-label col-xs-3" >Nombre del Articulo:</label>
        <div class="col-xs-2">
            <input type="text"  id="txtnombre" name="txtnombre"  class="form-control" value = "<?php echo $ObjArticulo->getnombre(); ?>">
    
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Desccripcion:</label>
        <div class="col-xs-9">
            <input type="text"  id="txtdescripcion" name="txtdescripcion"   class="form-control"  value = "<?php echo $ObjArticulo->getdescripcion(); ?>">
        </div>
    </div>
    
  <div class="form-group">
        <label class="control-label col-xs-3" >Unidad de Medida:</label>
        <div class="col-xs-9">
            <input type="text"  id="txtunidadmedida" name="txtunidadmedida"   class="form-control"  value = "<?php echo $ObjArticulo->getunidadmedida(); ?>">
        </div>
    </div>
    
    
     <div class="form-group">
        <label class="control-label col-xs-3">Estado:</label>
        <div class="col-xs-9">
            <select type="text"  id="txtestado" name="txtestado" class="form-control" placeholder="Estado" value="<?php echo $ObjArticulo->getestado(); ?>" >
               <<?php $selected = $ObjArticulo->getestado();?>
               <option <?php if ($selected == 'A') echo 'selected';  ?> value="A">Activo</option>
               <option <?php if ($selected == 'I') echo 'selected';  ?> value="I">Inactivo</option>
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


