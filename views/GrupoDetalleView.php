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
       <h1>Grupo Detalle</h1>
    </div>
   <form class="form-horizontal">
 
    <div class="form-group">
        <label class="control-label col-xs-3">Codigo:</label>
        <div class="col-xs-2">
            <input type="text" class="form-control" id="inputCodigo" placeholder="Codigo">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Grupo:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="inputGrupo" placeholder="Grupo">
        </div>
    </div>

<div class="form-group">
        <label class="control-label col-xs-3" >Descripcion:</label>
        <div class="col-xs-2 select">
           <textarea name="message" cols="40" rows="6" required></textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-3" >Modulo:</label>
        <div class="col-xs-2">
            <input type="tel" class="form-control" id="inputModulo" placeholder="Modulo">
        </div>
    </div>
	
	<div class="form-group">
        <label class="control-label col-xs-3" >Secuencia:</label>
        <div class="col-xs-2">
            <input type="tel" class="form-control" id="inputSecuencia" placeholder="Secuencia">
        </div>
    </div>

	<div class="form-group">
        <label class="control-label col-xs-3" >Descripcion:</label>
        <div class="col-xs-2">
            <input type="tel" class="form-control" id="inputDescripcion" placeholder="Descripcion">
        </div>
    </div>
	
	<div class="form-group">
        <label class="control-label col-xs-3" >Fecha de Creacion:</label>
        <div class="col-xs-2">
            <input type="tel" class="form-control" id="inputFecha" placeholder="Fecha">
        </div>
    </div>
    
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" class="btn btn-primary" value="Ingresar">
            <input type="submit" class="btn btn-primary" value="Modificar">
			<input type="submit" class="btn btn-primary" value="Eliminar">
			<input type="reset" class="btn btn-primary" value="Limpiar">
			
        </div>
    </div>

	

  </form>
</div>

<!-- Js vinculados -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../js/responsive.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
