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
    <head> <title>formulario de usuario</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
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
</head>
<body>
    
<center><h1>Nuevo Personal</h1>
    <div class="container"><table class="table table-hover">
            <form action="guardarUsuario" method="POST">
                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="txtEmail"/></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="txtPassword" </td>
                </tr>
                <tr>
                    <td>Nombre: </td>
                    <td><input type="text" name="txtNombre"</td>
                </tr>
                <tr>
                    <td>Apellidos: </td>
                    <td><input type="text" name="txtApellido"</td>
                </tr>
                <tr>
                    <td>Telefono: </td>
                    <td><input type="text" name="txtTelefono" maxlength="9"></td>
                </tr>
                
                <!-- id ASistencia nulo y estado personal true o 1-- eliminar
                -->
                <tr>
                    <!--<td> estado </td>-->
                    <td colspan="2"><input type="hidden" name="txtEstado" value="1"></td>
                </tr>
                
                <tr>
                    <td colspan="2"><center><input type="submit" class=" btn btn-primary" value="Guardar"/>
                    &nbsp;&nbsp;<a type="submit"  class="btn btn-danger" href="menu-principal">Cancelar</a> </center></td>
                    
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
