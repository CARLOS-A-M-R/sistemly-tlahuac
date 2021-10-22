<?php 
ob_start();
session_start(); 

?>
<?php
 $rutas = ControladorFormularios::ctrMostrarRutas();
 //echo '<prev class="bg-white">'; print_r($rutas); echo '</prev>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php require "paginas/header.php";?>
</head>
<body>
	<div class="container-fluid">
		
		<?php
	 	$validarRuta = '';
		if(isset($_GET['pagina']))
		{
			$ruta = explode('/', $_GET['pagina']);

			foreach($rutas as $key => $value) {
				
				$ruta_pagina = $value['tr_nombre_ruta'];
				
				if($ruta[0] === $ruta_pagina) {
			
					$validarRuta = 'inicio';
			
					break;
				}
			}

			if($validarRuta === 'inicio' && $ruta[0] === 'inicio') {
			
				include 'paginas/inicio.php';
			} else if ($validarRuta === 'inicio' && $ruta[0] === 'salir') {
				include 'paginas/salir.php';
			} else if ($validarRuta === 'inicio' && $ruta[0] === 'admin') {
				include 'paginas/admin.php';
			} else if ($validarRuta === 'inicio' && $ruta[0] === 'usuario') {
				include 'paginas/usuario.php';
			} else if ($validarRuta === 'inicio' && $ruta[0] === 'personal') {
				include 'paginas/personal.php';
			} else if ($validarRuta === 'inicio' && $ruta[0] === 'perfil') {
				include 'paginas/perfil.php';
			} else if ($validarRuta === 'inicio' && $ruta[0] === 'bibliotecario') {
				include 'paginas/bibliotecario.php';
			}
		}
		/* if(isset($_GET["pagina"]))
		{
			if($_GET["pagina"] === "admin" ||
			   $_GET["pagina"] === "usuario" ||
			   $_GET["pagina"] === "inicio" ||
			   $_GET["pagina"] === "perfil" ||
			   $_GET["pagina"] === "personal" ||
			   $_GET["pagina"] === "libro" ||
			   $_GET["pagina"] === "pruebas" ||
			   //$_GET["pagina"] == "registrar" ||
			$_GET["pagina"] === "ingreso" ||
			   $_GET["pagina"] === "salir" ||
			   $_GET["pagina"] === "modal-ayuda" ||
			   $_GET["pagina"] === "header" ||
			   $_GET["pagina"] === "footer")
			   {
				
				include "paginas/".$_GET["pagina"].".php";
			   
			}else{

				include "paginas/error.php";

			   }
		}else{
			//cambiar mas adelante
			include "paginas/inicio.php";
		} */
		
		?>

	</div>
</body>
<?php require "paginas/footer.php";?>
</html>

