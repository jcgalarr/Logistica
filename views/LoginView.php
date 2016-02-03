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

		  function validaEnter(texto,evento) {
			tecla = (document.all) ? evento.keyCode : evento.which;
			if (tecla==13){
				if (texto=="usuario"){
				  if (document.frm.txt_usuario.value==''){
					  alert('Ingrese Usuario');
					  document.frm.txt_usuario.focus();
					  return false;
				  }//end if
				  document.frm.txt_passwd.focus();
				}else{ if (texto=="passwd"){
						  if (document.frm.txt_passwd.value==''){
							  alert('Ingrese Passwd');
							  document.frm.txt_passwd.focus();
							  return false;
						  }//end if
						  resultado = cargarAccionLogin(document.frm.txt_usuario.value,document.frm.txt_passwd.value);
						  //alert(resultado);
						 if (resultado == "1"){
							/*var opciones="toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes";
							url = '/Index/inicio/';
							popupWin = window.open(url, name, opciones);*/
							/*var v = window.self;
							v.opener = window.self;
							v.close();*/
	  						document.frm.action = '/Index/inicio/';
							document.frm.submit();
						  }else{
						  	if (resultado == "2"){
							  	alert('Debe actualizar la clave');
								document.frm.action = '/Menu/nuevaclave/user/'+document.frm.txt_usuario.value+'/valor/'+2;
								document.frm.submit();
							}else{
								if (resultado == "3"){
									alert('Debe actualizar la clave');
									document.frm.action = '/Menu/nuevaclave/user/'+document.frm.txt_usuario.value+'/valor/'+3;
									document.frm.submit();
								}else{
									if (resultado == "4"){
										document.frm.action = '/Recepcion/menugarita/';
										document.frm.submit();
									}else{
										alert('Usuario o clave incorrecta');
							  	 		document.frm.txt_usuario.focus();
								 		document.frm.txt_usuario.value = '';
								 		document.frm.txt_passwd.value = '';
									}//end if
								}//end if
						  	}//end if
						 }//endif
					 }//endif
				}//endif
			}//endif
		  }//end function validarEnter

		  function buttonlogin() {
			  if (document.frm.txt_usuario.value==''){
				  alert('Ingrese Usuario');
				  document.frm.txt_usuario.focus();
				  return false;
			  }//end if
			  if (document.frm.txt_passwd.value==''){
				  alert('Ingrese Passwd');
				  document.frm.txt_passwd.focus();
				  return false;
			  }//end if
			  resultado = cargarAccionLogin(document.frm.txt_usuario.value,document.frm.txt_passwd.value);
			  if (resultado == "1"){
				document.frm.action = '/Index/inicio/';
				document.frm.submit();
			 }else{
			 	if (resultado == "2"){
						alert('Debe actualizar la clave');
						document.frm.action = '/Menu/nuevaclave/user/'+document.frm.txt_usuario.value+'/valor/'+2;
						document.frm.submit();
				}else{
						if (resultado == "3"){
							document.frm.action = '/Menu/nuevaclave/user/'+document.frm.txt_usuario.value+'/valor/'+3;
							document.frm.submit();
						}else{
							if (resultado == "4"){
								document.frm.action = '/Recepcion/menugarita/';
								document.frm.submit();
							}else{
								alert('Usuario o clave no existe');
					  	 		document.frm.txt_usuario.focus();
						 		document.frm.txt_usuario.value = '';
						 		document.frm.txt_passwd.value = '';
							}//end if
						}//end if
				}//end if
			  }//endif
		  }//end function buttonlogin

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
	  <form action="ViewMenu.php" method = "post">
      <div class="login__form">
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8"></path>
          </svg>
          <input name="usuario" type="text" class="login__input name" placeholder="Usuario">
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0"></path>
          </svg>
          <input name="clave" type="password" class="login__input pass" placeholder="Clave">
        </div>
		 <button name="login" class="login__submit">Login</button>
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
