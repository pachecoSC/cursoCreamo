<?php $this->load->view('plantilla/header');?>

<br><br><br><br><br><br>

<center>
    <h1>Lista de Categorias</h1>
    <div class="container"><table class="table table-hover">
            <tr>
                <td><font>Nombre</font></td>
                <td><font>Foto</font></td>
                <td><font>Descripcion</font></td>
                <td><font>Opciones</font></td>
 
            </tr>    
            <!-- @var $usuarios viene del controlador usuario
                trae el resultado de la consulta select del curso
            -->
            
            <?php 
            if ($categorias != FALSE){
                foreach ($categorias as $itemca):
            ?><tr>
                <!-- envia la direccion completa . el nombre guardado en bd -->
                <td><img src="<?= base_url().'img/categoria/'. $itemca->foto_categoria; ?>"></td>
                <td><?Php echo $itemca->nombre_categoria;?></td>
                <td><?Php echo $itemca->descripcion_categoria;?></td>
                <td>
                    <a type="button" href="<?= base_url() ?>Controlador_categoria/editar/<?php echo $itemca->id_categoria_curso; ?>" class="btn btn-success" >
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modificar</a> 
                    &nbsp;&nbsp;
                    <a type="button" href="<?= base_url() ?>Controlador_categoria/eliminar/<?php echo $itemca->id_categoria_curso; ?>" class="btn btn-danger" >
                        <i class="fa fa-trash-o" aria-hidden="true"></i></i>Eliminar</a>
                <td> 
            </tr>
            <?php        endforeach;
            }else{
                echo "No se encuentran datos";
            }
            ?>


        </table></div>
</center>

<?php $this->load->view('plantilla/footer');?>