<?php 


class ControladorFormularios


{

    /*  static public function ctrRegistro()
     {
          if(isset($_POST["registroNombre"]))
          {
               $tabla = "tbl_cuentas_usuarios";

               $datos = array("tcu_nombre_cuenta" => $_POST["registroNombre"],
                              "tcu_clave_cuenta" => $_POST["registroClave"]);

               $respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);
               
               return $respuesta;
          }
     } */

     static public function ctrRegistroPersonal()
     {
          if(isset($_POST["nombreRegistro"]))
          {
               $tabla = "tbl_personal";

               $datos = array(
                                   "tp_nombre" => $_POST["nombreRegistro"],
                                   "tp_apellidos" => $_POST["apellidoRegistro"],
                                   "tp_domicilio" => $_POST["domicilioRegistro"],
                                   "tp_ocupacion" => $_POST["ocupacionRegistro"],
                                   "tp_telefono" => $_POST["telefonoRegistro"],
                                   "tp_email" => $_POST["emailRegistro"],
                                   "tp_edad" => $_POST["edadRegistro"],
                                   "tp_cod_personal" => $_POST["idpersonal"]
                              );

               $respuesta = ModeloFormularios::mdlRegistroPersonal($tabla,$datos);
               
               return $respuesta;
          }
     }

