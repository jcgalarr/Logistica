<?php
session_start();
$id = $_GET['id'];

 include_once('UsuarioCollector.php');
 $UsuarioCollectorObj = new UsuarioCollector();
 $ObjUsuario = $UsuarioCollectorObj->showUsuarioId($id);

include_once("CargoCollector.php");
$CargoCollectorObj = new CargoCollector();
//$ObjCargo = $CargoCollectorObj->showCargoId($id);

include_once("DepartamentoCollector.php");
$DepartamentoCollectorObj = new DepartamentoCollector();
//$ObjDepartamento = $DepartamentoCollectorObj->showDepartamentoId($id);

include_once("BodegaCollector.php");
$BodegaCollectorObj = new BodegaCollector();
//$ObjBodega = $BodegaCollectorObj->showBodegaId($id);

?>


<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0"> 
<title>Sistema SGL</title>
    <!-- Estilos CSS vinculados -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/estilos.css" rel="stylesheet">
</head>

<body>
  <div class="container">
	<div class="page-header">
       <h1>Edición de Usuario</h1>
    </div> 
   <form id="frm_usua" name="frm_usua" action ="../modelo/Usuario_update.php " method ="post" class="form-horizontal">  
   <div class="form-group">
        <label class="control-label col-xs-3">Codigo</label>
        <div class="col-xs-9">
            <input type="tel" class="form-control" id="txtcodigo" name="txtcodigo" placeholder="Nombres" value = "<?php echo $ObjUsuario->getcodigo(); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Nombres</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="txtnombre" name="txtnombre" placeholder="Nombres" value = "<?php echo $ObjUsuario->getnombre(); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Apellidos</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="txtapellido" name="txtapellido" placeholder="Apellidos" value = "<?php echo $ObjUsuario->getapellido(); ?>">
        </div>
    </div>
    <div class="form-group">
	<label class="control-label col-xs-3">Cargo</label>
        <div class="col-xs-9">
	    <select  type="text"  name="combocargo" id="combocargo">
      <?php 
           foreach ($CargoCollectorObj->showCargo() as $c){
       ?>
		  <option value="<?php echo $c->getcodigo() ?>"><?php echo $c->getdescripcion() ?></option>
  		 <?php  
        }
        ?>
  	    </select>
	</div>
    </div>

        <div class="form-group">
  <label class="control-label col-xs-3">Departamento</label>
        <div class="col-xs-9">
      <select  type="text"  name="combodepartamento" id="combodepartamento">
      <?php 
           foreach ($DepartamentoCollectorObj->showDepartamento() as $c){
       ?>
      <option value="<?php echo $c->getcodigo() ?>"><?php echo $c->getdescripcion() ?></option>
       <?php  
        }
        ?>
        </select>
  </div>
    </div>

         <div class="form-group">
  <label class="control-label col-xs-3">Bodega</label>
        <div class="col-xs-9">
      <select  type="text"  name="combobodega" id="combobodega">
      <?php 
           foreach ($BodegaCollectorObj->showBodega() as $c){
       ?>
      <option value="<?php echo $c->getcodigo() ?>"><?php echo $c->getdescripcion() ?></option>
       <?php  
        }
        ?>
        </select>
  </div>
    </div>
		
    <div class="form-group">
        <label class="control-label col-xs-3">Cedula</label>
        <div class="col-xs-9">
            <input type="tel" onkeypress="return ValidNumber(event)" class="form-control" id="txtcedula" name="txtcedula" placeholder="# de Cedula" value = "<?php echo $ObjUsuario->getcedula(); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Login</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="txtlogin" name="txtlogin" placeholder="Nombre de Usuario" value = "<?php echo $ObjUsuario->getlogin(); ?>">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-3">Contraseña:</label>
        <div class="col-xs-9">
            <input type="password" class="form-control" id="txtcontrasena" name="txtcontrasena" placeholder="Ingrese la contraseña" value = "<?php echo $ObjUsuario->getcontrasena(); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Estado</label>
        <div class="col-xs-9">
             <select type="text" id="comboestado" name="comboestado" value = "<?php echo $ObjUsuario->getestado(); ?>">
              <?php $selected = $ObjUsuario->getestado(); ?>
      <option <?php if ($selected == 'A') echo 'selected';  ?>  value="A">Activo</option>
      <option <?php if ($selected == 'I') echo 'selected';  ?>  value="I">Inactivo</option>
      </select>
        </div>
    </div>	
     <div class="form-group">
        <label class="control-label col-xs-3">Tipo de Usuario:</label>
        <div class="col-xs-9">
             <select type="text" id="combotipo" name="combotipo" value = "<?php echo $ObjUsuario->gettipousu(); ?>">
             <?php $selected = $ObjUsuario->gettipousu(); ?>
      <option <?php if ($selected == 'A') echo 'selected';  ?>  value="A">Administrativo</option>
      <option <?php if ($selected == 'O') echo 'selected';  ?> value="O">Operacional</option>
      </select>
        </div>
    </div>  


    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="button" class="btn btn-primary" OnClick="mensaje()"  value="Actualizar">              
	    <input type="reset" class="btn btn-primary" value="Limpiar">
	    <input type="button" value="Consulta Masiva" OnClick="window.location='../modelo/Mantenimiento_Usuarios.php'" class="btn btn-primary">
        </div>
    </div>
  </form>
</div>

<!-- Js vinculados -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../js/responsive.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/funcionesgenerales.js"></script>

<script > function mensaje(){
        //alert('Registro actualizado exitosamente!');
        document.frm_usua.submit();
    }
    </script>


</body>
</html>
