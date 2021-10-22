
  


	
	<div class="container-fluid ">
		<div class="page-header ">
			<h4 class="box-title">Personal Administrativo <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h4>
          

		</div>
			
		<div class="container-fluid ">
			<div class="row ">
				<div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                           <th>Opciones</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Domicilio</th>
                            <th>Ocupacion</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Edad</th>
                            <th>Estado</th>     
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                           <th>Opciones</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Domicilio</th>
                            <th>Ocupacion</th>
                            <th>Telefono</th>
                            <th>Email</th>
                           <th>Edad</th>
                           <th>Estado</th>
                          </tfoot>
                        </table>
                    </div>
					  	<div class="panel-body"   id="formularioregistros">
              <form name="formulario" id="formulario" method="POST">

              
                           
                        <fieldset>
                        <legend ><i class="fa fa-user" aria-hidden="true"></i> Informacion Personal</legend>

                        

                          <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <label>Nombre(s):</label>
                              <input type="hidden" name="idpersonal" id="personal">
                              <input type="text" class="form-control" name="nombreRegistro" id="nombre" maxlength="50" placeholder="Nombre(s)" required>
                          </div>    

                          <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label>Apellidos:</label> 
                            <input type="text" class="form-control" name="apellidoRegistro" id="apellido" maxlength="50" placeholder="Paterno y Materno" >
                          </div>

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Domicilio:</label>
                            <input type="text" class="form-control" name="domicilioRegistro" id="domicilio" maxlength="80" placeholder="Domicilio" >
                          </div>
                          
                          <div class="form-group col-lg-3 col-md-3  col-sm-3 col-xs-12">
                            <label>Ocupacion:</label>
                            <input type="text" class="form-control" name="ocupacionRegistro" id="ocupacion" maxlength="50" placeholder="Ocupacion..." >
                          </div>
                        
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <label>Telefono:</label>
                            <input type="number" class="form-control" name="telefonoRegistro" id="telefono" maxlength="50" placeholder="Telefono" >
                          </div>

                          <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label>Email:</label>
                            <input type="email" class="form-control" name="emailRegistro" id="email" maxlength="50" placeholder="Correo email" >
                          </div>

                          <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <label>Edad:</label>
                            <input type="number" class="form-control" name="edadRegistro" id="edad" maxlength="50" placeholder="Edad" >
                          </div>

                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                            
                            <button class="btn btn-danger" id="btnCancelar" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
                        
                       <!--    <div class="form-group col-lg-14 col-md-14 col-sm-14 col-xs-14">
                            
                           
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                            
                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div> -->

                        </fieldset>
                       
                           </div>
                        
                    </div>
                        </form>
                    </div>
					</div>
				</div>
			</div>

<script src="../vistas/scripts/formulario-personal.js" type="text/javascript" charset="utf-8" async defer></script>