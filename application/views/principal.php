<?php $this->load->view('plantilla/header');?>

    <br><br><br><br><br><br><br>
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