     static public function ctrIngreso()
     {

          if(isset($_POST["nombre"]))
          {
               $tabla = "tbl_cuentas_usuarios";
               $tabla2 = "tbl_personal";     
               $item = "tcu_nombre_cuenta";
               $valor = $_POST["nombre"];
               
               $respuesta = ModeloFormularios::mdlMostrarUsuarios($tabla, $tabla2, $item, $valor);

               $encryptPassword = crypt($_POST['clave'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

               if($respuesta["tcu_nombre_cuenta"] === $_POST["nombre"] && $respuesta["tcu_clave_cuenta"] === $encryptPassword)
               {
                    ModeloFormularios::mdlActualizarIntentos($tabla, 0, $respuesta["tcu_nombre_cuenta"]);

                    $_SESSION["validarIngreso"] = $respuesta["tcu_nombre_cuenta"];
                    $_SESSION["nombres"] = $respuesta["tp_nombre"];
                    $_SESSION["apellidos"] = $respuesta["tp_apellidos"];
                    $_SESSION["domicilio"] = $respuesta["tp_domicilio"];
                    $_SESSION["correoEmail"] = $respuesta["tp_email"];
                    $_SESSION["edad"] = $respuesta["tp_edad"];
                   
                    echo '<script>
                    
                    if(window.history.replaceState)
                    {
                         window.history.replaceState(null,null,window.location.href);
                    }
                    window.location = "inicio";
                    
                    </script>';

               }else{

                    if ($respuesta['tcu_intentos_fails'] < 3) {
                         
                         $intentos = $respuesta["tcu_intentos_fails"] + 1;

                         ModeloFormularios::mdlActualizarIntentos($tabla, $intentos, $respuesta["tcu_nombre_cuenta"]);
                    } else {
                         echo '<div class="alert alert-warning">RECAPTCHA Debes validar que no eres un robot</div>';
                    }

                        

                         echo '<script>
                                   if(window.history.replaceState)
                                   {
                                        window.history.replaceState(null,null,window.location.href);
                                   }
                                   </script>';    
                         echo '<div class="alert alert-danger">
                                   Error al ingresar al sistema, el nombre o la contraseña no coinciden
                              </div>';          
               }
              // echo '<prev>'; print_r($respuesta); echo '</prev>';

          }
     }

     public function ctrMostrarPersonal()
     {
          
          $tabla = "tbl_personal";

 
          $respuesta = ModeloFormularios::mdlMostrarPersonal($tabla);

          return $respuesta;
     }

     public function ctrMostrarPermisos()
     {
          
          $tabla = "tbl_permisos_sistemly";

 
          $respuesta = ModeloFormularios::mdlMostrarPermisos($tabla);

          return $respuesta;
     }

     public function ctrMostrarPermisos_id($variable)
     {
          
          $tabla = "tbl_usuario_permiso";

          $codigo = $variable;
 
          $respuesta = ModeloFormularios::mdlMostrarPermisos_id($tabla,$codigo);

          return $respuesta;
     }


     public function ctrMostrarPersonaldos($variable)
     {
          
          $tabla = "tbl_personal";

          $codigo = $variable;     
          
          $respuesta = ModeloFormularios::mdlMostrarPersonaldos($tabla,$codigo);

          return $respuesta;
     }


     public function ctrDesactivarPersonal($variable)
     {
          
               $tabla = "tbl_personal";
               $codigo = $variable;

               $respuesta = ModeloFormularios::mdlDesactivarPersonal($tabla,$codigo);
               
               return $respuesta;   
     }

     public function ctrDesactivarCuenta($variable)
     {
          
               $tabla = "tbl_cuentas_usuarios";
               $codigo = $variable;

               $respuesta = ModeloFormularios::mdlDesactivarCuenta($tabla,$codigo);
               
               return $respuesta;   
     }

          public function ctrActivarPersonal($variable)
     {
          
               $tabla = "tbl_personal";
               $codigo = $variable;

               $respuesta = ModeloFormularios::mdlActivarPersonal($tabla,$codigo);
               
               return $respuesta;    
     }

          public function ctrActivarCuenta($variable)
     {
          
               $tabla = "tbl_cuentas_usuarios";
               $codigo = $variable;

               $respuesta = ModeloFormularios::mdlActivarCuenta($tabla,$codigo);
               
               return $respuesta;    
     }

     
     public function ctrActualizarPersonal()
     {
          if(isset($_POST["nombreRegistro"]))
          {
               $tabla = "tbl_personal";

               $datos = array(
                                   "tp_nombre" => $_POST["nombreRegistro"],
                                   "tp_apellidos" => $_POST["apellidoRegistro"],
                                   "tp_domicilio" => $_POST["domicilioRegistro"],
                                   "tp_ocupacion" => $_POST["ocupacionRegistro"],
                                   "tp_telefono" => $_POST["telefonoRegistro"],
                                   "tp_email" => $_POST["emailRegistro"],
                                   "tp_edad" => $_POST["edadRegistro"],
                                   "tp_cod_personal" => $_POST["idpersonal"]
                              );
               $codigo = $_POST["idpersonal"];

               $respuesta = ModeloFormularios::mdlActualizarPersonal($tabla,$datos,$codigo);

               
               return $respuesta;
          }
     }

      public function ctrActualizarCuentas($variable)
     {
          if(isset($_POST["nombreCuenta"]))
          {
               $tabla = "tbl_cuentas_usuarios";

               $datos = array(
                                    "tcu_cod_personal" => $_POST["usuarioCuenta"],
                                   "tcu_nombre_cuenta" => $_POST["nombreCuenta"],
                                   "tcu_clave_cuenta" => $_POST["claveCuenta"],
                                   "tcu_nivel_usuario" => $_POST["nivelCuenta"],
                                   "tcu_cod_cuenta" => $_POST["idusuario"]
                             
                              );

               $codigo = $_POST["idusuario"];

               $tabla2 = "tbl_usuario_permiso";

               $permisos = $variable;

               $respuesta = ModeloFormularios::mdlActualizarCuentas($tabla,$datos,$tabla2,$codigo,$permisos);
               
               return $respuesta;
          }
     }

       public function pendiente($variable) 
     {
          if(isset($_POST["nombreCuenta"]))
          {
               $tabla = "tbl_cuentas_usuarios";

               $datos = array(
                                   "tcu_cod_personal" => $_POST["usuarioCuenta"],
                                   "tcu_nombre_cuenta" => $_POST["nombreCuenta"],
                                   "tcu_clave_cuenta" => $_POST["claveCuenta"],
                                   "tcu_nivel_usuario" => $_POST["nivelCuenta"],
                                   "tcu_cod_cuenta" => $_POST["idusuario"]
                              );

               $tabla2 = "tbl_usuario_permiso";

               $codigo = $_POST["idusuario"];

               $permisos = $variable;

               $respuesta = ModeloFormularios::mdlActualizarCuentas($tabla,$codigo,$datos,$tabla2,$permisos);
               
               return $respuesta;
          }
     }


     static public function ctrRegistroCuentas($variable)
     {
          if(isset($_POST["usuarioCuenta"]))
          {
               if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nombreCuenta"]) &&
                  preg_match('/^[0-9a-zA-Z]+$/', $_POST["claveCuenta"])){

                    $tabla = "tbl_cuentas_usuarios";

                    $token = md5($_POST['nombreCuenta'].'+'.$_POST['claveCuenta']);

                    $encryptPassword = crypt($_POST['claveCuenta'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                    $datos = array(
                                        "tcu_token" => $token,
                                        "tcu_cod_personal" => $_POST["usuarioCuenta"],
                                        "tcu_nombre_cuenta" => $_POST["nombreCuenta"],
                                        "tcu_clave_cuenta" => $encryptPassword,
                                        "tcu_nivel_usuario" => $_POST["nivelCuenta"],
                                        "tcu_cod_cuenta" => $_POST["idusuario"]
                                   );

                    $tabla2 = "tbl_usuario_permiso";

                    $codigo = $variable;

                    $respuesta = ModeloFormularios::mdlRegistroCuentas($tabla,$datos,$tabla2,$codigo);
                    
                    return $respuesta;
               }     
          }
     }

      public function ctrMostrarCuentas()
     {
          
          $tabla = "tbl_cuentas_usuarios";

          $tablados = "tbl_personal";
          
          $respuesta = ModeloFormularios::mdlMostrarCuentas($tabla,$tablados);

          return $respuesta;
     }

       public function ctrMostrarCuentas_id($variable)
     {
          
          $tabla = "tbl_cuentas_usuarios";

          $codigo = $variable;     
          
          $respuesta = ModeloFormularios::mdlMostrarCuentas_id($tabla,$codigo);

          return $respuesta;
     }


     /* static public function ctrMostrarlibros()
     {
          $tabla = "libros";

          

          $respuesta = ModeloFormularios::mdlMostrarlibros($tabla,null,null);

          return $respuesta;
     } */
     static public function ctrMostrarRutas()
     {
          $tabla = 'tbl_rutas';

          $respuesta = ModeloFormularios::mdlMostrarRutas($tabla);
          
          return $respuesta;
     }

}






?>        