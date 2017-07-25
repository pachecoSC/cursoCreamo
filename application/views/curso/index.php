<?php $this->load->view('plantilla/header');?>

<br><br><br><br><br><br>

<div id="cursosCategorias" class="section-padding">
		<div class="container">
			<div class="row">
                            
				<div class="page-title text-center">
                                    
					<h1> Curso - <?Php echo $curOb->nombre;?></h1>
					<p></p>
					<hr class="pg-titl-bdr-btm"></hr>
				</div>
                            
				
			</div>
		</div>
	</div>


<?php $this->load->view('plantilla/footer');?>


<center>
    <h1>Lista de Cursos</h1>
    <div class="container"><table class="table table-hover">
            <tr>
                <td><font>Nombre</font></td>
                <td><font>Descripcion </font></td>
                <td><font>Enlace </font></td>
                <td><font>Precio </font></td>
                <td><font>N° Horas </font></td>
                <td><font>Foto de curso </font></td>
                <td><font>Tipo de curso </font></td>
                <td><font>Profesor </font></td>
                <td><font>Categoria de curso </font></td>
                <td><font>Estado de curso </font></td>
            </tr>    
            <!-- @var $cursitos viene de la clase principal
                trae el resultado de la consulta select del curso
            -->
            <?php 
            if ($cursos != NULL){
                foreach ($cursos as $itemcu):
            ?><tr>
                <td><?Php echo $itemcu->nombre;?></td>
                <td><?Php echo $itemcu->descripcion;?></td>
                <td><?Php echo $itemcu->enlace;?></td>
                <td><?Php echo $itemcu->precio;?></td>
                <td><?Php echo $itemcu->horas;?></td>
                <td><img src="<?= base_url().'img/'.$itemcu->foto;?>"></td>
                <td><?Php echo $itemcu->tipo;?></td>
                <td><?Php echo $itemcu->profesor;?></td>
                <td><?Php echo $itemcu->categoria;?></td>
                <td><?Php echo $itemcu->estado;?></td>
                
                
            </tr>
            <?php        endforeach;
            }else{
                echo "No se encuentran datos";
            }
            ?>


        </table></div>
</center>
<center>
    <?php 
    $url = url_title('Menu Principal','-',TRUE);
    ?><h1><?php echo anchor($url,'volver Menu')?></h1>
    
</center>
<!-- modificar con los campos actuales -->

        <script src="js/jquery.min.js"></script>
  	<script src="js/jquery.easing.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/jquery.mixitup.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
        <script src="css/bootstrap.mis.css"></script>
</body>
</html>