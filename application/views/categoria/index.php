
<?php $this->load->view('plantilla/header');?>

<center>
    <h1>Lista de Categorias</h1>
    <div class="container"><table class="table table-hover">
            <tr>
                <td><font>Nombre</font></td>
                <td><font>Foto</font></td>
                <td><font>Descripcion</font></td>
                <td><font>Ver Cursos</font></td>
 
            </tr>    
            <!-- @var $usuarios viene del controlador usuario
                trae el resultado de la consulta select del curso
            -->
            
            <?php 
            if ($categorias != FALSE){
                foreach ($categorias as $itemca):
            ?><tr>
                <td><?Php echo $itemca->nombre_categoria;?></td>
                <!-- envia la direccion completa . el nombre guardado en bd -->
                <td><img src="<?= base_url().'img/categoria/'. $itemca->foto_categoria; ?>"></td>
                <td><?Php echo $itemca->descripcion_categoria;?></td>
                <td><a type="button" href="<?= base_url().'controlador_categoria/verCursos/'.$itemca->nombre_categoria;?>" class="btn btn-success" >
                        <i class="fa fa-eye" aria-hidden="true"></i> Ver Cursos</a><td> 
                <!--<td><? //$aux= $item->id_categoria_curso?> </td> usada para guardard><a type="button" href="<?= base_url().'controlador_categoria/verCursos/'.$itemca->nombre_categoria;?>" class="btn btn-success" >
                        <i class="fa fa-eye" aria-hidden="true"></i> Ver Cursos</a><td> el ID y luego usarlo para modificar.-->
            </tr>
            <?php        endforeach;
            }else{
                echo "No se encuentran datos";
            }
            ?>


        </table></div>
</center>
