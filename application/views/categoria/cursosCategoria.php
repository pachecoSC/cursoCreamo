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
 
 <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
</head>
<body>
    
    
<center>
    <h1>Lista de Cursos por Categorias</h1>
    <div class="container"><table class="table table-hover">
            <tr>
                <td><font>Nombre</font></td>
                <td><font>Descripcion </font></td>
                <td><font>Enlace </font></td>
                <td><font>Precio </font></td>
                <td><font>N° Horas </font></td>
                <td><font>Foto de curso </font></td>
                <td><font>Tipo de curso </font></td>
                <td><font>Profesor </font></td>
                <td><font>Estado de curso </font></td>
            </tr>      
            <!-- @var $usuarios viene del controlador usuario
                trae el resultado de la consulta select del curso
            -->
            
            <?php 
            if ($curCat != NULL){
                foreach ($curCat as $itemCa):
            ?><tr>
                <td><?Php echo $itemCa->nombre;?></td>
                <td><?Php echo $itemCa->descripcion;?></td>
                <td><?Php echo $itemCa->enlace;?></td>
                <td><?Php echo $itemCa->precio;?></td>
                <td><?Php echo $itemCa->horas;?></td>
                <td><img src="<?= base_url().'img/'.$itemCa->foto;?>"></td>
                <td><?Php echo $itemCa->tipo;?></td>
                <td><?Php echo $itemCa->profesor;?></td>
                <td><?Php echo $itemCa->estado;?></td>
                
                
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
    $url = url_title("<?=base_url()?>controlador_categoria/",'-',TRUE);
    ?><h1><?php echo anchor($url,'volver')?></h1>
    
</center>
        <script src="js/jquery.min.js"></script>
  	<script src="js/jquery.easing.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/jquery.mixitup.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
        <script src="css/bootstrap.mis.css"></script>
</body>
</html>