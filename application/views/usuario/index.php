<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head> 
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
    <style type="text/css">
        font{
            color: #3366ff;
            font-size: 18px;
        }
    </style>
     
<?php echo link_tag('css/bootstrap.min.css')?>  
<?php echo link_tag('css/bootstrap-theme.min.css')?>  
<?php echo link_tag('css/font-awesome.min.css')?>
<?php echo link_tag('css/slick-team-slider.css')?>
<?php echo link_tag('css/style.css')?>
 <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
</head>
</head>
<body>
    
    
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
                        <span class="glyphicon glyphicon-pencil"></span> Modificar</a> 
                        &nbsp;&nbsp;
                        <a type="button" href="<?= base_url()?>controlador_usuario/eliminar/<?php echo $item->id_usuario;?>" class="btn btn-danger" >
                            <span class="glyphicon glyphicon-erase" ></span>Despedir</a>
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
        <script src="js/jquery.min.js"></script>
  	<script src="js/jquery.easing.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/jquery.mixitup.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
        <script src="css/bootstrap-theme.min.css"></script>
        
</body>
</html>