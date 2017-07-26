<?php $this->load->view('plantilla/header');?>

<br><br><br><br><br><br>

<div id="cursosCategorias" class="section-padding">
		<div class="container">
			<div class="row">
                            
				<div class="page-title text-center">
					<h1> Cursos registrados en <?Php echo $id;?></h1>
					<p></p>
					<hr class="pg-titl-bdr-btm"></hr>
				</div>
                            <?php 
                            if ($curCat != FALSE){
                            foreach ($curCat as $itemCa):
                            ?>
				<div class="col-md-4">
					<div class="service-box">
						<div class="service-text">
                                                    <p><img src="<?= base_url().'img/cursos/'.$itemCa->foto_cu;?>"></p>
                                                    <center><h3><?Php echo $itemCa->nombre;?>&nbsp;&nbsp;
                                                     <!--      en esta parte enviar a lista de cursos--> 
                                                    <a href="<?= base_url().'controlador_curso/mostrarCurso/'.$itemCa->id_cu;?>">
                                                    <i class="fa fa-angle-double-right fa-lg" aria-hidden="true"></i></a> 
                                                    </h3></center>
                                                    &nbsp;&nbsp;&nbsp;
						</div>
					</div>
				</div>
                            <?php        endforeach;
                            }else{
                                echo "No se encuentran datos";
                            }
                            ?>
				
			</div>
		</div>
	</div>

<?php $this->load->view('plantilla/footer');?>
