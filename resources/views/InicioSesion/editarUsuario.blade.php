<!--form para poder activar la ruta y poder guardar el registro--><!-- -->
<form id="ingresar_materia" >
    <div class="modal  modal-info fade" id="editar_Usuario" >
              <div class="modal-dialog" >           
                <div class="modal-content" >
                    <div class="modal-header" style="align-self: flex-end;" >
                        <a  type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></a>
                      </div>    
                        <div class="align-items-center justify-content-center">
                            @csrf
                            <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
                              <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Usuario <span class="tx-normal">]</span></div>
                              <br>
                              <div class="form-group">
                                <input  id="usuario" type="text" class="form-control" placeholder="Ingrese Usuario">
                              </div><!-- form-group -->
                              <div class="form-group">
                                <input id="pass_old" type="password" class="form-control" placeholder="Ingrese Anterior Contraseña">
                              </div><!-- form-group -->
                              <div class="form-group">
                                <input id="pass_new" type="password" class="form-control" placeholder="Ingrese Nueva Contraseña">
                              </div><!-- form-group -->
                              <div class="form-group">
                                <input id="telefono" type="text" class="form-control" placeholder="Ingrese Telefono">
                              </div><!-- form-group -->
                              <div class="form-group tx-12">Al hacer clic en el botón Guardar a continuación, acepta nuestra política de privacidad y los términos de uso</div>
                              <a onclick="guardarUsuario()" class="btn btn-info btn-block text-white">Guardar</a>
                            </div><!-- login-wrapper -->
                          </div><!-- d-flex -->
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
              
    </div>
</form>