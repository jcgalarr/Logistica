<?php
 session_start();
 include_once('TransportistaCollector.php');
 //$id = $_POST['ID'];
 
 $ruc = $_POST['txtruc'];
 $nombre = $_POST['txtnombre'];
 $direccion = $_POST['txtdireccion'];
 $telefono1 = $_POST['txttel1'];
 $telefono2 = $_POST['txttel2'];
 $celular1 = $_POST['txtcelular1'];
 $celular2 = $_POST['txtcelular2'];
 
 $TransportistaCollectorObj = new TransportistaCollector();
 $TransportistaCollectorObj->insertTransportista($ruc,$nombre,$direccion,$telefono1,$telefono2,$celular1,$celular2);

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
  
      <form action="Transportista_list.php" method="Post">
         <div>
         <input type="submit" class="btn btn-primary" name="Regresar al inicio" value="Retornar">
         </div>

      </form>
   </body>
</html>
