<?php 

require_once "conexion.php";

class ModeloFormularios
{

    





     //Registro de la informacion

     static public function mdlRegistro($tabla,$datos)
     {

          $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(tcu_nombre_cuenta,tcu_clave_cuenta) VALUES (:tcu_nombre_cuenta,:tcu_clave_cuenta)");

          $stmt->bindParam(":tcu_nombre_cuenta", $datos["tcu_nombre_cuenta"], PDO::PARAM_STR);
          $stmt->bindParam(":tcu_clave_cuenta", $datos["tcu_clave_cuenta"], PDO::PARAM_STR);

          if($stmt->execute())
          {
               return "ok";
          }else{
               print_r(Conexion::conectar()->errorInfo());
          }

          $stmt->close();
          $stmt=null;

     }

      static public function mdlRegistroPersonal($tabla,$datos)
     {

          $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(tp_nombre,tp_apellidos,tp_domicilio,tp_ocupacion,tp_telefono,tp_email,tp_edad) VALUES (:tp_nombre,:tp_apellidos,:tp_domicilio,:tp_ocupacion,:tp_telefono,:tp_email,:tp_edad)");

          $stmt->bindParam(":tp_nombre", $datos["tp_nombre"], PDO::PARAM_STR);
          $stmt->bindParam(":tp_apellidos", $datos["tp_apellidos"], PDO::PARAM_STR);
          $stmt->bindParam(":tp_domicilio", $datos["tp_domicilio"], PDO::PARAM_STR);
          $stmt->bindParam(":tp_ocupacion", $datos["tp_ocupacion"], PDO::PARAM_STR);
          $stmt->bindParam(":tp_telefono", $datos["tp_telefono"], PDO::PARAM_STR);
          $stmt->bindParam(":tp_email", $datos["tp_email"], PDO::PARAM_STR);
          $stmt->bindParam(":tp_edad", $datos["tp_edad"], PDO::PARAM_STR);
     
          if($stmt->execute())
          {
               return "ok";
          }else{
               print_r(Conexion::conectar()->errorInfo());
          }

          $stmt->close();
          $stmt=null;

     }

