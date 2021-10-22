var tabla;
//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();	
	
	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	});

	$.post("../../ajax/formulario.ajax.php?filtrar", function(r){
		$('#usuario-list').html(r)
		$('#usuario-list').selectpicker('refresh')
});

	$.post("../../ajax/formulario.ajax.php?permisos&id=", function(r){
	            $("#permisos").html(r);
	          
	});
}

//Función limpiar
function limpiar()
{

	$("#usuario-list").val("");
 	$("#nivel").val("");
 	$("#nombre").val("");
	$("#clave").val("");
	$("#cuenta").val("");
	$("#permisos").val("");
	
}

//Función mostrar formulario
function mostrarform(flag)
{
	limpiar();
	if (flag)
	{
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled",false);
		$("#btnagregar").hide();
	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
	}
}



//Función cancelarform
function cancelarform()
{
	limpiar();
	mostrarform(false);
}

//Función para guardar o editar

function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../../ajax/formulario.ajax.php?guardaryactualizar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          swal(datos);
	          //bootbox.alert(datos);	          
	          mostrarform(false);
	          tabla.ajax.reload();
	    }

	});
	limpiar();
}

function listar()
{
	tabla=$('#tbllistado').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../../ajax/formulario.ajax.php?seleccionar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"iDisplayLength": 5,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}

function mostrar(idusuario)
{
	$.post("../../ajax/formulario.ajax.php?muestra",{idusuario : idusuario}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		$("#usuario-list").val(data.tcu_cod_personal);
		$('#usuario-list').selectpicker('refresh');
 		$("#nivel").val(data.tcu_nivel_usuario);
		$('#nivel').selectpicker('refresh');
 		$("#nombre").val(data.tcu_nombre_cuenta);
		$("#clave").val(data.tcu_clave_cuenta);
		$("#cuenta").val(data.tcu_cod_cuenta);

 	});

 	$.post("../../ajax/formulario.ajax.php?permisos&id="+idusuario, function(r){
	            $("#permisos").html(r);
	          
	});

}

function filtrarUsuario()
{
	const var_usuario = $("#usuario-list").val();

	$.ajax({

		url: "../../ajax/formulario.ajax.php?filtrar",
		method: "POST",
		data: {
			"codigo_producto": var_usuario
		},
		success: function(r){
			//console.log(r);
			$("#usuario-list").attr("disabled",false);
			$("#usuario-list").html(r);
			$('#usuario-list').selectpicker('refresh');
		} 
	})
	

}

//Función para desactivar registros
function desactivar(cuenta)
{
	
	var cuenta;

	swal({
            title: '¿Estás seguro?',
            text: "Se desactivara la cuenta de usuario actual",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#03A9F4',
            cancelButtonColor: '#F44336',
            confirmButtonText: '<i class="zmdi zmdi-run"></i> ¡Sí, desactivar!',
            cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancela!'
        }).then(function() {

         $.ajax({ 
         url: '../../ajax/formulario.ajax.php?desactivarcuenta', 
         type: 'GET', 
         data: { var_desactivar: cuenta }, 
         success: function(data) { 
          
          swal(data);
	      tabla.ajax.reload();
         } 
        }); 	
});
		 
}

//Función para activar registros
function activar(cuenta)
{
	
	var cuenta;

	swal({
            title: '¿Estás seguro?',
            text: "Se activará la cuenta de usuario actual",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#03A9F4',
            cancelButtonColor: '#F44336',
            confirmButtonText: '<i class="zmdi zmdi-run"></i> ¡Sí, activar!',
            cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancela!'
        }).then(function() {

         $.ajax({ 
         url: '../../ajax/formulario.ajax.php?activarcuenta', 
         type: 'GET', 
         data: { var_activar: cuenta }, 
         success: function(data) { 
         
          swal(data);
	      tabla.ajax.reload();
         } 
        }); 	
});
	
	 
}



init();