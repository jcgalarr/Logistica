<?php
session_start();
include_once ('../modelo/conexion.php');
include_once("../modelo/CargoCollector.php");
$CargoCollectorObj = new CargoCollector();

include_once("../modelo/DepartamentoCollector.php");
$DepartamentoCollectorObj = new DepartamentoCollector();

include_once("../modelo/BodegaCollector.php");
$BodegaCollectorObj = new BodegaCollector();

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
   <div class="col-xs-offset-10 col-xs-9">
   <br>
  <input  type="button" value="Menú" OnClick="window.location='../views/ViewMenu.php'" class="btn btn-primary" class="">
  </div>
	<div class="page-header">
       <h1>Ingreso de Usuario</h1>
    </div> 
   <form id="frm_usua" name="frm_usua" action ="../modelo/Usuario_insert.php " method ="post" class="form-horizontal">  
    <div class="form-group">
        <label class="control-label col-xs-3">Nombres</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="txtnombre" name="txtnombre" placeholder="Nombres">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Apellidos</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="txtapellido" name="txtapellido" placeholder="Apellidos">
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
        <label class="control-label col-xs-3">Cédula</label>
        <div class="col-xs-9">
            <input type="tel" onkeypress="return ValidNumber(event)" class="form-control" id="txtcedula" name="txtcedula" placeholder="# de Cédula">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Login</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="txtlogin" name="txtlogin"  placeholder="Nombre de Usuario">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-3">Contraseña:</label>
        <div class="col-xs-9">
            <input type="password" class="form-control" id="txtcontrasena" name="txtcontrasena"  placeholder="Ingrese la contraseña">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Estado</label>
        <div class="col-xs-9">
             <select type="text" id="comboestado" name="comboestado">
      <option value="A">Activo</option>
      <option value="I">Inactivo</option>
      </select>
        </div>
    </div>	
     <div class="form-group">
        <label class="control-label col-xs-3">Tipo de Usuario:</label>
        <div class="col-xs-9">
             <select type="text" id="combotipo" name="combotipo">
      <option value="A">Administrativo</option>
      <option value="O">Operacional</option>
      </select>
        </div>
    </div>  


    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="button" class="btn btn-primary" OnClick="insertar()"  value="Ingresar">              
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

<script>
      function insertar(){      
        if (document.getElementById("txtnombre").value!="") {
            if (document.getElementById("txtapellido").value!="") {
                if (document.getElementById("combocargo").value!="") {
                    if (document.getElementById("combodepartamento").value!="") {
                        if (document.getElementById("combobodega").value!="") {
                          if (document.getElementById("txtcedula").value!="") {
                            if (document.getElementById("txtlogin").value!="") {
                              if (document.getElementById("txtcontrasena").value!="") {
                                if (document.getElementById("comboestado").value!="") {
                                  if (document.getElementById("combotipo").value!="") {
                            //alert('Grabado exitosamente!');
                            document.frm_usua.submit();
                        }
                        else{
                            alert('Campo Tipo de Usuario es Obligatorio!');
                            document.getElementById("combotipo").focus();
                            return false;
                            }
                        }
                        else{
                            alert('Campo Estado es Obligatorio!');
                            document.getElementById("comboestado").focus();
                            return false;
                            }
                        }
                        else{
                            alert('Campo Contraseña es Obligatorio!');
                            document.getElementById("txtcontrasena").focus();
                            return false;         
                             }
                        }  
                        else {
                            alert('Campo Login es Obligatorio!');
                            document.getElementById("txtlogin").focus();
                            return false;         
                            }
                        } 
                        else {
                            alert('Campo Cédula es Obligatorio!');
                            document.getElementById("txtcedula").focus();
                            return false;         
                            }  
                        }
                        else{
                            alert('Campo Bodega es Obligatorio!');
                            document.getElementById("combobodega").focus();
                            return false;
                            }
                        }
                        else{
                            alert('Campo Departamento es Obligatorio!');
                            document.getElementById("combodepartamento").focus();
                            return false;
                            }
                        }
                        else{
                            alert('Campo Cargo es Obligatorio!');
                            document.getElementById("combocargo").focus();
                            return false;         
                             }
                        }  
                        else {
                            alert('Campo Apellido es Obligatorio!');
                            document.getElementById("txtapellido").focus();
                            return false;         
                            }
                        } 
                        else {
                            alert('Campo Nombre es Obligatorio!');
                            document.getElementById("txtnombre").focus();
                            return false;         
                        }  
          
    }
  </script>
</body>
</html>
