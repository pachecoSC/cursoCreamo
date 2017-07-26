<?php $this->load->view('plantilla/header');?>

<br><br><br><br><br><br>

    
<center><h1>Nuevo Curso</h1>
    <div class="container"><table class="table table-hover">
            <?php
                echo $error;
            ?>
            <form action="guardarCurso" enctype="multipart/form-data" method="POST">
                <tr>
                    <td>Nombre: </td>
                    <td><input type="text" name="txtNombre"/></td>
                </tr>
                <tr>
                    <td>Descripcion: </td>
                    <td><input type="text" name="txtDescripcion" </td>
                </tr>
                <tr>
                    <td>Enlace video: </td>
                    <td><input type="text" name="txtEnlace"</td>
                </tr>
                <tr>
                    <td>Precio: </td>
                    <td><input type="text" name="txtPrecio"</td>
                </tr>
                <tr>
                    <td>Cantidad de horas: </td>
                    <td><input type="text" name="txtHoras"</td>
                </tr>
                <tr>
                    <td>Foto de curso: </td>
                    <td><input type="file" name="foto_curso"></td>
                </tr>
                <!--usar combo box.. onsulta: muestra nombre y guarda id -->
                <tr>
                    <td>Tipo de curso: </td>
                    <td><select id="id_tipo" name="id_tipo" class="form-control">
                            <option value="0">elije una opcion</option>
                            <?php 
                            foreach ($tipos as $itemt){
                                echo '<option value="'.$itemt-> id_tipo_curso .'">'. $itemt->nombre_tipo_curso .'</option>';
                            }
                            ?>
                        </select></td>
                </tr> 
                <tr>
                    <td>Profesor: </td>
                    <td><select id="id_profesor" name="id_profesor" class="form-control">
                            <option value="0">elije una opcion</option>
                            <?php
                            foreach ($profesores as $itemp){
                                echo '<option value="' . $itemp-> id_profesor . '">' . $itemp->nombre_profesor .'</option>';
                                
                            }
                            ?>
                        </select></td>
                </tr>
                <tr>
                    <td>categoria de curso: </td>
                    <td><select id="id_categoria" name="id_categoria" class="form-control">
                            <option value="0">elije una opcion</option>
                            <?php
                            foreach($categorias as $itemc){
                                echo '<option value="'.$itemc->id_categoria_curso.'">'.$itemc->nombre_categoria.'</option>';
                            }
                            ?>
                    </select></td>
                </tr>
                <tr>
                    <td>estado del curso: </td>
                    <td><select id="id_estados" name="id_estados" class="form-control">
                            <option value="0">elije una opcion</option>
                            <?php
                            foreach ($estados as $iteme){
                                echo '<option value="' .$iteme->id_estado_curso. '">' .$iteme->descripcion_estado. '</option>';
                            }
                            ?>
                        </select></td>
                </tr>
               
                
                
                <!-- id ASistencia nulo y estado personal true o 1-- eliminar
                -->
                
                <tr>
                    <td colspan="2"><center><input type="submit" class=" btn btn-primary" value="Guardar"/>
                    &nbsp;&nbsp;
                    <a type="submit"  class="btn btn-danger" href="menu-principal">Cancelar</a>
                            </center></td>
                </tr>
        </form>
    </table></div>
</center>

<?php $this->load->view('plantilla/footer');?>