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
</head>
<body>
    <div class="main-navigation navbar-fixed-top">
		<nav class="navbar navbar-default">
			<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="menu-principal">Pagina principal</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav navbar-right">
			    <li class="active"><a href="menu-principal">Home</a></li>
			    <li><a href="lista-de-categorias">Categorias</a></li>
                            <!-- formulario desplegable-->
                            <?php if($this->session->userdata('login')){ ?>
                            <li>
                                <a href="logout">Cerrar session</a>
                            </li>
                            <?php }else{ ?>
                            
                            <li class='dropdown'>
                                <a class='dropdown-toggle' href='#' data-toggle='dropdown' style="background: none;">INICIAR SESION ... <strong class='caret'></strong></a>
                                <div class='dropdown-menu' style='padding: 10px; padding-bottom: 0px; background: none; width: 400px;'>
                                <form action='loggear' method='post' accept-charset='UTF-8' role="form">
                                <div class='form-group'>
                                        <input class='form-control large' style='text-align: center;' type='text' name='txtusuario' placeholder='usuario'/>
                                </div>
                                <div class='form-group'> 
                                        <input class='form-control large' style='text-align: center;' type='password' name='txtpassword' placeholder='contraseña' />
                                </div>
                                <div class='form-group'>
                                        <button class='btn btn-primary' style='width: 380px;' type='submit'>INGRESAR</button>
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
    
    <br>
    <br>
    <br>
    <br>
    <br>
<center>
    <p><h1>Menu Usuarios</h1></p>
    <p>  <?php 
    $url1 = url_title('Formulario de Usuarios','-',TRUE);
    echo anchor($url1,'Agregar Usuarios')?></p>
    <p>  <?php 
    $url2 = url_title('Lista de Usuarios','-',TRUE);
     echo anchor($url2,'Ver Usuarios')?></p>
    
    <p><h1>Menu de cursos</h1></p>
    <p>  <?php 
    $url3 = url_title('Formulario de Cursos','-',TRUE);
     echo anchor($url3,'Agregar Cursos')?></p>
    <p>  <?php 
    $url4 = url_title('Lista de Cursos','-',TRUE);
     echo anchor($url4,'ver Cursos')?></p>
    
    <p><h1>Menu de Profesores</h1></p>
    <p>  <?php 
    $url5 = url_title('Formulario de Profesores','-',TRUE);
     echo anchor($url5,'Agregar Profesores')?></p>
    <!-- <a href="" > hola </a>-->
    <p>  <?php 
    $url6 = url_title('Lista de Profesores','-',TRUE);
     echo anchor($url6,'ver Profesores')?></p>
    
    <p><h1>Menu de Categoria</h1></p>
    <p><?php
    $url7= url_title('Formulario de Categorias','-',TRUE);
    echo anchor($url7,'Agregar Categoria');?></p>
    <p><?php
    $url8= url_title('Lista de Categorias','-',TRUE);
    echo anchor($url8,'ver Categorias');?></p>
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