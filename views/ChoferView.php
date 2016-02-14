<?php
session_start();
include_once ('../modelo/conexion.php');
include_once('../modelo/TransportistaCollector.php');
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
    <link href="../css/estilos.css" rel="stylesheet">
</head>

<body>
  <div class="container">
  <div class="col-xs-offset-10 col-xs-9">
   <br>
  <input  type="button" value="Menú" OnClick="window.location='../views/ViewMenu.php'" class="btn btn-primary" class="">
  </div>
	<div class="page-header">
       <h1>Ingreso de Choferes</h1>
    </div>
   <form id="frm_chofer" name="frm_chofer" class="form-horizontal" action ="../modelo/Chofer_insert.php" method ="post">
    <div class="form-group">
        <label class="control-label col-xs-3">Nombres</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="txtnombre" name="txtnombre"  placeholder="Nombres">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Apellidos</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="txtapellido" name="txtapellido"  placeholder="Apellidos">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Nro. Licencia</label>
        <div class="col-xs-9">
            <input type="text" onkeypress="return ValidNumber(event)" class="form-control" id="txtlicencia" name="txtlicencia"  placeholder="Licencia">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Categoria</label>
        <div class="col-xs-9">
            <select type="text"  id="combocategoria" name="combocategoria" >
		<option value="A">Clase A</option>
  		<option value="B">Clase B</option>
		<option value="C">Clase C</option>
		<option value="D">Clase D</option>
		<option value="E">Clase E</option>
		<option value="F">Clase F</option>
  	    </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Celular</label>
        <div class="col-xs-9">
            <input type="text" onkeypress="return ValidNumber(event)" class="form-control" id="txtcelular" name="txtcelular" placeholder="Celular">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Record Policial</label>
        <div class="col-xs-9">
	    <select type="text"  id="comborecordpolicial" name="comborecordpolicial" >
		<option value="S">Si</option>
  		<option value="N">No</option>
  	    </select>
	</div>
    </div>
    <div class="form-group">
    <!--COMBO CARGADO DE LA BASE-->
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
            <input type="button" class="btn btn-primary" OnClick="insertar()" value="Ingresar">
            <input type="reset" class="btn btn-primary"  value="Limpiar">
            <input type="button" value="Consulta Masiva" OnClick="window.location='../modelo/Mantenimiento_Chofer.php'" class="btn btn-primary">   
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
                if (document.getElementById("txtlicencia").value!="") {
                    if (document.getElementById("txtcelular").value!="") {
                        if (document.getElementById("combotransportista").value!="") {
                            //alert('Grabado exitosamente!');
                            document.frm_chofer.submit();
                        }
                        else{
                            alert('Campo Transporista es Obligatorio!');
                            document.getElementById("combotransportista").focus();
                            return false;
                            }
                        }
                        else{
                            alert('Campo Celular es Obligatorio!');
                            document.getElementById("txtcelular").focus();
                            return false;
                            }
                        }
                        else{
                            alert('Campo Licencia es Obligatorio!');
                            document.getElementById("txtlicencia").focus();
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
