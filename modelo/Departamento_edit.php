<?php
  session_start();
  $id = $_GET['id'];

 // echo $id;
 include_once('Departamento.php');
 include_once('DepartamentoCollector.php');
 $DepartamentoCollectorObj = new DepartamentoCollector();
 $ObjDepartamento= $DepartamentoCollectorObj->showDepartamentoId($id);
 
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
       <h1>Departamento</h1>
    </div>
   <form id="frm_dep" name="frm_dep" action ="../modelo/Departamento_update.php" method ="post" class="form-horizontal">
 
       

    <div class="form-group">
        <label class="control-label col-xs-3" >Código:</label>
        <div class="col-xs-2">
            <input type="tel" onkeypress="return ValidNumber(event);" name="txtcodigo"  class="form-control" value = "<?php echo $ObjDepartamento->getcodigo(); ?>">
    
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Descripción:</label>
        <div class="col-xs-9">
            <input type="text"  name="txtdescripcion" id="txtdescripcion"   class="form-control" value = "<?php echo $ObjDepartamento->getdescripcion(); ?>">
        </div>
    </div>
    
	
	
	
    
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="button" OnClick="mensaje()" class="btn btn-primary" value="Actualizar">
            <input type="reset" class="btn btn-primary" value="Limpiar">
	    <input type="button" value="Regresar" OnClick="window.location='Departamento_list.php'" class="btn btn-primary">		
			
        </div>
    </div>
  </form>
</div>

<!-- Js vinculados -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../js/responsive.js"></script>
    <script src="../js/bootstrap.min.js"></script>



<script>
      function mensaje(){
	 {
        // alert(document.getElementById("txtdescripcion").value);
        

              if (document.getElementById("txtdescripcion").value!="") {
                             document.frm_dep.submit(); 
                         } else {
                          alert('Campo Descripcion  es Obligatorio!');
                          document.getElementById("txtdescripcion").focus();
                          return false;         
                        }
                    }
                       

       // alert('Registro actualizado exitosamente!');
       // submit();
    }
		    
</script>
</body>
</html>


