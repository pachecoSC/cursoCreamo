<?php $this->load->view('plantilla/header');?>

<br><br><br><br><br><br>

    <center><h1>Actualizar Personal</h1>
    <div class="container"><table class="table table-hover">
            <form action="<?= base_url() . 'controlador_usuario/actualizar/' . $usu->id_usuario;?>" method="POST">
                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="txtEmail" value="<?php echo $usu->email?>"/></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="text" name="txtPassword" value="<?php echo $usu->password?>"</td>
                </tr>
                <tr>
                    <td>Nombre: </td>
                    <td><input type="text" name="txtNombre" value="<?php echo $usu->nombre_usuario?>"</td>
                </tr>
                <tr>
                    <td>Apellidos: </td>
                    <td><input type="text" name="txtApellido" value="<?php echo $usu->apellidos?>"</td>
                </tr>
                <tr>
                    <td>Telefono: </td>
                    <td><input type="text" name="txtTelefono" maxlength="9" value="<?php echo $usu->telefono?>"></td>
                </tr>
                <tr>
                    <td>Cargo: </td>
                    <!--td><input type="text" name="txtCargo" value="<?php echo $usu->tipo_usuario?>"></td-->
                    <td><select id="tipo_usuario" name="txtCargo" class="form-control">
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
                        </select></td>
                </tr>
                <!-- id ASistencia nulo y estado personal true o 1-- eliminar
                -->
                <tr>
                    <!--<td> estado </td>-->
                    <td colspan="2"><input type="hidden" name="txtEstado" value="<?php echo $usu->estado_usuario?>"></td>
                </tr>
                
                <tr>
                    
                    <td colspan="2"><center><input type="submit" class=" btn btn-primary" value="Guardar"/>
                    &nbsp;&nbsp;<a type="submit"  class="btn btn-danger" href= "<?=base_url()?>controlador_usuario/">Cancelar</a> </center></td>
                    
                </tr>
        </form>
    </table></div>
    
</center>
    
<?php $this->load->view('plantilla/footer');?>