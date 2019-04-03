			<?php get_header(); ?>

			<div class="hero-section-xs d-block d-md-none">
				<div class="row no-gutters" style="background-image: url(<?php echo get_theme_file_uri('/images/background.jpg') ?>)">
					<div class="col d-flex justify-content-center">
						<div class="frase-capa">
							<img class="logo-xs" src='<?php echo get_theme_file_uri('/images/delli_logo.png'); ?>' alt="Delli logo">
							<img src="<?php echo get_theme_file_uri('/images/frase_capa.png'); ?>" class="d-block justify-content-center" alt="Frase capa">
							<a href="#delivery"><button type="button" class="btn btn-primary">PE&Ccedil;A EM CASA!</button></a>
						</div>
					</div>
				</div>
			</div>

			<div class="hero-section d-none d-md-block">
				<div class="carousel slide carousel-fade" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="d-flex align-items-center justify-content-center min-vh-100">
								<img src="<?php echo get_theme_file_uri('/images/background.jpg'); ?>" class="d-block w-100 min-vh-100" alt="Background image">
							</div>
						</div>
						<div class="carousel-item">
							<div class="d-flex align-items-center justify-content-center min-vh-100">
								<img src="<?php echo get_theme_file_uri('/images/background2.jpg'); ?>" class="d-block w-100" alt="Background image">
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="d-flex justify-content-center">
						<div class="hero-section-2 ">
							<div class="col">
								<div class="frase-capa">
									<img src="<?php echo get_theme_file_uri('/images/frase_capa.png'); ?>" class="d-block justify-content-center" alt="Frase capa">
									<a href="#delivery"><button type="button" class="btn btn-primary">PE&Ccedil;A EM CASA!</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div><a class="anchor-offset" name="home"></a></div>
			<div class="delli-section" style="background-image: url(<?php echo get_theme_file_uri('/images/background3.jpg') ?>)">
				<div class="row no-gutters">
					<div class="col">
						<div class="background-dark">
							<?php 
							if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<h2><img src="<?php echo get_theme_file_uri('/images/icone_trigo_esq.png'); ?>"><?php the_title(); ?><img src="<?php echo get_theme_file_uri('/images/icone_trigo_dir.png'); ?>"></h2>
							    <div class="container content-text">
							    	<div class="content-text-topnbottom">
							    		<p><?php the_content(); ?></p>
							    	</div>
							    </div>
							  	<?php endwhile; endif;
							?>
						</div>
					</div>
				</div>
			
				<a class="anchor-offset" name="cardapio"></a>
				<div class="background-yellow">
					<div class="row no-gutters">
						<div class="col">
							<div class="cardapio-section">
								<div class="cardapio-section--white">
									<h2 style="color: #fff;"><img src='<?php echo get_theme_file_uri('/images/icone_trigo_esq.png'); ?>' alt="Ícone Trigo">CARD&Aacute;PIO<img src='<?php echo get_theme_file_uri('/images/icone_trigo_dir.png'); ?>' alt="Ícone Trigo"></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row no-gutters">
							<div class="col-sm-12 col-md-3">
						    	<div class="columns-section">
									<a href="<?php echo get_theme_file_uri('/images/cardapio.pdf'); ?>" target="_blank" ><img src='<?php echo get_theme_file_uri('/images/icone_pao.png'); ?>' alt="Ícone Pão"></a>
										<h5><a href="<?php echo get_theme_file_uri('/images/cardapio.pdf'); ?>" target="_blank">P&Atilde;ES</a></h5>
										<p>Pão nosso de cada dia! Doce, salgado, com grãos, caseiro ou recheado. Ninguém resiste em experimentar uma fatia de pão quentinho seja no café da manhã, no lanche da tarde ou como acompanhamento de um prato principal.</p>
						    	</div>
						  	</div>
						  	<div class="col-sm-12 col-md-3">
						    	<div class="columns-section">
									<a href="<?php echo get_theme_file_uri('/images/cardapio.pdf'); ?>" target="_blank" ><img src='<?php echo get_theme_file_uri('/images/icone_burguer.png'); ?>' alt="Ícone Lanches"></a>
						      		<h5><a href="<?php echo get_theme_file_uri('/images/cardapio.pdf'); ?>" target="_blank" >LANCHES</a></h5>
						      		<p>Saia da rotina! No pão francês, na baguete simples ou outro especial combinado com nossos queijos, frios, verduras e outros recheios deliciosos! Frescos, quentes e crocantes com diferentes molhos, pastas e texturas para comer rezando.</p>
						    	</div>
						  	</div>
							<div class="col-sm-12 col-md-3">
						    	<div class="columns-section">
									<a href="<?php echo get_theme_file_uri('/images/cardapio.pdf'); ?>" target="_blank" ><img src='<?php echo get_theme_file_uri('/images/icone_doce.png'); ?>' alt="Ícone Doces"></a>
						      		<h5><a href="<?php echo get_theme_file_uri('/images/cardapio.pdf'); ?>" target="_blank" >DOCES</a></h5>
						      		<p>Delícia mesmo é comer nosso sabor de bolo favorito em boa companhia! Aipim, prestígio, brigadeiro, cenoura com calda de chocolate...hummm Vem conferi uma infinita variedade de doces, tortas, bolos e biscoitos para deixar sua vida ainda mais doce.</p>
							    </div>
						    </div>
						    <div class="col-sm-12 col-md-3">
						    	<div class="columns-section">
									<a href="<?php echo get_theme_file_uri('/images/cardapio.pdf'); ?>" target="_blank" ><img src='<?php echo get_theme_file_uri('/images/icone_bolo.png'); ?>' alt="Ícone Eventos"></a>
						        	<h5><a href="<?php echo get_theme_file_uri('/images/cardapio.pdf'); ?>" target="_blank" >EVENTOS</a></h5>
						        	<p>Compartilhamos sabor! Surpreenda com uma noite de pizza, um almoço entre amigos, um café da manhã em família. Nós preparamos tudo com muito carinho e levamos até você.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<a class="anchor-offset" name="delivery"></a>
			<div class="row no-gutters">
				<div class="col">
					<div class="delivery-section">
						<h2><img src='<?php echo get_theme_file_uri('/images/icone_trigo_esq.png'); ?>' alt="Ícone Trigo">PE&Ccedil;A EM CASA<img src='<?php echo get_theme_file_uri('/images/icone_trigo_dir.png'); ?>' alt="Ícone Trigo"></h2>
					</div>
					<div class="delivery-section-body" style="background-image: url(<?php echo get_theme_file_uri('/images/delivery_background.jpg') ?>)">
						<div class="delivery-section-body--yellow">
							<div class="container">
								<?php echo do_shortcode( '[contact-form-7 id="155" title="Delli Portal - Formulário de Pedidos"]' ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>


			<a class="anchor-offset" name="galeria"></a>
			<div class="row no-gutters">
				<div class="col">
					<div class="galeria-section">
						<h2><img src='<?php echo get_theme_file_uri('/images/icone_trigo_esq.png'); ?>' alt="Ícone Trigo">COMPARTILHAMOS SABOR E ABRA&Ccedil;OS<img src='<?php echo get_theme_file_uri('/images/icone_trigo_dir.png'); ?>' alt="Ícone Trigo"></h2>
						
						<div class="container">
							<div class="row no-gutters">
								<div class="col-12 col-md-4">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(1)" src='<?php echo get_theme_file_uri('/images/galeria_1.png'); ?>' alt="Foto galeria 1" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(2)" src='<?php echo get_theme_file_uri('/images/galeria_2.png'); ?>' alt="Foto galeria 2" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(3)" src='<?php echo get_theme_file_uri('/images/galeria_3.png'); ?>' alt="Foto galeria 3" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(4)" src='<?php echo get_theme_file_uri('/images/galeria_4.png'); ?>' alt="Foto galeria 4" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(5)" src='<?php echo get_theme_file_uri('/images/galeria_5.png'); ?>' alt="Foto galeria 5" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(6)" src='<?php echo get_theme_file_uri('/images/galeria_6.png'); ?>' alt="Foto galeria 6" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(7)" src='<?php echo get_theme_file_uri('/images/galeria_7.png'); ?>' alt="Foto galeria 7" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(8)" src='<?php echo get_theme_file_uri('/images/galeria_8.png'); ?>' alt="Foto galeria 8" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(9)" src='<?php echo get_theme_file_uri('/images/galeria_9.png'); ?>' alt="Foto galeria 9" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(10)" src='<?php echo get_theme_file_uri('/images/galeria_10.png'); ?>' alt="Foto galeria 10" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(11)" src='<?php echo get_theme_file_uri('/images/galeria_11.png'); ?>' alt="Foto galeria 11" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(12)" src='<?php echo get_theme_file_uri('/images/galeria_12.png'); ?>' alt="Foto galeria 12" style="width:100%">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>						
					
			<!-- The Modal -->
			<div class="container">
				<div id="myModal" class="modal">
					<span class="close cursor" onclick="closeModal()">&times;</span>
					<div class="modal-content">
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/galeria_1.png'); ?>" style="width:100%" alt="Thumbnail galeria 1">
						</div>
					    <div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/galeria_2.png'); ?>" style="width:100%" alt="Thumbnail galeria 2">
						</div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/galeria_3.png'); ?>" style="width:100%" alt="Thumbnail galeria 3">
						</div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/galeria_4.png'); ?>" style="width:100%" alt="Thumbnail galeria 4">
					    </div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/galeria_5.png'); ?>" style="width:100%" alt="Thumbnail galeria 5">
					    </div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/galeria_6.png'); ?>" style="width:100%" alt="Thumbnail galeria 6">
					    </div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/galeria_7.png'); ?>" style="width:100%" alt="Thumbnail galeria 7">
					    </div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/galeria_8.png'); ?>" style="width:100%" alt="Thumbnail galeria 8">
					    </div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/galeria_9.png'); ?>" style="width:100%" alt="Thumbnail galeria 9">
					    </div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/galeria_10.png'); ?>" style="width:100%" alt="Thumbnail galeria 10">
					    </div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/galeria_11.png'); ?>" style="width:100%" alt="Thumbnail galeria 11">
					    </div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/galeria_12.png'); ?>" style="width:100%" alt="Thumbnail galeria 12">
					    </div>

					    <!-- Next/previous controls -->
					    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					    <a class="next" onclick="plusSlides(1)">&#10095;</a>
				    </div>
				</div>
			</div>

			<a class="anchor-offset" name="contato"></a>
			<div class="row no-gutters">
				<div class="col-sm-12">
					<div class="contato-section" style="background-image: url(<?php echo get_theme_file_uri('/images/background4.jpg') ?>)">
						<div class="contato-section--black">
							<h2><img src='<?php echo get_theme_file_uri('/images/icone_trigo_esq.png'); ?>' alt="Ícone Trigo">CONTATO<img src='<?php echo get_theme_file_uri('/images/icone_trigo_dir.png'); ?>' alt="Ícone Trigo"></h2>
							<div class="contato-section--margins">
								<p><img src='<?php echo get_theme_file_uri('/images/icone_mapa.png'); ?>' alt="Ícone Mapa">AV Rodolfo Amoedo 455 Barra da Tijuca, Rio de Janeiro</p>
								<p><img src='<?php echo get_theme_file_uri('/images/icone_whatsapp.png'); ?>' alt="Ícone Whatsapp">(21) 96544.73.43</p>
								<p><a href="mailto:delliportal@delliportal.com.br?subject=Contato pelo site Delli Portal" alt="Ícone Email"><img src='<?php echo get_theme_file_uri('/images/icone_email.png'); ?>'>e-mail: delliportal@delliportal.com.br</a></p>
								<p><a href="https://instagram.com/delliportal" target="_blank"><img src='<?php echo get_theme_file_uri('/images/icone_instagram.png'); ?>' alt="Ícone Instagram">instagram.com/delliportal</a></p>
								<p><a href="https://facebook.com/delliportal" target="_blank"><img src='<?php echo get_theme_file_uri('/images/icone_facebook.png'); ?>' alt="Ícone Facebook">facebook.com/delliportal</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a class="anchor-offset" name="mapa"></a>
			<div class="row no-gutters">
				<div class="col-sm-12">
					<div class="mapa-section">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.4407426670314!2d-43.318788285560686!3d-23.007584084960612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bd0bc7132aeb9%3A0xf3c98d5d34961742!2sAv.+Rodolfo+Amoedo%2C+455+-+Barra+da+Tijuca%2C+Rio+de+Janeiro+-+RJ%2C+22620-350%2C+Brazil!5e0!3m2!1sen!2snl!4v1549143331013" width="100%" height="450" frameborder="0" style="border:0"></iframe>
					</div>
				</div>
			</div>
			<?php get_footer(); ?>
