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
       <h1>Mantenimiento de Camiones</h1>
    </div>
   <form class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-xs-3">Placa:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="inputPlaca" placeholder="# de Placa">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Año:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="inputAnio" placeholder="Año del Vehiculo">
        </div>
    </div>
    
    <div class="form-group">
        <label class="control-label col-xs-3">Marca:</label>
        <div class="col-xs-9">
            <select id=marca>
		<option value="">HINO</option>
  		<option value="">MERCEDES</option>
		<option value="">QMC</option>
		
  	    </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Tipo:</label>
        <div class="col-xs-9">
            <select id=tipo>
		<option value="">Pequeño</option>
  		<option value="">Mediano</option>
		<option value="">Grande</option>
		
  	    </select>
        </div>
    </div>	
    <div class="form-group">
        <label class="control-label col-xs-3">Tonelaje:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="inputTonelaje" placeholder="Tonelaje el camion">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3"># Caddies:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="inputCaddies" placeholder="# de Caddies">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3"># Pallets:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="inputPallets" placeholder="# de Pallets">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Largo:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="inputLargo" placeholder="Largo del Camion">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Ancho:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="inputAncho" placeholder="Ancho del Camion">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Alto:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="inputAlto" placeholder="Alto del Camion">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Tipo Combustibe:</label>
        <div class="col-xs-9">
	    <select id=combustible>
		<option value="">Diesel</option>
  		<option value="">Super</option>
                <option value="">Extra</option>
  	    </select>
	</div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Tipo Camion:</label>
        <div class="col-xs-9">
	    <select id=camion>
		<option value="">Seco</option>
  		<option value="">Refrigerado</option>
            </select>
	</div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Dispositivo Seguridad:</label>
        <div class="col-xs-9">
	    <select id=dispositivo>
		<option value="">Tiene</option>
  		<option value="">No Tiene</option>
            </select>
	</div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-3"># Puertas:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="inputPuertas" placeholder="Ingrese # de Puertas">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Pagare:</label>
        <div class="col-xs-9">
	    <select id=pagare>
		<option value="">Si</option>
  		<option value="">No</option>
            </select>
	</div>
    </div>	
    <div class="form-group">
        <label class="control-label col-xs-3">Seguro:</label>
        <div class="col-xs-9">
	    <select id=seguro>
		<option value="">Si</option>
  		<option value="">No</option>
            </select>
	</div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Rampa:</label>
        <div class="col-xs-9">
	    <select id=rampa>
		<option value="">Si</option>
  		<option value="">No</option>
            </select>
	</div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Transportista:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="inputTransportista" placeholder="Ingrese Transportista">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Chofer:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="inputChofer" placeholder="Ingrese Chofer">
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
