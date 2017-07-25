<?php $this->load->view('plantilla/header');?>
    <div class="main-navigation navbar-fixed-top">
		<nav class="navbar navbar-default">
			<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand-style" href="index.php"><img src="<?php echo base_url('img/creamos_logo.png')?>"</a></div
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav navbar-right">
                            <li ><a href="#contact">Contáctanos</a></li>
                            <li ><a href="#about">Nuestro Equipo</a></li>
                            <!--li ><a href="#cursos">Cursos</a></li-->
                            <li ><a href="#categorias">Categorias</a></li>
			    <li class="active"><a href="#banner">Inicio</a></li> 
			    <li><a href="lista-de-categorias">Categorias</a></li>
                            <!-- formulario desplegable-->
                            <?php if($this->session->userdata('login')){ ?><!--si existe loggeo entonces login es  true -->
                            <li>
                                <p><?php echo $this->session->userdata('email'); ?></p><!-- devuelve el email del usuario -->
                            </li>
                            <li>
                                <a href="logout">Cerrar session</a><!-- muestra boton para cerrar la sesion-->
                            </li>
                            <?php }else{ ?><!-- de lo contrario sugiere entrar session-->
                            
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
    <?php 
    if($this->session->userdata('login')){//pregunta si existe el sesion
        
        if($this->session->userdata('cargo') == '1'){//pregunta por el cargo del usuario de la session
            ?>
        <p><h1>Menu Usuarios</h1></p>
        <p>  <?php 
        $url1 = url_title('Formulario de Usuarios','-',TRUE);
        echo anchor($url1,'Agregar Usuarios')?></p>
        <p>  <?php 
        $url2 = url_title('Lista de Usuarios','-',TRUE);
        echo anchor($url2,'Ver Usuarios')?></p>
    
    
            <?php
        }
    }
    ?>
    
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
<?php $this->load->view('plantilla/footer');?>