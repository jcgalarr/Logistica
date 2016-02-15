<?php
session_start();

?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title>:: INICIO ::</title>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/classic_blue2.css" rel="stylesheet" type="text/css">
<link href="../css/style2.css" rel="stylesheet">
<link rel="stylesheet" href="../css/login.css" type="text/css">
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans'>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="../js/index.js"></script>

<script type="text/javascript">
	document.frm.txt_usuario.focus();
</script>
<script type="text/javascript" src="../scripts/prototype/prototype.js"></script>
<script type="text/javascript">
		  var resultado = "";
		  function cargarIndex(){

		  }
		  function cargarAccionLogin(user, passwd){
		  	  var url = '/Menu/login/';
		  	  var parametros='txt_user='+user+'&txt_passwd='+passwd;
			  new Ajax.Request(url, {
				  onSuccess : function(resp) {
				  resultado = resp.responseText;
				  },
				  onFailure : function(resp) {
				  resultado = "0";
				  },
				  parameters : parametros, asynchronous: false
				  });
		  		  return resultado;
		  }//end cargarAccionLogin

		 
		  function buttonlogin() {
                            // alert(document.getElementById("usuario").value);
			  if (document.getElementById("usuario").value==''){
				  alert('Ingrese Usuario');
				  document.getElementById("usuario").focus();
				  return false;
			  }//end if
			  if (document.getElementById("clave").value==''){
				  alert('Ingrese Passwd');
				 document.getElementById("clave").focus();
				  return false;
			  }//end if
                       //end function buttonlogin
                        document.frmlogin.submit();
	          }

		  function cancela(){
		  					document.frm.txt_usuario.focus();
							document.frm.txt_usuario.value = '';
							document.frm.txt_passwd.value = '';
		  }
        </script>

</head>
 <body>

 <div class="cont">
  <div class="demo">
    <div class="login">
      <div class="titulo">
	    <div class="col-lg-12">
	  <h4>Bienvenidos al Sistema de Gestion Logistica (SGL).<br>
		Ingrese su usuario y clave.<br></h4>
	  </div>
	  <form action="ViewMenu.php" id="frmlogin" name="frmlogin"  method = "post">
      <div class="login__form">
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8"></path>
          </svg>
          <input id="usuario" name="usuario" type="text" class="login__input name" placeholder="Usuario">
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0"></path>
          </svg>
          <input id="clave" name="clave" type="password" class="login__input pass" placeholder="Clave">
        </div>
		 <button type="button" onclick="buttonlogin()" name="login" class="login__submit">Login</button>
      </div>
    </form>
    </div>
</div>
</div>
</div>

<script>
        new WOW().init();
        $(document).ready(function () {
            $('#tooltipa').tooltip();
            $('#tooltippic').tooltip();
            $('#tooltipskype').tooltip();
            $('#tooltiplinkedin').tooltip();
            $('#tooltipfacebook').tooltip();
            $('#tooltipgoogle').tooltip();
            $('#tooltipinstagram').tooltip();
        });

      //	function logonear(){
	//	alert('Pagina en construccion');
		//	window.open("ViewMenu.html");
		//}
		    </script>

 </body>
</html>
