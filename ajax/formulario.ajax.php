<?php 

require_once "../controladores/formularios.controladores.php";
require_once "../modelos/formularios.modelos.php";

$prueba = new ControladorFormularios();

foreach($_GET as $key => $val){
    switch ($key) {
        
        case 'guardaryeditar':

            $personal = $_POST["idpersonal"];
            
            if(empty($personal))
            {    
                $respuesta = $prueba->ctrRegistroPersonal();

                echo $respuesta ? "Personal registrado" : "Personal no se pudo registrar";
             }else{

                $respuesta = $prueba->ctrActualizarPersonal();

                echo $respuesta ? "Personal actualizado" : "Personal no se pudo actualizar";
             }   
            
            break;
       
        case 'listar':
            
        	$respuesta = $prueba->ctrMostrarPersonal();

        	$data= Array();

 		
        foreach ($respuesta as $key => $value):

                //echo ($key+1);
            $data[]=array(

                 "0"=>($value["tp_condicion"])?'<button class="btn btn-warning" onclick="mostrar('.$value["tp_cod_personal"].')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-danger" onclick="desactivar('.$value["tp_cod_personal"].')"><i class="fa fa-close"></i></button>':
                    '<button class="btn btn-warning" onclick="mostrar('.$value["tp_cod_personal"].')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-primary" onclick="activar('.$value["tp_cod_personal"].')"><i class="fa fa-check"></i></button>',
                 "1"=>$value["tp_nombre"],
                 "2"=>$value["tp_apellidos"],
                 "3"=>$value["tp_domicilio"],
                 "4"=>$value["tp_ocupacion"],
                 "5"=>$value["tp_telefono"],
                 "6"=>$value["tp_email"],
                 "7"=>$value["tp_edad"],
                 "8"=>($value["tp_condicion"])?'<span class="label bg-green">Activado</span>':
                '<span class="label bg-red">Desactivado</span>'
             );

            endforeach;

            $results = array(
            "sEcho"=>1, //Información para el datatables
            "iTotalRecords"=>count($data), //enviamos el total registros al datatable
            "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
            "aaData"=>$data);
        echo json_encode($results);

            break;

        case 'mostrar':

            $personal = $_POST["idpersonal"];
                
            $respuesta=$prueba->ctrMostrarPersonaldos($personal);
        //Codificar el resultado utilizando json
                echo json_encode($respuesta);

            break;

        case 'desactivar':

        $desactivar = $_GET['var_PHP_data'];

         $respuesta=$prueba->ctrDesactivarPersonal($desactivar);
        echo $respuesta ? "Personal desactivado" : "Personal no se puede desactivar";

            break;

        case 'activar':

        $activar = $_GET['var_activar'];

        $respuesta=$prueba->ctrActivarPersonal($activar);
        echo $respuesta ? "Personal activado" : "Personal no se puede activar";

            break;    

        case 'filtrar':
                
            $respuesta=$prueba->ctrMostrarPersonal();

            echo '<option value="0">Seleccione usuario</option>';
        
            foreach ($respuesta as $key => $value) {
            echo '<option value="'.$value["tp_cod_personal"].'">'.$value["tp_nombre"].''." ".''.$value["tp_apellidos"].'</option>';
              }
    
            break;

        case 'guardaryactualizar':

              /*   $usuario = $_POST["idusuario" */
              /*   $permiso = $_POST["permiso"]; */
                
                if(empty($_POST["idusuario"]))
                {    
                    $respuesta = $prueba->ctrRegistroCuentas($_POST["permiso"]);
    
                    
                    echo $respuesta ? "Cuenta registrada" : "Cuenta no se pudo registrar";

                 }else{
    
                    $respuesta = $prueba->ctrActualizarCuentas($_POST["permiso"]);
    
                    echo $respuesta ? "Cuenta actualizada" : "Cuenta no se pudo actualizar";
                 }   
                
            break;

        case 'seleccionar':

          $respuesta = $prueba->ctrMostrarCuentas();

          $data= Array();

    
        foreach ($respuesta as $key => $value):

                //echo ($key+1);
            $data[]=array(

                 "0"=>($value["tcu_estado"])?'<button class="btn btn-warning" onclick="mostrar('.$value["tcu_cod_cuenta"].')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-danger" onclick="desactivar('.$value["tcu_cod_cuenta"].')"><i class="fa fa-close"></i></button>':
                    '<button class="btn btn-warning" onclick="mostrar('.$value["tcu_cod_cuenta"].')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-primary" onclick="activar('.$value["tcu_cod_cuenta"].')"><i class="fa fa-check"></i></button>',
                 "1"=>$value["tp_nombre"],
                 "2"=>$value["tp_apellidos"],
                 "3"=>$value["tcu_nombre_cuenta"],
                 "4"=>$value["tcu_clave_cuenta"],
                 "5"=>($value["tcu_nivel_usuario"] == '2')?'<span class="label bg-green">Administrador</span>':
                '<span class="label bg-red">Usuario</span>',
                 "6"=>$value["tcu_fecha_alta"],
                 "7"=>($value["tcu_estado"])?'<span class="label bg-green">Activado</span>':
                '<span class="label bg-red">Desactivado</span>'
             );

            endforeach;

            $results = array(
            "sEcho"=>1, //Información para el datatables
            "iTotalRecords"=>count($data), //enviamos el total registros al datatable
            "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
            "aaData"=>$data);
        echo json_encode($results);          
        
            break; 

        case 'muestra':

            $usuario = $_POST["idusuario"];
                
            $respuesta=$prueba->ctrMostrarCuentas_id($usuario);
        //Codificar el resultado utilizando json
                echo json_encode($respuesta);

            break;

        case 'desactivarcuenta':

        $desactivar = $_GET['var_desactivar'];

         $respuesta=$prueba->ctrDesactivarCuenta($desactivar);
        echo $respuesta ? "Cuenta desactivada" : "Cuenta no se puede desactivar";

            break;

        case 'activarcuenta':

        $activar = $_GET['var_activar'];

        $respuesta=$prueba->ctrActivarCuenta($activar);
        echo $respuesta ? "Cuenta activada" : "Cuenta no se puede activar";

            break;               

        case 'permisos':
                
            $respuesta = $prueba->ctrMostrarPermisos();

            //echo json_encode($respuesta);
      
            $permiso = $_GET['id'];

            $marcados = $prueba->ctrMostrarPermisos_id($permiso);

            $valores = array();

            foreach ($marcados as $key => $value) {
             array_push($valores, $value["tup_cod_permiso"]);
            }

            foreach ($respuesta as $key => $value) {
              $sw = in_array($value["tps_cod_permiso"], $valores)?'checked':'';
            echo '<li><input type="checkbox" '.$sw.'  name="permiso[]" value="'.$value["tps_cod_permiso"].'">'.$value["tps_nombre_permiso"].'</li>';
              } 

            break;      



    
    }
}
          

           


 ?>