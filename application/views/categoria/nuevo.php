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
    <head> <title>formulario de categoria</title>
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