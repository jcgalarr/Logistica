<?php
 session_start();
 include_once('IncorporaCollector.php');
 //$id = $_POST['ID'];
 
 $conttipo = 102;
 $contnum = $_POST['txtcaddie'];
 $contenidotipo = 0;
 $contenidonum = 0;
 $ubiasignada = 0;
 $ubitipo = 0;
 $acontrolar = 0;
 $bodega = $_POST['combobodega'];
 $stock = $_POST['txtcantidad'];
 $fechaproceso = date("Ymd");
 $horaproceso = date("his");
 $guia = 0;
 $articulo = $_POST['txtproducto'];

 $IncorporaCollectorObj = new IncorporaCollector();
 $IncorporaCollectorObj->insertIncorpora($conttipo,$contnum,$contenidotipo,$contenidonum,$ubiasignada,$ubitipo,$acontrolar,$bodega,$stock,$fechaproceso,$horaproceso,$guia,$articulo);

?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0"> 
<title>Sistema SGL</title>
    <!-- Estilos CSS vinculados -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
   
   <h3>Ingresado Exitosamente</h3>
   </head>
<body>
  
      <form action="../views/ControlEntradasView.php" method="Post">
         <div>
         <input type="submit" class="btn btn-primary" name="Regresar al inicio" value="Retornar">
         </div>

      </form>
   </body>
</html>
