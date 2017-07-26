<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" class=" js no-touch">
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
    
  <title>Creamos.la</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <?php echo link_tag('css/bootstrap.min.css')?> 
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel=”stylesheet” href=”tucarpeta/css/font-awesome.min.css“>
    <?php echo link_tag('css/slick-team-slider.css')?>
    <?php echo link_tag('css/style.css')?>
    <link rel=”stylesheet” href=”css/font-awesome.min.css“>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
 <!--<link rel="stylesheet" href="css/bootstrap.min.css">  
 <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="css/slick-team-slider.css"/>
 <link rel="stylesheet" type="text/css" href="css/style.css">-->
  <!-- =======================================================
        Theme Name: Tempo
        Theme URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>
<body>
	<!--HEADER START-->
	<div class="main-navigation navbar-fixed-top">
		<nav class="navbar navbar-default">
			<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>
                            <div><a class="navbar-brand" href="index.php"><img src="<?= base_url()?>img/creamos_logo.png"></a></div>
			</div>                            
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav navbar-right">
                            <!--li ><a href="#login">Login</a></li-->

                            <li ><a href="#contact">Contáctanos</a></li>
                            <li ><a href="#equipo">Nuestro Equipo</a></li>
                            <!--li ><a href="#cursos">Cursos</a></li-->
                            <li ><a href="#cursos">Cursos</a></li>
                            <li ><a href="#categorias">Categorias</a></li>
                            <li class="active"><a href="<?= base_url()?>">Inicio</a></li>  
                            <!-- formulario despleglable-->
                            <?php if($this->session->userdata('login')) {?>
                                <li>
                                <p><?php echo $this->session->userdata('email'); ?></p><!-- devuelve el email del usuario -->
                                </li>
                                <li>
                                    <a href="<?= base_url();?>controlador_login/logout/">Cerrar session</a><!-- muestra boton para cerrar la sesion-->
                                </li>
                                <?php if($this->session->userdata('cargo')=="1"){ ?>
                                <li>
                                    <a href="<?= base_url();?>controlador_index/mantenimiento/">Mantenimiento</a><!-- muestra menu solo administrador-->
                                </li>
                                <?php }?>
                            <?php }else{ ?>
                                <li class='dropdown'>
                                <a class='dropdown-toggle' href='#' data-toggle='dropdown' style="background: none;">INICIAR SESION ... <strong class='caret'></strong></a>
                                <div class='dropdown-menu' style='padding: 10px; padding-bottom: 0px; background: none; width: 400px;'>
                                    <form action='<?= base_url();?>controlador_login/' method='post' accept-charset='UTF-8' role="form">
                                <div class='form-group'>
                                        <input class='form-control large' style='text-align: center;' type='text' name='txtusuario' placeholder='usuario'/>
                                </div>
                                <div class='form-group'> 
                                        <input class='form-control large' style='text-align: center;' type='password' name='txtpassword' placeholder='contraseña' />
                                </div>
                                <div class='form-group'>
                                        <button class='btn btn-primary' style='width: 380px;' type='submit'>INGRESAR</button>
                                        <a class='btn btn-success' style='width: 380px;' type='submit' href="formulario-de-usuarios"> REGISTRARSE</a>
                                </div>
                                </form>
                                </div>
                                </li>
                            <?php }?>

			  </ul>
			</div>
		  </div>
		</nav>
	</div>
	<!--HEADER END-->