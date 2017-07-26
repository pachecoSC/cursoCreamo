<?php $this->load->view('plantilla/header');?>

<br><br><br><br><br><br>
   
<center>
    <h1>Lista de Profesores</h1>
    <div class="container"><table class="table table-hover">
            <tr>
                <td><font>Nombre</font></td>
                <td><font>Email</font></td>
                <td><font>Especialidad</font></td>
                <td><font>Descripcion</font></td>
                <td><font>Telefono</font></td>
                <td><font>Foto</font></td>

            </tr>    
            <!-- @var $usuarios viene del controlador usuario
                trae el resultado de la consulta select del curso
            -->
            
            <?php 
            if ($profesores != FALSE){
                foreach ($profesores as $item):
            ?><tr>
                <td><?Php echo $item->nombre_profesor;?></td>
                <td><?php echo $item->email;?></td>
                <td><?php echo $item->especialidad;?></td>
                <td><?php echo $item->descripcion_profesor;?></td>
                <td><?php echo $item->telefono;?></td>
                <td><img src="<?= base_url().'img/'.$item->foto_profesor;?>"></td>
                <!--<td><?php //$aux= $item->id_profesor?> </td> usada para guardar el ID y luego usarlo para modificar.-->
            </tr>
            <?php        endforeach;
            }else{
                echo "No se encuentran datos";
            }
            ?>


        </table></div>
</center>
<center>
    <?php 
    $url = url_title('Menu Principal','-',TRUE);
    ?><h1><?php echo anchor($url,'volver Menu')?></h1>
    
</center>

<?php $this->load->view('plantilla/footer');?>