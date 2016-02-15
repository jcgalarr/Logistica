<?php
 session_start();

 include_once('../modelo/Cargo.php');
 include_once('../modelo/CargoCollector.php');
 $CargoCollectorObj = new CargoCollector();

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
       <h1>Cargo</h1>
    </div>
  

   <form id="frm_cargo" name="frm_cargo" action ="../modelo/Cargo_insert.php" method ="post" class="form-horizontal">
    
    <div class="form-group">
        <label class="control-label col-xs-3">Descripcion:</label>
        <div class="col-xs-9">
            <input type="text" id="txtdescripcion" name="txtdescripcion"   class="form-control" placeholder="Descripcion">
        </div>
    </div>
    
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="button" OnClick="insertar()" class="btn btn-primary" value="Ingresar">
            <input type="reset" class="btn btn-primary" value="Limpiar">
	    <input type="button" value="Consulta Masiva" OnClick="window.location='../modelo/Cargo_list.php'" class="btn btn-primary">	
           	
			
        </div>
    </div>
  </form>
</div>
<script > 


    function insertar()
    {
         //alert(document.getElementById("txtdescripcion").value);
        

        if (document.getElementById("txtdescripcion").value!="") {
                             document.frm_cargo.submit(); 
                         } else {
                          alert('Campo Descripcion  es Obligatorio!');
                          document.getElementById("txtdescripcion").focus();
                          return false;         
                        }
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
