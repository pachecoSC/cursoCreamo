<?php $this->load->view('plantilla/header');?>

<br><br><br><br><br><br>
<div class="text-right">
<?php if ($this->session->userdata('cargo') == "1") { ?>
    <a tipe="submit" class="btn btn-success"  href="<?= base_url();?>controlador_curso/nuevo/">Nuevo curso</a><!-- muestra menu solo administrador-->
<?php } ?>
</div>
<div id="cursosCategorias" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="page-title text-center">
                                    <h1> 
                                        <?php
                                        if ($nombre != FALSE) {
                                            foreach ($nombre as $nom) {
                                                echo $nom->nombre_curso;
                                            }
                                        }
                                        ?>
                                    </h1>
					<p></p>
					<hr class="pg-titl-bdr-btm"></hr>
				</div>
                            
				
			</div>
		</div>
	</div>





<center>
    <div class="container"><table class="table table-hover">
            <tr>
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
                <td><?Php echo $itemcu->descripcion;?></td>
                <td><?Php echo $itemcu->enlace;?></td>
                <td><?Php echo $itemcu->precio;?></td>
                <td><?Php echo $itemcu->horas;?></td>
                <td><img src="<?= base_url().'img/cursos/'.$itemcu->foto;?>"></td>
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

<?php $this->load->view('plantilla/footer');?>