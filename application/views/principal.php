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

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
        

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}
        font{
            color: #3366ff;
            font-size: 11px;
        }
	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
                
	}
        table{
            border:1px solid black;
            border-collapse:separate;
            width:500px;
            height:auto;
        }
        th, td {
            border:1px solid black;

        }
      
	</style>
</head>
<body>
<center><h1>Bienvenidos a la vista principal</h1></center>
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

</body>
</html>