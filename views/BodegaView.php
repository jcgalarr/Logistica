<?php
 session_start();

 include_once('../modelo/Bodega.php');
 include_once('../modelo/BodegaCollector.php');
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
    
</head>

<body>
  <div class="container">
   <div class="col-xs-offset-10 col-xs-9">
    <br>
    <input  type="button" value="Menú" OnClick="window.location='../views/ViewMenu.php'" class="btn btn-primary" class="">
  </div>
   <div class="page-header">
       <h1>Bodega</h1>
    </div>
  

   <form id="frm_bodega" name="frm_bodega" action ="../modelo/Bodega_insert.php" method ="post" class="form-horizontal">
    
    <div class="form-group">
        <label class="control-label col-xs-3">Descripción:</label>
        <div class="col-xs-9">
            <input type="text" id="txtdescripcion" name="txtdescripcion"   class="form-control" placeholder="Nombre">
        </div>
    </div>
    
  <div class="form-group">
        <label class="control-label col-xs-3" >Dirección:</label>
        <div class="col-xs-9">
            <input type="text" id="txtdireccion" name="txtdireccion"   class="form-control" placeholder="Direccion">
        </div>
    </div>
    
<div class="form-group">
        <label class="control-label col-xs-3" >Telefono:</label>
        <div class="col-xs-9">
            <input type="text" id="txttel" name="txttel"   class="form-control" placeholder="Telefono" onkeypress="return ValidNumber(event);">
        </div>
    </div>
    
	
	
	
    
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="button" OnClick="insertar()" class="btn btn-primary" value="Ingresar">
            <input type="reset" class="btn btn-primary" value="Limpiar">
	    <input type="button" value="Consulta Masiva" OnClick="window.location='../modelo/Bodega_list.php'" class="btn btn-primary">	
           	
			
        </div>
    </div>
  </form>
</div>
<script > 


    function insertar()
    {
         //alert(document.getElementById("txtdescripcion").value);
        
       if (document.getElementById("txtdescripcion").value =="") {
                alert('Campo Descripcion es Obligatorio!');
                          document.getElementById("txtdescripcion").focus();
                          return false;       
	}

  if (document.getElementById("txtdireccion").value =="") {
                alert('Campo Dirección es Obligatorio!');
                          document.getElementById("txtdireccion").focus();
                          return false;       
	}


  if (document.getElementById("txttel").value =="") {
                alert('Campo telefono es Obligatorio!');
                          document.getElementById("txttel").focus();
                          return false;       
	}

document.frm_bodega.submit(); 
        /*if (document.getElementById("txtdescripcion").value!="") {
            if (document.getElementById("txtdireccion").value!="") {
                if (document.getElementById("txttel").value!="") {
                             document.frm_trans.submit(); 
                         } else {
                          alert('Campo Telefono  es Obligatorio!');
                          document.getElementById("txttel").focus();
                          return false;         
                        }
                    }
                        else
                        {
                              alert('Campo Direccion es Obligatorio!');
                          document.getElementById("txtdireccion").focus();
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
                        */

          
    }
    </script>



<!-- Js vinculados -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../js/responsive.js"></script>
    <script src="../js/bootstrap.min.js"></script>
<script language ="javascript" type = "text/javascript" src= "../js/funcionesgenerales.js">
</script>
</body>
</html>
