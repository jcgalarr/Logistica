<?php
 session_start();

 include_once('../modelo/User.php');
 include_once('../modelo/UserCollector.php');
 $UserCollectorObj = new UserCollector();

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
       <h1>Usuario</h1>
    </div>
  

   <form id="frm_user" name="frm_user" action ="../modelo/User_insert.php" method ="post" class="form-horizontal">
    
    <div class="form-group">
        <label class="control-label col-xs-3">Id:</label>
        <div class="col-xs-9">
            <input type="text" id="txtid" name="txtid"   class="form-control" placeholder="Nombre">
        </div>
    </div>
    
  <div class="form-group">
        <label class="control-label col-xs-3" >Nombre:</label>
        <div class="col-xs-9">
            <input type="text" id="txtnombre" name="txtnombre"   class="form-control" placeholder="Direccion">
        </div>
    </div>
    

	
	
    
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="button" OnClick="insertar()" class="btn btn-primary" value="Ingresar">
            <input type="reset" class="btn btn-primary" value="Limpiar">
	    <input type="button" value="Consulta Masiva" OnClick="window.location='../modelo/User_list.php'" class="btn btn-primary">	
           	
			
        </div>
    </div>
  </form>
</div>
<script > 


    function insertar()
    {
                 
       if (document.getElementById("txtid").value =="") {
                alert('Campo Id es Obligatorio!');
                          document.getElementById("txtid").focus();
                          return false;       
	}

  if (document.getElementById("txtnombre").value =="") {
                alert('Campo Nombre es Obligatorio!');
                          document.getElementById("txtnombre").focus();
                          return false;       
	}


  
document.frm_user.submit(); 
  

          
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
