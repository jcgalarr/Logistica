<?php
session_start();
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
   <div class="col-xs-offset-10 col-xs-9">
   <br>
  <input  type="button" value="Menú" OnClick="window.location='../views/ViewMenu.php'" class="btn btn-primary" class="">
  </div>      
  <div class="page-header">
       <h1>Carga Camiones</h1>
    </div>
	
   <form id="frm_carga" name="frm_carga" action ="../modelo/CargaCamion_insert.php " method ="post" class="form-horizontal">
 
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
        <div class="col-xs-2">
            <input type="text" id="txtcadie" onkeypress="return ValidNumber(event);" name="txtcadie" class="form-control" placeholder="# de Caddies">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3" >Puerta:</label>
        <div class="col-xs-2">
            <input type="text" id="txtpuerta" onkeypress="return ValidNumber(event);" name="txtpuerta" class="form-control" placeholder="# de Puerta">
        </div>
    </div>    
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="button" class="btn btn-primary" OnClick="insertar()"  value="Ingresar">
            <input type="reset"  class="btn btn-primary" value="Limpiar">
            <input type="button" value="Consulta Masiva" OnClick="window.location='../modelo/CargaCamion_list.php'" class="btn btn-primary">
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
         //alert(document.getElementById("txtdescripcion").value);
        
        if (document.getElementById("combocamion").value!="") {
            if (document.getElementById("comboruta").value!="") {
                if (document.getElementById("txtcadie").value!="") {
                    if (document.getElementById("txtpuerta").value!="") {
                            //alert('Grabado exitosamente!');
                             document.frm_carga.submit(); 
                         } else {
                          alert('Campo Puerta es Obligatorio!');
                          document.getElementById("txtpuerta").focus();
                          return false;         
                        }
                    }
                        else
                        {
                              alert('Campo Caddie es Obligatorio!');
                          document.getElementById("txtcadie").focus();
                          return false;         
                        }
                    }
                      else
                        {
                              alert('Campo Ruta es Obligatorio!');
                          document.getElementById("comboruta").focus();
                          return false;         
                        }
                        }  
                         else
                        {
                              alert('Campo Camion es Obligatorio!');
                          document.getElementById("combocamion").focus();
                          return false;         
                        }  

          
    }
    </script>        
</body>
</html>
