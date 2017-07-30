<?php $this->load->view('plantilla/header');?>

<br><br><br><br><br><br>

<center><h1>Nueva Categoria</h1>
    <div class="container"><table class="table table-hover">
            <?php
                echo $error;
            ?>
            <form action="guardarCategoria" enctype="multipart/form-data" method="post">
            
                <tr>
                    <td>Nombre: </td>
                    <td><input type="text" name="txtNombre"/></td>
                <tr>
                    <td>Imagen de categoria: </td>
                    <td><input type="file" name="foto_categoria"></td>
                </tr> 
                <tr>
                    <td>Descripcion: </td>
                    <td><input type="text" name="txtDecripcion"/></td>
                <tr>
                <tr>
                    <td colspan="2"><center><input type="submit" class=" btn btn-primary" value="Guardar"/>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a type="submit"  class="btn btn-danger" href="menu-principal">Cancelar</a> </center></td>

                     </center></td>
                </tr>
            </form>
            
    </table></div>
    
<?php $this->load->view('plantilla/footer'); ?>