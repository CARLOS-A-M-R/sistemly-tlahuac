   
            

            
            <div class="page-header">
                <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Mi Perfil </h1>
            </div>
            <!-- Page Container -->

            <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
                <!-- The Grid -->
                <div class="w3-row">
                    <!-- Left Column -->
                    <div class="w3-col m3">
                        <!-- Profile -->
                        <div class="w3-card w3-round w3-white">
                            <div class="w3-container">

                                <p class="w3-center"><img src="../assets/img/user01.png" class="w3-circle" style="height:100px;width:100px" alt="Avatar"></p>
                                <hr>
                                <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Nombre:</p>
                                <p><?php echo  $_SESSION["nombres"]; ?></p>
                                <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Apellidos:</p>
                                <p><?php echo $_SESSION['apellidos']; ?></p>
                                <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Direccion:</p>
                                <p><?php echo $_SESSION['domicilio']; ?></p>
                                <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Correo:</p>
                                <p><?php echo $_SESSION['correoEmail']; ?></p>
                                <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Edad:</p>
                                <p><?php echo $_SESSION['edad']; ?></p>
                                <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Grado Escolar:</p>
                                <p>Profesor</p>
                            </div>
                        </div>
                    </diV>
                </div>
  
                <script src="../vistas/scripts/formulario-personal.js" type="text/javascript" charset="utf-8" async defer></script>