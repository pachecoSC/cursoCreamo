
<?php $this->load->view('plantilla/header');?>

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
    <style type="text/css">
        font{
            color: #3366ff;
            font-size: 18px;
        }
    </style>
     
<?php echo link_tag('css/bootstrap.min.css')?>  
<?php echo link_tag('css/font-awesome.min.css')?>
<?php echo link_tag('css/slick-team-slider.css')?>
<?php echo link_tag('css/style.css')?>
<?= link_tag('') ?>    
 <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
</head>
<body>
    
    
>>>>>>> .r42
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
                <td><img src="<?= base_url().'img/folder/'. $itemca->foto_categoria; ?>"></td>
                <td><?Php echo $itemca->descripcion_categoria;?></td>
                <td><a type="button" href="<?= base_url().'controlador_categoria/verCursos/'.$itemca->nombre_categoria;?>" class="btn btn-success" >
                        <span class="icon-edit"></span> Ver Cursos</a><td> 
                <!--<td><? //$aux= $item->id_categoria_curso?> </td> usada para guardar el ID y luego usarlo para modificar.-->
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
<<<<<<< .mine
<?php $this->load->view('plantilla/footer');?>=======
        <script src="js/jquery.min.js"></script>
  	<script src="js/jquery.easing.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/jquery.mixitup.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
        <script src="css/font-awesome.min.css"></script>
</body>
</html>
>>>>>>> .r42
