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
    <head> <title>formulario de curso</title>
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

        <script src="js/jquery.min.js"></script>
  	<script src="js/jquery.easing.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/jquery.mixitup.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
        <script src="css/bootstrap.mis.css"></script>
</body>
