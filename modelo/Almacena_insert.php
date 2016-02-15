<?php
 session_start();
 include_once('AlmacenaCollector.php');
 //$id = $_POST['ID'];
 
 $conttipo = 301;
 $contnum = $_POST['txtubicacion'];
 $contenidotipo = $_POST['txtpallet'];
 $contenidonum = $_POST['txtnumero'];
 $ubiasignada = $_POST['txtubicacion'];
 $ubitipo = 8;
 $acontrolar = 0;
 $bodega = 'Guayaquil';
 $stock = $_POST['txtcantidad'];
 $fechaproceso = date("Ymd");
 $horaproceso = date("his");
 $guia = 0;
 $articulo = $_POST['txtproducto'];

 $AlmacenaCollectorObj = new AlmacenaCollector();
 
 $AlmacenaCollectorObj->insertAlmacena($conttipo,$contnum,$contenidotipo,$contenidonum,$ubiasignada,$ubitipo,$acontrolar,$bodega,$stock,$fechaproceso,$horaproceso,$guia,$articulo);

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
  
      <form action="../views/ColaReposicionView.php" method="Post">
         <div>
         <input type="submit" class="btn btn-primary" name="Regresar al inicio" value="Retornar">
         </div>

      </form>
   </body>
</html>
