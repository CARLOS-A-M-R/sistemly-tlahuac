
<?php 

ob_start();
session_start(); 


/* $message = '';
if ( isset($_POST['securityCode']) && ($_POST['securityCode']!="")){
	if(strcasecmp($_SESSION['captcha'], $_POST['securityCode']) != 0){
		$message = "¡Ha introducido un código de seguridad incorrecto! Inténtelo de nuevo.";
	}else{
		$message = "Ha introducido el código de seguridad correcto."; 
	}
} else {
	$message = "Introduzca el código de seguridad."; 

} */



?>



<!-- <script type="text/javascript">
function mostrarPassword(){
		var cambio = document.getElementById("clave");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
</script> -->



<!DOCTYPE html>
<html lang="es">
<head>
	<title>Ingreso</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
	<link rel="stylesheet" href="../../fonts/monofont.ttf">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body class="cover" style="background-image: url(./assets/img/unnamed.jpg);">

   <br/>
	<div class=" w3-white w3-hide-small">
		<a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-facebook-official"></i></a>
		<a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-instagram"></i></a>
		<a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-snapchat"></i></a>
		<a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-flickr"></i></a>
		<a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-twitter"></i></a>
		<a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-linkedin"></i></a>
		
	  </div>


	<img src="assets/img/unnamed.png" width="15%"  heidth="15%">
	
	<img src="assets/img/430px-Log.png" width="7%"  heidth="10%">



	<form  method="post" autocomplete="off" class="full-box logInForm" id="frmAcceso">
		<p class="text-center text-muted text-uppercase"> :::SISTENLY:::</p>
		<p class="text-center text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
		<p class="text-center text-muted text-uppercase">Ingresa tus Datos</p>
		
		<div class="form-group label-floating">
			<label class="control-label" for="UserEmail">Nombre</label>
			<input type="text" class="form-control" id="nombre" name="nombre" style="color:white;" />
			<p class="help-block">Escribe tu Nombre</p>

			
		  </div>
		
	
		<div class="form-group label-floating">
		  <label class="control-label" for="UserPass">Contraseña</label>
		  <input type="password" class="form-control" id="clave" name="clave" style="color:white;"   />
		  <p class="help-block">Escribe tú contraseña</p>
		  
								
</div>
<!--<div class="form-group label-floating">
    <label for="captcha">Please Enter the Captcha Text</label >
    <img src="captcha.php" alt="CAPTCHA" class="captcha-image"><i class="glyphicon glyphicon-refresh"></i>
    <br>
	<input type="text" id="captcha" name="captcha_challenge" pattern="[A-Z]{6}">
</div> -->
			<div class="g-recaptcha" data-sitekey="6LcYCescAAAAAB6AAxAC0yIfutNBmC4uPIbwr8Fi">
            </div>
   
		<div class="form-group label-floating">




			<p><a href="#">¿Olvidaste tu contraseña?</a>
		</div>

		<?php

			$ingreso = ControladorFormularios::ctrIngreso();
	
		?>
		<div class="form-group text-center">

			<!-- <input type="submit"  class="btn btn-raised btn-danger" value="Ingreso"/> -->
			<button type="submit" class="btn btn-primary" style="color: #FFFFFF; background: red;">Ingresar</button>
			
		</div>

	</form>
	<div class="cards" id="cards" style="display: none;">
	<div class="card text-white bg-danger mb-3">
	<div class="card-header text-center">
	¡AViso importante!
	</div>
	<div class="card-body">
		<blockquote class="blockquote mb-0">
		<p></p>
		<footer class="blockquote-footer text-center text-white">Hemos detectado varios inicio de sesión incorrectos en su cuenta, <cite title="Source Title">Temporalmente su cuenta tendra inactividad por 15 minutos.</cite></footer>
		</blockquote>
	</div>
	</div>	
	</div>


	
	<!--====== Scripts -->
	
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>