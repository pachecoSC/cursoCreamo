<?php $this->load->view('plantilla/header');?>
<div class="my-content" >
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 myform-cont" >
            <div class="myform-top">
                <div class="myform-top-left">
                    <h3>Regístrate en nuestro sitio.</h3>
                    <p>Por favor ingresa tus datos personales:</p>
                </div>
                <div class="myform-top-right">
                    <i class="fa fa-user-o"></i>
                </div>
            </div>
            <div class="myform-bottom">
                <form role="form" action="guardarUsuario" method="post" class="">
                    <div class="form-group ">
                        <label class="myform-top-left" >Nombre: </label>
                        <input type="text" name="txtNombre" placeholder="Nombres..." class="form-control" id="nombreUsuario">
                    </div>
                    <div class="form-group">
                        <label class="myform-top-left" >Apellido: </label>
                        <input type="text" name="txtApellido" placeholder="Apellidos..." class="form-control" id="apellidoUsuario">
                    </div>
                    <div class="form-group">
                        <label class="myform-top-left" >Email: </label>
                        <input type="text" name="txtEmail" placeholder="Email@ejemplo.com" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label class="myform-top-left" >Contraseña: </label>
                        <input type="password" name="txtPassword" placeholder="****" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <label class="myform-top-left" >Telefono: </label>
                        <input type="text" name="txtTelefono" placeholder="#########" class="form-control" maxlength="9">
                    </div>
                    
                    <!-- solo aparece para modificar en el caso de sesion activa de administrador -->
                    <?php if ($this->session->userdata('cargo')==1) { ?>
                    <div class="form-group">
                        <label class="myform-top-left" >Cargo: </label>
                        <select id="tipo_usuario" name="txtCargo" class="form-control">
                            <option value='1'>Administrador</option>
                            <option value='2'>Colaborador</option>
                            <option value='3'>Cliente</option>                
                        </select>
                    </div>
                    <?php } else { ?>
                    <div class="form-group"><input type="hidden" name="txtCargo" value="3"></div>
                    <?php } ?>
                    <!--<td> estado los activos siempre tendran uno.. al despedir cambia a 0</td>-->
                    <input type="hidden" name="txtEstado" value="1">
                    
                    <div class="form-group col-sm-offset-4">
                        <input type="submit" class=" btn btn-primary" value="Guardar"/>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a type="submit"  class="btn btn-danger" href="<?= base_url();?>Controlador_index">Cancelar</a> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
    

<?php $this->load->view('plantilla/footer');?>