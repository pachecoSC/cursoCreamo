<?php $this->load->view('plantilla/header');?>

<br><br><br><br><br><br>

    
<center><h1>Nuevo Personal</h1>
    <div class="container"><table class="table table-hover">
            <form action="guardarUsuario" method="POST">
                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="txtEmail"/></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="txtPassword" </td>
                </tr>
                <tr>
                    <td>Nombre: </td>
                    <td><input type="text" name="txtNombre"</td>
                </tr>
                <tr>
                    <td>Apellidos: </td>
                    <td><input type="text" name="txtApellido"</td>
                </tr>
                <tr>
                    <td>Telefono: </td>
                    <td><input type="text" name="txtTelefono" maxlength="9"></td>
                </tr>
                <!-- solo aparece para modificar en el caso de sesion activa de administrador -->
                <?php if($this->session->userdata('login')){ ?>
                    <tr>
                        <td>Cargo: </td>
                        <td><input type="text" name="txtCargo" ></td>
                    </tr>
                <?php } else {?>
                    <tr>
                        <td colspan="2"><center><input type="hidden" name="txtCargo" value="3"></center></td>
                    
                <?php } ?>
                <!-- id ASistencia nulo y estado personal true o 1-- eliminar
                -->
                
                    <!--<td> estado </td>-->
                    <td colspan="2"><input type="hidden" name="txtEstado" value="1"></td>
                </tr>
                
                <tr>
                    <td colspan="2"><center><input type="submit" class=" btn btn-primary" value="Guardar"/>
                    &nbsp;&nbsp;<a type="submit"  class="btn btn-danger" href="menu-principal">Cancelar</a> </center></td>
                    
                </tr>
        </form>
    </table></div>
    
</center>

<?php $this->load->view('plantilla/footer');?>