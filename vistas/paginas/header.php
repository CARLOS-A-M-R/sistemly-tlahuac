<?php 

//$usuarios = ModeloFormularios::probar();
//echo '<prev>'; print_r($usuarios); echo '</prev>';

?>
<head>
    <title>SISTEMLY</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">
<link rel="stylesheet" href="/index.php">
	

    <!--<link rel="stylesheet" type="text/css" href="../../css/estilo2.css">-->
    <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="../../css/bootstrap-select.min.css">
   <link rel="stylesheet" type="text/css" href="../../css/mis_estilos.css">
   
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../../public/datatables/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css"  href="../../public/datatables/dataTables.buttons.min.js">
    <link rel="stylesheet" type="text/css" href="../../public/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css"  href="../../public/datatables/buttons.dataTables.min.css">

   
<!-- 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css"> -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">  -->  

    <section class="full-box cover dashboard-sideBar">
        <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
        <div class="full-box dashboard-sideBar-ct">
            <!--SideBar Title -->
            <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">Sistema Bibliotecario<i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
            </div>
            <!-- SideBar User info -->
            <div class="full-box dashboard-sideBar-UserInfo">
                <figure class="full-box">
                    <img src="../../assets/img/user01.png" alt="UserIcon">
				
				
				
                    
				
				<figcaption class="text-center text-titles">Usuario</figcaption>
					<figcaption class="text-center text-titles">
					<?php 
					if(empty($_SESSION['validarIngreso'])){

						header("Location:https://sistemly.herokuapp.com/");
						
						//echo "<script>document.location = 'http://192.168.1.72/';</script>";
          
            					return;
					}else{

					echo $_SESSION['validarIngreso']; 
				
				}
					?></figcaption>
                </figure>

			 	

                <ul class="full-box list-unstyled text-center">
                    <li>
                        <a href="#!">
                            <i class="zmdi zmdi-settings"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="btn-exit-system">
							<i class="zmdi zmdi-power "></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu ">
				<li>
					<a href="">
						<i class="zmdi zmdi-case zmdi-hc-fw "></i> Administracion
					</a>
				</li>
				
				<li>
					<a href="#! " class="btn-sideBar-SubMenu ">
						<i class="zmdi zmdi-account-add zmdi-hc-fw "></i> Usuarios <i class="zmdi zmdi-caret-down pull-right "></i>
					</a>
					<ul class="list-unstyled full-box ">
						<li>
							<a href="usuario"><i class="zmdi zmdi-account zmdi-hc-fw "></i> Consulta usuarios</a>
						</li>
						<li>
							<a href="personal"><i class="zmdi zmdi-male-alt zmdi-hc-fw "></i> Personal Administrativo </a>
						</li>
						<li>
							<a href="bibliotecarios"><i class="zmdi zmdi-face zmdi-hc-fw "></i>Biblotecarios</a>
						</li>
						
					</ul>
				</li>
				
				
			</ul>
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Personal <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="perfil"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Mi Perfil</a>
						</li>

					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Catalogo <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="sistemly.php?pagina=libro"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Libros</a>
						</li>
						<li>
							<a href=""><i class="zmdi zmdi-book zmdi-hc-fw"></i> Categoria</a>
						</li>

						<li>
							<a href=""><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i> Prestamos</a>
						</li>
						<li>
							<a href=""><i class="zmdi zmdi-font zmdi-hc-fw"></i> Devoluciones</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
    </section>
    <section class="full-box dashboard-contentPage ">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar ">
			<ul class="full-box list-unstyled text-right ">
				<li class="pull-left ">
					<a href="#! " class="btn-menu-dashboard "><i class="zmdi zmdi-more-vert "></i></a>
				</li>
				
				<li>
					<a href="#! " class="btn-search ">
						<i class="zmdi zmdi-search "></i>
					</a>
				</li>
				<li>
					<a href="#! " class="btn-modal-help ">
						<i class="zmdi zmdi-help-outline "></i>
					</a>
				</li>
			</ul>
			
        </nav>
        
        
</head>
