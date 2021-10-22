
  
  
  <div class="container-fluid ">
		<div class="page-header ">
			<h4 class="box-title  ">Cuentas de Usuarios <button class="btn btn-danger" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h4>
          

		</div>
			
		<div class="container-fluid ">
			<div class="row ">
				<div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table  table-bordered table-condensed table-hover">
                          <thead class="thead-dark">
                           <th>Opciones</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Nombre cuenta</th>
                            <th>Clave cuenta</th>
                            <th>Nivel usuario</th>
                            <th>Fecha alta</th>
                            <th>Estado</th>     
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                           <th>Opciones</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Nombre cuenta</th>
                            <th>Clave cuenta</th>
                            <th>Nivel usuario</th>
                            <th>Fecha alta</th>
                            <th>Estado</th>
                          </tfoot>
                        </table>
                    </div>
                    
					  	<div class="panel-body" style="height: 100%;" id="formularioregistros">
                    <form name="formulario" id="formulario" method="POST">
                        <fieldset>
                        <legend align="center"><i class="fa fa-user" aria-hidden="true"></i> Informacion de la nueva Cuenta</legend>
                           


                          <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label>Nombre Cuenta:</label>
                            <input type="hidden" name="idusuario" id="cuenta">
                            <input type="text" class="form-control " name="nombreCuenta" id="nombre" maxlength="50" placeholder="Nombre cuenta" required>
                          </div>

                         <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label>Clave Cuenta: </label>
                            <input type="password" class="form-control" name="claveCuenta" id="clave" maxlength="50" placeholder="Clave Cuenta" required>
                          </div>

                          <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="">Nombre Usuario(*):</label>
                              <select id="usuario-list" name="usuarioCuenta" class="form-control selectpicker" for="inlineFormCustomSelect" data-live-search="true" required></select>  
                          </div>  

                          <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="">Permisos</label>
                              <ul style="list-style: none;" id="permisos">
                             </ul>
                             </div> 

                           <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <label for="">Nivel Usuario(*):</label>
                              <select id="nivel" name="nivelCuenta" class="form-control selectpicker" data-live-search="true" required>
                                <option value="0">Seleccione nivel</option>
                                <option value="1">USUARIO</option>
                                <option value="2">ADMINISTRADOR</option>
                              </select>
                          </div>
                                
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                            
                            <button class="btn btn-danger" id="btnCancelar" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>

                        </fieldset>
                       
                          
                        </form>
                    </div>
					</div>
				</div>
			</div>

<script src="../vistas/scripts/formulario-usuario.js" type="text/javascript" charset="utf-8" async defer></script>

	
			
			
