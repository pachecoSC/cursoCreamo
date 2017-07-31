<?php $this->load->view('plantilla/header');?>

<div class="my-content" >
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 myform-cont" >
            <div class="myform-top">
                <div class="myform-top-left">
                    <h3>Actualizar datos de usuarios.</h3>
                    <p>Por favor ingresa tus nuevos datos personales:</p>
                </div>
                <div class="myform-top-right">
                    <i class="fa fa-user-o"></i>
                </div>
            </div>
            <div class="myform-bottom">
                <form role="form" action="<?= base_url() . 'controlador_usuario/actualizar/' . $usu->id_usuario;?>" method="post">
                    <div class="form-group ">
                        <label class="myform-top-left" >Nombre: </label>
                        <input type="text" name="txtNombre" class="form-control" id="nombreUsuario" value="<?php echo $usu->nombre_usuario?>">
                    </div>
                    <div class="form-group">
                        <label class="myform-top-left" >Apellido: </label>
                        <input type="text" name="txtApellido"class="form-control" id="apellidoUsuario" value="<?php echo $usu->apellidos?>">
                    </div>
                    <div class="form-group">
                        <label class="myform-top-left" >Email: </label>
                        <input type="text" name="txtEmail" class="form-control" id="email" value="<?php echo $usu->email?>">
                    </div>
                    <div class="form-group">
                        <label class="myform-top-left" >Contraseña: </label>
                        <input type="password" name="txtPassword" class="form-control" id="password" value="<?php echo $usu->password?>">
                    </div>
                    <div class="form-group">
                        <label class="myform-top-left" >Telefono: </label>
                        <input type="text" name="txtTelefono" class="form-control" maxlength="9" value="<?php echo $usu->telefono?>">
                    </div>
                    
                    <!-- solo aparece para modificar en el caso de sesion activa de administrador -->
                    <?php if ($this->session->userdata('cargo')==1) { ?>
                    <div class="form-group">
                        <label class="myform-top-left" >Cargo: </label>
                        <select id="tipo_usuario" name="txtCargo" class="form-control">
                            <option value="<?php if($usu->tipo_usuario=='1') 
                            {?>">Administrador</option>
                            <option value='2'>Colaborador</option>
                            <option value='3'>Cliente</option> 
                            <?php }else if($usu->tipo_usuario=='2'){
                            ?>"> Colaborador</option>
                            <option value='1'>Administrador</option>
                            <option value='3'>Cliente</option>       
                            <?php }else if($usu->tipo_usuario=='3'){
                            ?> "> Cliente</option>
                            <option value='1'>Administrador</option>
                            <option value='2'>Colaborador</option>         
                            <?php } ?>                            
                        </select>
                    </div>
                    <?php } else { ?>
                    <div class="form-group"><input type="hidden" name="txtCargo" value="3"></div>
                    <?php } ?>
                    <!--<td> estado los activos siempre tendran uno.. al despedir cambia a 0</td>-->
                    <input type="hidden" name="txtEstado" value="<?php echo $usu->estado_usuario?>">
                    
                    <div class="form-group col-sm-offset-4">
                        <input type="submit" class=" btn btn-primary" value="Guardar"/>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a type="submit"  class="btn btn-danger" href= "<?=base_url()?>controlador_usuario/">Cancelar</a> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?php $this->load->view('plantilla/footer');?>