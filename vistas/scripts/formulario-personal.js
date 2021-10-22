var tabla;
//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();	
	
	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})
	
}

//Función limpiar
function limpiar()
{
	$("#nombre").val("");
	$("#apellido").val("");
	$("#domicilio").val("");
	$("#ocupacion").val("");
	$("#telefono").val("");
	$("#email").val("");
	$("#edad").val("");
	$("#personal").val("");
	
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
		url: "../../ajax/formulario.ajax.php?guardaryeditar",
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
					url: '../../ajax/formulario.ajax.php?listar',
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

function mostrar(idpersonal)
{
	$.post("../../ajax/formulario.ajax.php?mostrar",{idpersonal : idpersonal}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		
 		$("#nombre").val(data.tp_nombre);
		$("#apellido").val(data.tp_apellidos);
		$("#domicilio").val(data.tp_domicilio);
		$("#ocupacion").val(data.tp_ocupacion);
		$("#telefono").val(data.tp_telefono);
		$("#email").val(data.tp_email);
		$("#edad").val(data.tp_edad);
		$("#personal").val(data.tp_cod_personal);

 	})
}

//Función para desactivar registros
function desactivar(personal)
{
	
	var personal;

	swal({
            title: '¿Estás seguro?',
            text: "Se desactivara el usuario actual",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#03A9F4',
            cancelButtonColor: '#F44336',
            confirmButtonText: '<i class="zmdi zmdi-run"></i> ¡Sí, desactivar!',
            cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancela!'
        }).then(function() {

         $.ajax({ 
         url: '../../ajax/formulario.ajax.php?desactivar', 
         type: 'GET', 
         data: { var_PHP_data: personal }, 
         success: function(data) { 
          
          swal(data);
	      tabla.ajax.reload();
         } 
        }); 	
});
		 
}

//Función para activar registros
function activar(personal)
{
	
	var personal;

	swal({
            title: '¿Estás seguro?',
            text: "Se activará el usuario actual",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#03A9F4',
            cancelButtonColor: '#F44336',
            confirmButtonText: '<i class="zmdi zmdi-run"></i> ¡Sí, activar!',
            cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancela!'
        }).then(function() {

         $.ajax({ 
         url: '../../ajax/formulario.ajax.php?activar', 
         type: 'GET', 
         data: { var_activar: personal }, 
         success: function(data) { 
         
          swal(data);
	      tabla.ajax.reload();
         } 
        }); 	
});
	
	 
}



init();