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
	<div class="page-header">
       <h1>Mantenimiento de Usuario</h1>
    </div>
   <form class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-xs-3">Id:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="inputId" placeholder="Codigo de Usuario">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Nombres:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="inputNombres" placeholder="Nombres">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Apellidos:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="inputApellidos" placeholder="Apellidos">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Permisos:</label>
        <div class="col-xs-9">
            <select id=permisos>
		<option value="">General</option>
  		<option value="">Administrativo</option>
		<option value="">Logistica</option>
  	    </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Privilegios:</label>
        <div class="col-xs-9">
	    <select id=privilegios>
		<option value="">Bodega</option>
  		<option value="">Administrativo</option>
  	    </select>
	</div>
    </div>
    <div class="form-group">
	<label class="control-label col-xs-3">Cargo:</label>
        <div class="col-xs-9">
	    <select id=cargo>
		<option value="">Jefe</option>
  		<option value="">Operador</option>
  	    </select>
	</div>
    </div>

    <div class="form-group">
	<label class="control-label col-xs-3">Departamento:</label>
        <div class="col-xs-9">
	    <select id=departamento>
		<option value="">Recepcion</option>
  		<option value="">Almacenamiento</option>
  		<option value="">Despacho</option>
  		<option value="">Transporte</option>
		<option value="">Administracion</option>
	    </select>
	</div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3" >Bodega:</label>
        <div class="col-xs-9 select">
          <select id=bodega>
		<option value="">Ambato</option>
  		<option value="">Babahoyo</option>
  		<option value="">Cuenca</option>
  		<option value="">Guayaquil</option>
		<option value="">Machala</option>
		<option value="">Montecristi</option>
		<option value="">Quito</option>
		<option value="">Salinas</option>
	    </select>
        </div>
    </div>		
    <div class="form-group">
        <label class="control-label col-xs-3">Cedula:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="inputCedula" placeholder="# de Cedula">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Last Login:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="inputLogin" disabled placeholder="Ultima feha de ingeso al Sistema">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3" >Cambiar Clave:</label>
        <div class="col-xs-9 select">
          <select id=clave>
		<option value="">Quincenal</option>
  		<option value="">Mensual</option>
  		<option value="">Trimestral</option>
  		<option value="">Semestral</option>
	 	
	  </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Fecha de creacion:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="inputCreacion" disabled placeholder="Fecha de creacion del usuario">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Fecha de modificacion:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="inputModificacion" disabled placeholder="Fecha de ultima modificacion del usuario">
        </div>
    </div>	
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" class="btn btn-primary" value="Ingresar">
            <input type="submit" class="btn btn-primary" value="Modificar">
	    <input type="submit" class="btn btn-primary" value="Eliminar">
	    <input type="reset" class="btn btn-primary" value="Limpiar" disabled>
	    <input type="submit" class="btn btn-primary" value="Re-establecer clave" disabled>
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
