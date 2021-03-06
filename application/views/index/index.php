

	<!--BANNER START-->
        <div id="banner" class="section-padding" style="background: url('<?php echo base_url();?>img/creamos_banner.jpg') no-repeat">
		<div class="container">
			<div class="row">
				<div class="jumbotron">
				  <h1 class="small">Bienvenidos a <span class="bold">CreamosLa</span></h1>
				  <p class="big">lema de institucion(ejmplo).</p>
                                  
                                  <a href="#" class="btn btn-banner"><i class="fa fa-info-circle fa-lg" aria-hidden="true"></i>  Leer mas</a>
				</div>
			</div>
		</div>
	</div>
	<!--BANNER END-->

	<!--CTA1 START-->
	<div class="cta-1">
		<div class="container">
			<div class="row text-center white">
				<h1 class="cta-title">Casa de estudios</h1>
				<p class="cta-sub-title">“La educación es un proceso que no termina nunca” Josefina Aldecoa.</p>
			</div>
		</div>
	</div>
	<!--CTA1 END-->
       
        
            
	<!--START DIV CATEGORIAS-->
	<div id="categorias" class="section-padding">
		<div class="container">
			<div class="row">
                            <div class="text-right">
                                <?php if ($this->session->userdata('cargo') == "1") { ?>
                                    <a tipe="submit" class="btn btn-success"  href="<?= base_url(); ?>controlador_curso/nuevo/">Nuevo curso</a><!-- muestra menu solo administrador-->
                                <?php } ?>
                            </div>
				<div class="page-title text-center">
					<h1>CATEGORIAS</h1>
                                        <p>CATEGORIAS DE  <ENF>CURSOS</ENF> DISPONIBLES</p>
					<hr class="pg-titl-bdr-btm"></hr>                                        
				</div>                                
                            <?php 
                            if ($categorias != FALSE){
                            foreach ($categorias as $item):
                            ?>
				<div class="col-md-4">
                                    <div class="gallery">
                                            <a href="<?= base_url().'controlador_categoria/verCursos/'.$item->nombre_categoria;?>">
                                            
                                                    <img class="responsive" src="<?= base_url().'img/categoria/'. $item->foto_categoria; ?>">
                                                    <div class="desc"><h3 class="center"><?Php echo $item->nombre_categoria;?>&nbsp;&nbsp;</h3></div>
                                                                                               
                                            </a>
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
	<!--END DIV CATEGORIAS-->

	<!--START DIV NOSOTROS-->
	<div id="portfolio" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="page-title text-center">
					<h1>Quienes somos</h1>
					<p>conosca los detalles de nuestra institucion  <br>mision, vision, instalaciones. </p>
					<hr class="pg-titl-bdr-btm"></hr>
				</div>
				<div class="port-sec">
					<div class="col-md-12 fil-btn text-center">
							<div class="filter wrk-title active" data-filter="all">Ubicacion</div>
							<div class="filter wrk-title" data-filter=".category-1">Mision</div>
							<div class="filter wrk-title" data-filter=".category-2">Vision</div>
							<div class="filter wrk-title lst-cld" data-filter=".category-3">instalaciones</div>
					</div>
					<div id="Container">
								<div class="filimg mix category-1 category-3 col-md-4 col-sm-4 col-xs-12" data-myorder="2">
									<img src="img/fea1.jpg" class="img-responsive"> 
								</div>
								<div class="filimg mix category-2 col-md-4 col-sm-4 col-xs-12" data-myorder="4">
									<img src="img/fea2.jpg" class="img-responsive">
								</div>
								<div class="filimg mix category-1 col-md-4 col-sm-4 col-xs-12" data-myorder="1">
									<img src="img/fea3.jpg" class="img-responsive">								</div>
								<div class="filimg mix category-2 category-3 col-md-4 col-sm-4 col-xs-12" data-myorder="8">
									<img src="img/fea4.jpg" class="img-responsive">								</div>
								<div class="filimg mix category-2 col-md-4 col-sm-4 col-xs-12" data-myorder="8">
									<img src="img/fea5.jpg" class="img-responsive">
								</div>
								<div class="filimg mix category-2 category-3 col-md-4 col-sm-4 col-xs-12" data-myorder="8">
									<img src="img/fea6.jpg" class="img-responsive">
								</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--END DIV NOSOTROS    -->

	<!--TEAM START-->
	<div id="about" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="page-title text-center">
					<h1>Conoce nuestro equipo</h1>
					<p>maestros calificados, etc <br>trabajando . </p>
					<hr class="pg-titl-bdr-btm"></hr>
				</div>
				<div class="autoplay">
					<div class="col-md-6">
						<div class="team-info">
							<div class="img-sec">
								<img src="img/profesores/agent1.jpg" class="img-responsive">
							</div>
							<div class="fig-caption">
								<h3>Haris Brown</h3>
								<p class="marb-20">Sr. UI Designer</p>
								<p>Follow me:</p>
								<ul class="team-social">
									<li class="bgblue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
								    <li class="bgred"><a href="#"><i class="fa fa-google-plus"></i></a></li>
								    <li class="bgblue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
								    <li class="bgblue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="team-info">
							<div class="img-sec">
								<img src="<?= base_url();?>img/profesores/agent2.jpg" class="img-responsive">
							</div>
							<div class="fig-caption">
								<h3>Emmy Brown</h3>
								<p class="marb-20">Jr. UI Designer</p>
								<p>Follow me:</p>
								<ul class="team-social">
									<li class="blue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
								    <li class="red"><a href="#"><i class="fa fa-google-plus"></i></a></li>
								    <li class="blue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
								    <li class="blue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="team-info">
							<div class="img-sec">
								<img src="img/agent3.jpg" class="img-responsive">
							</div>
							<div class="fig-caption">
								<h3>Iain Dante</h3>
								<p class="marb-20">Jr. UI Designer</p>
								<p>Follow me:</p>
								<ul class="team-social">
									<li class="blue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
								    <li class="red"><a href="#"><i class="fa fa-google-plus"></i></a></li>
								    <li class="blue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
								    <li class="blue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="team-info">
							<div class="img-sec">
								<img src="img/agent4.jpg" class="img-responsive">
							</div>
							<div class="fig-caption">
								<h3>Kate Haris</h3>
								<p class="marb-20">Jr. UI Designer</p>
								<p>Follow me:</p>
								<ul class="team-social">
									<li class="blue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
								    <li class="red"><a href="#"><i class="fa fa-google-plus"></i></a></li>
								    <li class="blue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
								    <li class="blue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--TEAM END-->
    
	<!--CTA2 START-->
	<div class="cta2">
		<div class="container">
			<div class="row white text-center">
				<h3 class="wd75 fnt-24">“Every Thing is designed. Few Things are Designed well.” - Brian Reed</h3>
				<p class="cta-sub-title"></p>
				<a href="#" class="btn btn-default">Request A Quote</a>
			</div>
		</div>
	</div>
	<!--CTA2 END-->

	<!--CONTACT START-->
	<div id="contact" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="page-title text-center">
					<h1>Quick Contact</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p>
					<hr class="pg-titl-bdr-btm"></hr>
				</div>
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                
				<div class="form-sec">
                	<form action="" method="post" role="form" class="contactForm">
                    	<div class="col-md-4 form-group">
                            <input type="text" name="name" class="form-control text-field-box" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="email" class="form-control text-field-box" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control text-field-box" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="col-md-12 form-group">
                            <textarea class="form-control text-field-box" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
            
                            <button class="button-medium" id="contact-submit" type="submit" name="contact">Submit Now</button>
                        </div>
                    </form>
                </div>
			</div>
		</div>
	</div>
	<!--CONTACT END-->