     static public function mdlMostrarUsuarios($tabla, $tabla2, $item, $valor)
     {
          $stmt = Conexion::conectar()->prepare("SELECT $tabla.*, $tabla2.* FROM $tabla 
                                                INNER JOIN $tabla2 ON tcu_cod_personal = tp_cod_personal 
                                                WHERE $item = :$item ORDER BY tcu_cod_cuenta DESC");

          $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

          $stmt->execute();

          return $stmt -> fetch();
          
          //$stmt->close();
          $stmt = null;  
     }

     static public function mdlMostrarPersonal($tabla)
     {

          $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
          $stmt->execute();

          return $stmt->fetchAll();

          //$stmt->close();
          $stmt = null;

     }

     static public function mdlMostrarPersonaldos($tabla,$codigo)
     {

          $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE tp_cod_personal = $codigo");
          $stmt->execute();

          return $stmt->fetch();

          $stmt->close();
          $stmt = null;

     }

     static public function mdlDesactivarPersonal($tabla,$codigo)
     {
     
     $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET tp_condicion = '0' WHERE tp_cod_personal = $codigo ");

          if($stmt->execute()){

               return "ok";

          }else{

               print_r(Conexion::conectar()->errorInfo());

          }

          $stmt->close();

          $stmt = null; 
     }

      static public function mdlDesactivarCuenta($tabla,$codigo)
     {
     
     $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET tcu_estado = '0' WHERE tcu_cod_cuenta = $codigo ");

          if($stmt->execute()){

               return "ok";

          }else{

               print_r(Conexion::conectar()->errorInfo());

          }

          $stmt->close();

          $stmt = null; 
     }

     static public function mdlActivarPersonal($tabla,$codigo)
     {
     
     $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET tp_condicion = '1' WHERE tp_cod_personal = $codigo ");

          if($stmt->execute()){

               return "ok";

          }else{

               print_r(Conexion::conectar()->errorInfo());

          }

          $stmt->close();

          $stmt = null; 

     }

     static public function mdlActivarCuenta($tabla,$codigo)
     {
     
     $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET tcu_estado = '1' WHERE tcu_cod_cuenta = $codigo ");

          if($stmt->execute()){

               return "ok";

          }else{

               print_r(Conexion::conectar()->errorInfo());

          }

          $stmt->close();

          $stmt = null; 

     }

     static public function mdlActualizarPersonal($tabla, $datos,$codigo){
     
          $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET tp_nombre = :tp_nombre, tp_apellidos = :tp_apellidos, tp_domicilio = :tp_domicilio, tp_ocupacion = :tp_ocupacion, tp_telefono = :tp_telefono, tp_email = :tp_email, tp_edad = :tp_edad WHERE tp_cod_personal = :tp_cod_personal ");



          $stmt->bindParam(":tp_nombre", $datos["tp_nombre"], PDO::PARAM_STR);
          $stmt->bindParam(":tp_apellidos", $datos["tp_apellidos"], PDO::PARAM_STR);
          $stmt->bindParam(":tp_domicilio", $datos["tp_domicilio"], PDO::PARAM_STR);
          $stmt->bindParam(":tp_ocupacion", $datos["tp_ocupacion"], PDO::PARAM_STR);
          $stmt->bindParam(":tp_telefono", $datos["tp_telefono"], PDO::PARAM_STR);
          $stmt->bindParam(":tp_email", $datos["tp_email"], PDO::PARAM_STR);
          $stmt->bindParam(":tp_edad", $datos["tp_edad"], PDO::PARAM_STR);
          $stmt->bindParam(":tp_cod_personal", $codigo, PDO::PARAM_STR);

          if($stmt->execute()){

               return "ok";

          }else{

               print_r(Conexion::conectar()->errorInfo());

          }

          $stmt->close();

          $stmt = null;  

     }

     static public function mdlRegistroCuentas($tabla,$datos,$tabla2,$permisos)
     {


          $respuesta = new Conexion();
         
          $stmt = $respuesta->pdo->prepare("INSERT INTO $tabla(tcu_cod_personal,tcu_token,tcu_nombre_cuenta,tcu_clave_cuenta,tcu_nivel_usuario) VALUES (:tcu_cod_personal,:tcu_token,:tcu_nombre_cuenta,:tcu_clave_cuenta,:tcu_nivel_usuario)");

          $stmt->bindParam(":tcu_token", $datos["tcu_token"], PDO::PARAM_STR);
          $stmt->bindParam(":tcu_cod_personal", $datos["tcu_cod_personal"], PDO::PARAM_STR);
          $stmt->bindParam(":tcu_nombre_cuenta", $datos["tcu_nombre_cuenta"], PDO::PARAM_STR);
          $stmt->bindParam(":tcu_clave_cuenta", $datos["tcu_clave_cuenta"], PDO::PARAM_STR); 
          $stmt->bindParam(":tcu_nivel_usuario", $datos["tcu_nivel_usuario"], PDO::PARAM_STR);
         // $stmt->bindParam(":tcu_cod_cuenta", $datos["tcu_cod_cuenta"], PDO::PARAM_STR);

          $stmt->execute();

          $cod_cuenta = $respuesta->pdo->lastInsertId();

          $num_elementos = 0;
          $sw=true;

          while($num_elementos < count($permisos))
          {
               $stmt = $respuesta->pdo->prepare("INSERT INTO $tabla2(tup_cod_cuenta,tup_cod_permiso)VALUES($cod_cuenta,$permisos[$num_elementos])");
               
               $stmt->execute() or $sw = false;
               
               $num_elementos=$num_elementos + 1;
          }

          return $sw;


          $stmt->close();
          $stmt=null;

     }

    
      static public function mdlMostrarPermisos($tabla)
     {

          $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
          $stmt->execute();

          return $stmt->fetchAll();

          $stmt->close();
          $stmt = null;

     }

     static public function mdlMostrarPermisos_id($tabla,$codigo)
     {

          $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE tup_cod_cuenta = $codigo");
          $stmt->execute();

          return $stmt->fetchAll();

          $stmt->close();
          $stmt = null;

     }

      static public function mdlMostrarCuentas($tabla,$tablados)
     {

          $sql = "SELECT tcu_cod_cuenta,tp_nombre,tp_apellidos,tcu_nombre_cuenta,tcu_clave_cuenta,tcu_nivel_usuario,tcu_fecha_alta,tcu_estado FROM $tabla INNER JOIN $tablados ON tcu_cod_personal = tp_cod_personal";
          
          $stmt = Conexion::conectar()->prepare($sql);
          $stmt->execute();

          return $stmt->fetchAll();

          $stmt->close();
          $stmt = null;

     }

      static public function mdlMostrarCuentas_id($tabla,$codigo)
     {

          $sql = "SELECT * FROM $tabla WHERE tcu_cod_cuenta = $codigo";
          
          $stmt = Conexion::conectar()->prepare($sql);
          $stmt->execute();

          return $stmt->fetch();

          $stmt->close();
          $stmt = null;

     }

     static public function mdlActualizarCuentas($tabla, $datos,$tabla2,$codigo,$permisos){

     
          $sql = "UPDATE $tabla SET tcu_cod_personal = :tcu_cod_personal, tcu_nombre_cuenta = :tcu_nombre_cuenta, tcu_clave_cuenta = :tcu_clave_cuenta, tcu_nivel_usuario = :tcu_nivel_usuario WHERE tcu_cod_cuenta = :tcu_cod_cuenta";

          $stmt = Conexion::conectar()->prepare($sql);
        
     
          $stmt->bindParam(":tcu_cod_personal", $datos["tcu_cod_personal"], PDO::PARAM_STR);
          $stmt->bindParam(":tcu_nombre_cuenta", $datos["tcu_nombre_cuenta"], PDO::PARAM_STR);
          $stmt->bindParam(":tcu_clave_cuenta", $datos["tcu_clave_cuenta"], PDO::PARAM_STR);
          $stmt->bindParam(":tcu_nivel_usuario", $datos["tcu_nivel_usuario"], PDO::PARAM_STR);
          $stmt->bindParam(":tcu_cod_cuenta", $codigo, PDO::PARAM_STR);

          $stmt->execute();

          $delete = "DELETE FROM $tabla2 WHERE tup_cod_cuenta=$codigo";

          $ejecuta = Conexion::conectar()->prepare($delete);

          $ejecuta->execute();

          $num_elementos = 0;
          $sw=true;

          while($num_elementos < count($permisos))
          {
               $sql_permiso = "INSERT INTO $tabla2(tup_cod_cuenta,tup_cod_permiso)VALUES($codigo,$permisos[$num_elementos])";
               
               $run = Conexion::conectar()->prepare($sql_permiso);

               $run->execute() or $sw = false;
               
               $num_elementos=$num_elementos + 1;
          }

          return $sw;

         
          $stmt->close();

          $stmt = null;  

     }

     static public function mdlMostrarRutas($tabla)
     {
          $sql = "SELECT * FROM $tabla";

          $stmt = Conexion::conectar()->prepare($sql);
          $stmt->execute();

          return $stmt->fetchAll();

          $stmt = null;
     }

     //Actualizar Intentos Fallidos
     static public function mdlActualizarIntentos($tabla, $valor, $token)
     {
          //Pendiente cambiar Token
  /*         $sql = "UPDATE $tabla SET tcu_intentos_fails = :tcu_intentos_fails WHERE tcu_nombre_cuenta = :tcu_nombre_cuenta"; */
          $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET tcu_intentos_fails = :tcu_intentos_fails WHERE tcu_nombre_cuenta = :tcu_nombre_cuenta");

          $stmt->bindParam(":tcu_intentos_fails", $valor, PDO::PARAM_INT);
          $stmt->bindParam(":tcu_nombre_cuenta", $token, PDO::PARAM_STR);

          if($stmt->execute()) {
               return 'ok';
          } else {
               print_r(Conexion::conectar()->errorInfo());
          }

          $stmt = null;
     }
     
     
}

?>