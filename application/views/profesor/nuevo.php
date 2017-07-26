<?php $this->load->view('plantilla/header');?>

<br><br><br><br><br><br>

<center><h1>Nuevo Profesor</h1>
    <div class="container"><table class="table table-hover">
            <?php
                echo $error;
            ?>
            <form action="guardarProfesor" enctype="multipart/form-data" method="POST">
                <tr>
                    <td>Nombre: </td>
                    <td><input type="text" name="txtNombre"/></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="txtEmail" </td>
                </tr>
                <tr>
                    <td>Especialidad: </td>
                    <td><input type="text" name="txtEspecialidad"</td>
                </tr>
                <tr>
                    <td>Descripcion: </td>
                    <td><input type="text" name="txtDescripcion"</td>
                </tr>
                <tr>
                    <td>Telefono: </td>
                    <td><input type="text" name="txtTelefono" maxlength="9"></td>
                </tr>
                <tr>
                    <td>Foto: </td>
                    <td><input type="file" name="foto_profesor"></td>
                </tr>
                
                <!-- id ASistencia nulo y estado personal true o 1-- eliminar
                -->
                
                <tr>
                    <td colspan="2"><center><input type="submit" class=" btn btn-primary" value="Guardar"/>
                    &nbsp;&nbsp;
                    <a type="submit" class="btn btn-danger" href="menu-principal">Cancelar</a>
                     </center></td>
                </tr>
        </form>
    </table></div>
</center>

<?php $this->load->view('plantilla/footer');?>