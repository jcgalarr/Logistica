<?php
session_start();
include_once ('conexion.php');
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
    <link href="../css/estilos.css" rel="stylesheet">
</head>

<body>
  <div class="container">
   <div class="col-xs-offset-10 col-xs-9">
   <br>
  <input  type="button" value="Menú" OnClick="window.location='../views/ViewMenu.php'" class="btn btn-primary" class="">
  </div>    
	<div class="page-header">
       <h1>Mantenimiento de Camiones</h1>
    </div>
   <form id="frm_camion" name="frm_camion" action ="../modelo/Camion_insert.php " method ="post" class="form-horizontal">

    <div class="form-group">
        <label class="control-label col-xs-3">Placa:</label>
        <div class="col-xs-9">
            <input type="text" id="txtplaca" name="txtplaca" class="form-control" placeholder="# de Placa">
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-xs-3">Año:</label>
        <div class="col-xs-9">
            <input type="text" id="txtanio" onkeypress="return ValidNumber(event);" name="txtanio" class="form-control" placeholder="Año del Vehiculo">
        </div>
    </div>
    
    <div class="form-group">
        <label class="control-label col-xs-3">Marca:</label>
        <div class="col-xs-9">
        <select id=marca name="marca">
		 <option value="H">HINO</option>
  		 <option value="M">MERCEDES</option>
		 <option value="Q">QMC</option>
		</select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Tipo:</label>
        <div class="col-xs-9">
         <select id=tipo name="tipo">
		   <option value="P">Pequeño</option>
  		   <option value="M">Mediano</option>
		   <option value="G">Grande</option>
		</select>
        </div>
    </div>	
    <div class="form-group">
        <label class="control-label col-xs-3">Tonelaje:</label>
        <div class="col-xs-9">
            <input type="text" id="txttonelaje" onkeypress="return ValidNumber(event);" name="txttonelaje" class="form-control" placeholder="Tonelaje">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3"># Caddies:</label>
        <div class="col-xs-9">
            <input type="text" id="txtcadie" onkeypress="return ValidNumber(event);" name="txtcadie" class="form-control" placeholder="# de Caddies">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3"># Pallets:</label>
        <div class="col-xs-9">
            <input type="text" id="txtpallet" onkeypress="return ValidNumber(event);" name="txtpallet" class="form-control" placeholder="# de Pallets">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-3">Tipo Combustibe:</label>
        <div class="col-xs-9">
	    <select id=combustible name="combustible">
		<option value="D">Diesel</option>
  		<option value="S">Super</option>
        <option value="E">Extra</option>
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
            <input type="button" class="btn btn-primary" OnClick="insertar()"  value="Ingresar">
            <input type="reset"  class="btn btn-primary" value="Limpiar">
            <input type="button" value="Consulta Masiva" OnClick="window.location='../modelo/Camion_list.php'" class="btn btn-primary">
        </div>
    </div>
  </form>
</div>

<!-- Js vinculados -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../js/responsive.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script language ="javascript" type = "text/javascript" src= "../js/funcionesgenerales.js"></script> 
    
    <script > 
    function insertar()
    {
if (document.getElementById("txtplaca").value!="") {               //alert(document.getElementById("txtpasillo").value);
  if (document.getElementById("txtanio").value!="") {        
    if (document.getElementById("txttonelaje").value!="") {        
        if (document.getElementById("txtcadie").value!="") {
            if (document.getElementById("txtpallet").value!="") {
                    if (document.getElementById("combochofer").value!="") {
                         if (document.getElementById("combotransportista").value!="") {
                            //alert('Grabado exitosamente!');
                            //alert(document.getElementById("combochofer").value);
                            //alert(document.getElementById("combotransportista").value);
                             document.frm_camion.submit(); 
                         } 
                         else {
                          alert('Campo Transportista es Obligatorio!');
                          document.getElementById("combotransportista").focus();
                          return false;         
                         }
                    }
                    else {
                          alert('Campo Chofer es Obligatorio!');
                          document.getElementById("combochofer").focus();
                          return false;         
                    }
                    }
                      else
                        {
                              alert('Campo Pallets es Obligatorio!');
                          document.getElementById("txtpallet").focus();
                          return false;         
                        }
                        }  
                         else
                        {
                              alert('Campo Caddies es Obligatorio!');
                          document.getElementById("txtcadie").focus();
                          return false;         
                        }
                        } //end if tonelaje
                    else
                        {
                              alert('Campo Tonelaje es Obligatorio!');
                          document.getElementById("txttonelaje").focus();
                          return false;         
                        } //else tonelaje
                        }
                    else
                        {
                              alert('Campo Año es Obligatorio!');
                          document.getElementById("txtanio").focus();
                          return false;         
                        }
                        }
                    else
                        {
                              alert('Campo Placa es Obligatorio!');
                          document.getElementById("txtplaca").focus();
                          return false;         
                        }                                                 
    }
    </script>            
</body>
</html>
