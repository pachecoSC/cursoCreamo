<?php $this->load->view('plantilla/header');?>

<br><br><br><br><br><br>

<center>
    <h1>Lista de Usuarios</h1>
    <div class="container"><table class="table table-hover">
            <tr>
                <td><font>Email</font></td>
                <td><font>Password</font></td>
                <td><font>Nombre</font></td>
                <td><font>Appellidos </font></td>
                <td><font>telefono</font></td>
                <td><font>Estado</font></td>
                <td><font>Cargo</font></td>
                <td><font>Opciones</font></td>

            </tr>    
            <!-- @var $usuarios viene del controlador usuario
                trae el resultado de la consulta select del curso
            -->
            
            <?php 
            if ($usuarios != FALSE){
                foreach ($usuarios as $item):
            ?><tr>
                <td><?Php echo $item->email;?></td>
                <td><?php echo $item->password;?></td>
                <td><?php echo $item->nombre_usuario;?></td>
                <td><?php echo $item->apellidos;?></td>
                <td><?php echo $item->telefono;?></td>
                <td><?php echo $item->estado_usuario;?></td>
                <td><?php if($item->tipo_usuario == '1'){
                    echo "Administrador";
                }else if ($item->tipo_usuario =='2'){
                    echo "Colaborador";
                }else{
                    echo "Cliente";
                }
                
                
                ?>
                </td>
                <!--<td><?php //$aux= $item->id_usuario?> </td>-->
                <td>
                    <!-- codigo para los botones editar y eliminar-->
                    
                    <a type="button" href="<?= base_url()?>controlador_usuario/editar/<?php echo $item->id_usuario;?>" class="btn btn-success" >
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modificar</a> 
                        &nbsp;&nbsp;
                        <a type="button" href="<?= base_url()?>controlador_usuario/eliminar/<?php echo $item->id_usuario;?>" class="btn btn-danger" >
                            <i class="fa fa-trash-o" aria-hidden="true"></i></i>Despedir</a>
                 </td>
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