<?PHP defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" class=" js no-touch">
<head>

<?php echo link_tag('css/bootstrap.min.css')?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />    
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
<?php echo link_tag('css/slick-team-slider.css')?>
<?php echo link_tag('css/style.css')?>    
<?php echo link_tag('css/estilo.css')?> 
  <title>Creamos.la</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  
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
                            <li class="active"><a href="<?= base_url()?>">Inicio</a></li>
                            <li ><a href="#categorias">Categorias</a></li>
                            <li ><a href="#cursos">Cursos</a></li>
                            <li ><a href="#equipo">Nuestro Equipo</a></li>
                            <li ><a href="#contact">Contáctanos</a></li>
                            <!-- formulario despleglable-->
                            <?php if($this->session->userdata('login')) {?>
                            <li>
                            <?php echo $this->session->userdata('email'); ?><!-- devuelve el email del usuario -->
                            </li>
                            <li>
                            <a href="<?= base_url();?>controlador_login/logout/">Cerrar session</a><!-- muestra boton para cerrar la sesion-->
                            </li>
                            <?php if($this->session->userdata('cargo')=='1'){ ?>
                            <li>
                            <a href="<?= base_url();?>controlador_index/mantenimiento/">Mantenimiento</a><!-- muestra menu solo administrador-->
                            </li>
                            <?php }
                            }else{ ?>
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
                                        <a class='btn btn-success' style='width: 380px;' type='submit' href="<?= base_url();?>Controlador_usuario/nuevo"> REGISTRARSE</a>
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