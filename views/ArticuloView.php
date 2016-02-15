<?php
session_start();
include_once ('conexion.php');
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
       <h1>Mantenimiento de Articulos</h1>
    </div>

   <form id="frm_articulo" name="frm_articulo" action ="../modelo/Articulo_insert.php " method ="post" class="form-horizontal">
 
    <div class="form-group">
        <label class="control-label col-xs-3">Nombre:</label>
        <div class="col-xs-9">
            <input type="text" id="txtnombre" name="txtnombre" class="form-control" placeholder="Nombre">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-3" >Descripcion:</label>
        <div class="col-xs-2 select">
           <input type = "text" id="txtdescripcion" name="txtdescripcion" class="form-control" placeholder="Descripcion">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-3" >Unidad de medida:</label>
        <div class="col-xs-2">
            <input type="text" id="txtunid" name="txtunid" class="form-control" placeholder="Unidad">
        </div>
    </div>

    
    <div class="form-group">
        <label class="control-label col-xs-3" >Estado:</label>
       <div class="col-xs-9">
         <select id=txtestado name="txtestado">
		  <option value="A">ACTIVO</option>
  		  <option value="I">INACTIVO</option>
  	    </select>
        </div>

        
    </div>		
    
	

    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="button" class="btn btn-primary" OnClick="insertar()"  value="Ingresar">
            <input type="reset"  class="btn btn-primary" value="Limpiar">
            <input type="button" value="Consulta Masiva" OnClick="window.location='../modelo/Articulo_list.php'" class="btn btn-primary">
        </div>
    </div>

	

  </form>
</div>

<!-- Js vinculados -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../js/responsive.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script > 
    function insertar()
    {
         //alert(document.getElementById("txtdescripcion").value);
        
        if (document.getElementById("txtnombre").value!="") {
            if (document.getElementById("txtdescripcion").value!="") {
                if (document.getElementById("txtunid").value!="") {
                    if (document.getElementById("txtestado").value!="") {
                            alert('Grabado exitosamente!');
                             document.frm_articulo.submit(); 
                         } else {
                          alert('Campo Estado es Obligatorio!');
                          document.getElementById("txtestado").focus();
                          return false;         
                        }
                    }
                        else
                        {
                              alert('Campo Unidad es Obligatorio!');
                          document.getElementById("txtunid").focus();
                          return false;         
                        }
                    }
                      else
                        {
                              alert('Campo Descripcion es Obligatorio!');
                          document.getElementById("txtdescripcion").focus();
                          return false;         
                        }
                        }  
                         else
                        {
                              alert('Campo Nombre es Obligatorio!');
                          document.getElementById("txtnombre").focus();
                          return false;         
                        }  

          
    }
    </script>    
</body>
</html>
