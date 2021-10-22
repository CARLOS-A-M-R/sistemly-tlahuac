<div class="container-fluid ">
		<div class="page-header ">
			<h4 class="box-title  ">Libros <button class="btn btn-danger" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h4>
          

		</div>
			
		<div class="container-fluid ">
			<div class="row ">
				<div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table  table-bordered table-condensed table-hover">
                          <thead class="thead-dark">
                          <thead>
                            <th>Opciones</th>
                            <th>Titulo</th>
                            <th>Disponible</th>
                            <th>Autor</th>
                            <th>Editorial</th>
                            <th>Año Edición</th>
                            <th>Materia</th>
                            <th>Páginas</th>
                            <th>Formato</th>
                            <th>Peso</th>
                            <th>Descripción</th>
                            <th>Imagen</th>
                            <th>Condición</th>
                          </thead>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                          <th>Opciones</th>
                            <th>Titulo</th>
                            <th>Disponible</th>
                            <th>Autor</th>
                            <th>Editorial</th>
                            <th>Año Edición</th>
                            <th>Materia</th>
                            <th>Páginas</th>
                            <th>Formato</th>
                            <th>Peso</th>
                            <th>Descripción</th>
                            <th>Imagen</th>
                            <th>Condición</th>

                      </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Titulo:</label>
                            <input type="hidden" name="idlibro" id="idlibro">
                            <input type="text" class="form-control" name="titulo" id="titulo" maxlength="70" placeholder="Titulo" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Disponible:</label>
                            <input type="number" class="form-control" name="cantidad_disponible" id="cantidad_disponible" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Autor:</label>
                          <select id="idautor" name="idautor" class="form-control selectpicker" data-live-search="true" required></select>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Editorial:</label>
                          <select id="ideditorial" name="ideditorial" class="form-control selectpicker" data-live-search="true" required></select>
                        </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Año de Edición(*):</label>
                            <input type="number" class="form-control" name="year_edicion" id="year_edicion" required>
                          </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Páginas:</label>
                            <input type="number" class="form-control" name="numero_paginas" id="numero_paginas" required>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Formato(cm):</label>
                            <input type="text" class="form-control" name="formato" id="formato" maxlength="50">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Peso(Kg):</label>
                            <input type="text" class="form-control" name="peso" id="peso">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Descripción:</label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion" maxlength="800" placeholder="Descripción">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Imagen:</label>
                            <input type="file" class="form-control" name="imagen" id="imagen">
                            <input type="hidden" name="imagenactual" id="imagenactual">
                            <img src="" width="150px" height="120px" id="imagenmuestra">
                        </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      



