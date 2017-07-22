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
    <center><h1>Actualizar Personal</h1>
    <div class="container"><table class="table table-hover">
            <form action="http://localhost/repositorio/trunk/controlador_usuario/actualizar/<?php echo $usu->id_usuario;?>" method="POST">
                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="txtEmail" value="<?php echo $usu->email?>"/></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="text" name="txtPassword" value="<?php echo $usu->password?>"</td>
                </tr>
                <tr>
                    <td>Nombre: </td>
                    <td><input type="text" name="txtNombre" value="<?php echo $usu->nombre_usuario?>"</td>
                </tr>
                <tr>
                    <td>Apellidos: </td>
                    <td><input type="text" name="txtApellido" value="<?php echo $usu->apellidos?>"</td>
                </tr>
                <tr>
                    <td>Telefono: </td>
                    <td><input type="text" name="txtTelefono" maxlength="9" value="<?php echo $usu->telefono?>"></td>
                </tr>
                <tr>
                    <td>Cargo: </td>
                    <td><input type="text" name="txtCargo" value="<?php echo $usu->tipo_usuario?>"></td>
                </tr>
                <!-- id ASistencia nulo y estado personal true o 1-- eliminar
                -->
                <tr>
                    <!--<td> estado </td>-->
                    <td colspan="2"><input type="hidden" name="txtEstado" value="<?php echo $usu->estado_usuario?>"></td>
                </tr>
                
                <tr>
                    <td colspan="2"><center><input type="submit" class=" btn btn-primary" value="Guardar"/>
                    &nbsp;&nbsp;<a type="submit"  class="btn btn-danger" href= "../index">Cancelar</a> </center></td>
                    
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
        <script src="css/bootstrap-theme.min.css"></script>
        
</body>
</html>