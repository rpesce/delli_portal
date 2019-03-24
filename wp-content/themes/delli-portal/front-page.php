			<?php get_header(); ?>
			<div><a class="anchor-offset" name="home"></a></div>
			<div class="row no-gutters">
				<div class="col">
					<?php
						$randomDecisor = mt_rand(1,2);
						if($randomDecisor == 1) {
							$backgroundImage = get_theme_file_uri('/images/background.jpg');
						} else {
							$backgroundImage = get_theme_file_uri('/images/background2.jpg');
						}?>
					<div class="hero-section" style="background-image: url(<?php echo $backgroundImage ?>)">
						<div>
							<img class="d-inline-block d-md-none" src='<?php echo get_theme_file_uri('/images/delli_logo.png'); ?>'>
							<h2>O MELHOR P&Atilde;O <br />DA BARRA DA TIJUCA</h2>
							<a href="#delivery"><button type="button" class="btn btn-primary">PE&Ccedil;A EM CASA!</button></a>
						</div>
					</div>
				</div>
			</div>

			<div class="delli-section" style="background-image: url(<?php echo get_theme_file_uri('/images/background3.jpg') ?>)">
				<div class="row no-gutters">
					<div class="col">
						<div class="background-dark">
							<?php 
							if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<h2><img src="<?php echo get_theme_file_uri('/images/icone_trigo_esq.png'); ?>"><?php the_title(); ?><img src="<?php echo get_theme_file_uri('/images/icone_trigo_dir.png'); ?>"></h2>
							    <div class="container">
							    <p><?php the_content(); ?></p>
							    </div>
							  	<?php endwhile; endif;
							?>
						</div>
					</div>
				</div>
			
				<div class="background-yellow">
					<div class="container">
					<div class="row no-gutters">
						<div class="col-sm-12 col-md-3">
					    	<div class="columns-section">
								<img src='<?php echo get_theme_file_uri('/images/icone_pao.png'); ?>'>
									<h5>P&Atilde;ES</h5>
									<p>Pão nosso de cada dia! Doce, salgado, com grãos, caseiro ou recheado. Ninguém resiste em experimentar uma fatia de pão quentinho seja no café da manhã, no lanche da tarde ou como acompanhamento de um prato principal.</p>
					    	</div>
					  	</div>
					  	<div class="col-sm-12 col-md-3">
					    	<div class="columns-section">
								<img src='<?php echo get_theme_file_uri('/images/icone_burguer.png'); ?>'>
					      		<h5>LANCHES</h5>
					      		<p>Saia da rotina! No pão francês, na baguete simples ou outro especial combinado com nossos queijos, frios, verduras e outros recheios deliciosos! Frescos, quentes e crocantes com diferentes molhos, pastas e texturas para comer rezando.</p>
					    	</div>
					  	</div>
						<div class="col-sm-12 col-md-3">
					    	<div class="columns-section">
								<img src='<?php echo get_theme_file_uri('/images/icone_doce.png'); ?>'>
					      		<h5>DOCES</h5>
					      		<p>Delícia mesmo é comer nosso sabor de bolo favorito em boa companhia! Aipim, prestígio, brigadeiro, cenoura com calda de chocolate...hummm Vem conferi uma infinita variedade de doces, tortas, bolos e biscoitos para deixar sua vida ainda mais doce.</p>
						    </div>
					    </div>
					    <div class="col-sm-12 col-md-3">
					    	<div class="columns-section">
								<img src='<?php echo get_theme_file_uri('/images/icone_bolo.png'); ?>'>				        	
					        	<h5>EVENTOS</h5>
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
						<h2><img src='<?php echo get_theme_file_uri('/images/icone_trigo_esq.png'); ?>'>PE&Ccedil;A EM CASA<img src='<?php echo get_theme_file_uri('/images/icone_trigo_dir.png'); ?>'></h2>
					</div>
					<div class="delivery-section-body" style="background-image: url(<?php echo get_theme_file_uri('/images/delivery_background.jpg') ?>)">
						<div class="delivery-section-body--yellow">
							<div class="container">
							<form>
							  	<div class="form-row">
							    	<div class="col">
							      		<label style="display:none;">Nome:</label>
							      		<input type="text" class="form-control" placeholder="Nome:">
							    	</div>
							    	<div class="col">
							      		<label style="display:none;">Email:</label>
							      		<input type="email" class="form-control" placeholder="E-mail:">
							    	</div>
							    	<div class="col">
							      		<label style="display:none;">Telefone:</label>
							      		<input type="number" class="form-control" placeholder="Telefone:">
							    	</div>
							  	</div>
							  	<div class="form-row">
							    	<div class="col">
							      		<label style="display:none;">Seu pedido:</label>
							      		<input type="text" class="form-control" placeholder="Seu pedido:">
							    	</div>
						    	</div>
						    	<div class="form-row">
							    	<div class="col">
							      		<label style="display:none;">Observa&ccedil;&otilde;es:</label>
							      		<textarea type="text" class="form-control obs" placeholder="Observa&ccedil;&otilde;es:"></textarea>
							    	</div>
						    	</div>
						    	<button type="submit" class="btn btn-primary">ENVIAR</button>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<a class="anchor-offset" name="cardapio1"></a>
			<section id="cardapio">
				<div class="row no-gutters">
					<div class="col">
						<div class="cardapio-section" style="background-image: url(<?php echo get_theme_file_uri('/images/cardapio_background.png') ?>)">
							<div class="cardapio-section--white">
								<h2><img src='<?php echo get_theme_file_uri('/images/icone_trigo_esq.png'); ?>'>CARD&Aacute;PIO<img src='<?php echo get_theme_file_uri('/images/icone_trigo_dir.png'); ?>'></h2>
								<div class="container">
									<table>
										<tr>
											<th class="primeiro" colspan="4"> COMBOS PROMOCIONAIS </th>
										</tr>
										<tr>
											<td class="name"> COMBO 1 </td>
											<td class="description"> P&atilde;o na chapa + M&eacute;dia <br /><em>*P&atilde;es: franc&ecirc;s, baguete simples ou baguete com queijo</em> </td>
											<td class="code"> 6,50 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> COMBO 2 </td>
											<td class="description"> Salgado + Guaravita <br /><em>*Salgados: coxinha, joelho, empada, quibe ou hamb&uacute;rguer</em> </td>
											<td class="code"> 6,99 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> COMBO 3 </td>
											<td class="description"> P&atilde;o na chapa + 6 p&atilde;es de queijo +  Suco de laranja 300ml <br /><em>*P&atilde;es: franc&ecirc;s ou baguete simples</em> </td>
											<td class="code"> 10,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> COMBO 4 </td>
											<td class="description"> Queijo Quente + Suco de Laranja 300ml <br /><em>*P&atilde;es: franc&ecirc;s ou baguete simples</em> </td>
											<td class="code"> 12,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> COMBO 5 </td>
											<td class="description"> P&atilde;o Integral com queijo minas +  Suco de Laranja 300ml <br /><em>*Queijos: mu&ccedil;arela ou prato</em> </td>
											<td class="code"> 14,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> COMBO 6 </td>
											<td class="description"> Misto quente + Expresso +  Suco de Laranja 300ml <br /><em>*Queijos: muç&ccedil;arela ou prato e presunto</em> </td>
											<td class="code"> 16,90 </td>
											<td class="separator"> - </td>
										</tr>

										<tr>
											<th colspan="4"> SANDU&Iacute;CHES TRADICIONAIS </th>
										</tr>
										<tr>
											<td class="name"> Pão francês ou baguete simples com manteiga </td>
											<td class="description">  </td>
											<td class="code"> 3,00 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Baguete de queijo com manteiga </td>
											<td class="description">  </td>
											<td class="code"> 4,50 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Pão especial com manteiga </td>
											<td class="description">  </td>
											<td class="code"> 5,00 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Baguete ou francês com polenguinho </td>
											<td class="description">  </td>
											<td class="code"> 5,00 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Baguete de queijo com polenguinho </td>
											<td class="description">  </td>
											<td class="code"> 6,50 </td>
											<td class="separator"> - </td>
										</tr>

										<tr>
											<th colspan="4"> SANDU&Iacute;CHES ESPECIAIS </th>
										</tr>
										<tr>
											<td class="name"> Ovo Frito </td>
											<td class="description">  </td>
											<td class="code"> 5,00 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Pasta </td>
											<td class="description">  </td>
											<td class="code"> 7,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Mortadela Ouro </td>
											<td class="description">  </td>
											<td class="code"> 8,90 </td>
											<td class="separator"> - </td>
										</tr>										
										<tr>
											<td class="name"> Peito de Peru </td>
											<td class="description">  </td>
											<td class="code"> 12,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Presunto </td>
											<td class="description">  </td>
											<td class="code"> 8,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Mortadela ceratti </td>
											<td class="description">  </td>
											<td class="code"> 10,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Misto Simples </td>
											<td class="description"> Queijos: muçarela, minas ou prato | Frios: presunto ou mortadela </td>
											<td class="code"> 10,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Misto Especial </td>
											<td class="description"> Queijos: bola ou cheddar | Frios: presunto ou mortadela </td>
											<td class="code"> 11,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Queijo e Peito de peru </td>
											<td class="description"> Queijos: muçarela, minas ou prat </td>
											<td class="code"> 12,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Mortadela ceratti com queijo </td>
											<td class="description"> Queijos: muçarela, minas ou prato </td>
											<td class="code"> 12,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Queijo Quente </td>
											<td class="description"> Queijos: muçarela, minas ou prato </td>
											<td class="code"> 8,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Queijo quente especial </td>
											<td class="description"> Queijos: bola, brie ou cheddar </td>
											<td class="code"> 14,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<th colspan="4"> SANDU&Iacute;CHES PREMIUM </th>
										</tr>
										<tr>
											<td class="name"> Pastrami ou presunto Royale </td>
											<td class="description">  </td>
											<td class="code"> 13,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Rosbife </td>
											<td class="description">  </td>
											<td class="code"> 13,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Lombo Canadense </td>
											<td class="description">  </td>
											<td class="code"> 13,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Salame hambuegues ou italiano </td>
											<td class="description">  </td>
											<td class="code"> 14,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Presunto alemão </td>
											<td class="description">  </td>
											<td class="code"> 16,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Copa </td>
											<td class="description">  </td>
											<td class="code"> 15,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Salpição de frango </td>
											<td class="description">  </td>
											<td class="code"> 15,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Pernil </td>
											<td class="description">  </td>
											<td class="code"> 15,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Presunto de parma </td>
											<td class="description">  </td>
											<td class="code"> 20,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Rosbife </td>
											<td class="description">  </td>
											<td class="code"> 13,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Rosbife com queijo especial </td>
											<td class="description"> Queijos: muçarela, minas ou prato </td>
											<td class="code"> 14,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Rosbife com queijo </td>
											<td class="description"> Queijos: muçarela, minas ou prato </td>
											<td class="code"> 16,90 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<th colspan="4"> ADICIONAIS </th>
										</tr>
										<tr>
											<td class="name"> Ovo Frito </td>
											<td class="description">  </td>
											<td class="code"> 1,00 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Polenguinho </td>
											<td class="description">  </td>
											<td class="code"> 1,50 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> Recheios </td>
											<td class="description"> Queijos: muçarela, minas ou prato | Frios: presunto, peito de peru ou mortadela </td>
											<td class="code"> 5,00 </td>
											<td class="separator"> - </td>
										</tr>
										<tr>
											<td class="name"> P&atilde;es especiais </td>
											<td class="description"> Baguete de queijo, integral, multigraõs, Italiano, Australiano Ciabatta ou Focaccia </td>
											<td class="code"> 1,00 </td>
											<td class="separator"> - </td>
										</tr>

									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> 

			<a class="anchor-offset" name="galeria"></a>
			<div class="row no-gutters">
				<div class="col">
					<div class="galeria-section">
						<h2><img src='<?php echo get_theme_file_uri('/images/icone_trigo_esq.png'); ?>'>GALERIA<img src='<?php echo get_theme_file_uri('/images/icone_trigo_dir.png'); ?>'></h2>
						
						<div class="container">
							<div class="row no-gutters">
								<div class="col-12 col-md-3">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(1)" src='<?php echo get_theme_file_uri('/images/1.jpg'); ?>' alt="Fotos" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(2)" src='<?php echo get_theme_file_uri('/images/2.jpg'); ?>' alt="Lights" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(3)" src='<?php echo get_theme_file_uri('/images/3.jpg'); ?>' alt="Lights" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(4)" src='<?php echo get_theme_file_uri('/images/4.jpg'); ?>' alt="Lights" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(5)" src='<?php echo get_theme_file_uri('/images/5.jpg'); ?>' alt="Lights" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(6)" src='<?php echo get_theme_file_uri('/images/6.jpg'); ?>' alt="Lights" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(7)" src='<?php echo get_theme_file_uri('/images/7.jpg'); ?>' alt="Lights" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(8)" src='<?php echo get_theme_file_uri('/images/8.jpg'); ?>' alt="Lights" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(9)" src='<?php echo get_theme_file_uri('/images/9.jpg'); ?>' alt="Lights" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(10)" src='<?php echo get_theme_file_uri('/images/10.jpg'); ?>' alt="Lights" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(11)" src='<?php echo get_theme_file_uri('/images/11.jpg'); ?>' alt="Lights" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(12)" src='<?php echo get_theme_file_uri('/images/12.jpg'); ?>' alt="Lights" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(13)" src='<?php echo get_theme_file_uri('/images/13.jpg'); ?>' alt="Lights" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(14)" src='<?php echo get_theme_file_uri('/images/14.jpg'); ?>' alt="Lights" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(15)" src='<?php echo get_theme_file_uri('/images/15.jpg'); ?>' alt="Lights" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(16)" src='<?php echo get_theme_file_uri('/images/16.jpg'); ?>' alt="Lights" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(17)" src='<?php echo get_theme_file_uri('/images/17.jpg'); ?>' alt="Lights" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(18)" src='<?php echo get_theme_file_uri('/images/18.jpg'); ?>' alt="Lights" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(19)" src='<?php echo get_theme_file_uri('/images/19.jpg'); ?>' alt="Lights" style="width:100%">
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="thumbnail thumbnail--square">
										<img class="hover-shadow" onclick="openModal();currentSlide(20)" src='<?php echo get_theme_file_uri('/images/20.jpg'); ?>' alt="Lights" style="width:100%">
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
							<img src="<?php echo get_theme_file_uri('/images/1.jpg'); ?>" style="width:100%">
						</div>
					    <div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/2.jpg'); ?>" style="width:100%">
						</div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/3.jpg'); ?>" style="width:100%">
						</div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/4.jpg'); ?>" style="width:100%">
					    </div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/5.jpg'); ?>" style="width:100%">
					    </div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/6.jpg'); ?>" style="width:100%">
					    </div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/7.jpg'); ?>" style="width:100%">
					    </div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/8.jpg'); ?>" style="width:100%">
					    </div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/9.jpg'); ?>" style="width:100%">
					    </div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/10.jpg'); ?>" style="width:100%">
					    </div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/11.jpg'); ?>" style="width:100%">
					    </div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/12.jpg'); ?>" style="width:100%">
					    </div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/13.jpg'); ?>" style="width:100%">
					    </div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/14.jpg'); ?>" style="width:100%">
					    </div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/15.jpg'); ?>" style="width:100%">
					    </div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/16.jpg'); ?>" style="width:100%">
					    </div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/17.jpg'); ?>" style="width:100%">
					    </div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/18.jpg'); ?>" style="width:100%">
					    </div>
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/19.jpg'); ?>" style="width:100%">
					    </div> 
						<div class="mySlides">
							<img src="<?php echo get_theme_file_uri('/images/20.jpg'); ?>" style="width:100%">
					    </div>

					    <!-- Next/previous controls -->
					    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					    <a class="next" onclick="plusSlides(1)">&#10095;</a>
				    </div>
				</div>
			</div>

			<script>
				// Open the Modal
				function openModal() {
				  var element = document.getElementById('navigation-bar');
				  document.getElementById('myModal').style.display = "block";
				  element.classList.toggle("fixed-top");
				}

				// Close the Modal
				function closeModal() {
				  	document.getElementById('myModal').style.display = "none";
					document.getElementById('navigation-bar').classList.toggle("fixed-top");
				}

				var slideIndex = 1;
				showSlides(slideIndex);

				// Next/previous controls
				function plusSlides(n) {
				  showSlides(slideIndex += n);
				}

				// Thumbnail image controls
				function currentSlide(n) {
				  showSlides(slideIndex = n);
				}

				function showSlides(n) {
				  var i;
				  var slides = document.getElementsByClassName("mySlides");
				  var dots = document.getElementsByClassName("demo");
				  var captionText = document.getElementById("caption");
				  if (n > slides.length) {slideIndex = 1}
				  if (n < 1) {slideIndex = slides.length}
				  for (i = 0; i < slides.length; i++) {
				    slides[i].style.display = "none";
				  }
				  for (i = 0; i < dots.length; i++) {
				    dots[i].className = dots[i].className.replace(" active", "");
				  }
				  slides[slideIndex-1].style.display = "block";
				}
			</script>

			<a class="anchor-offset" name="contato"></a>
			<div class="row no-gutters">
				<div class="col-sm-12">
					<div class="contato-section" style="background-image: url(<?php echo get_theme_file_uri('/images/background4.jpg') ?>)">
						<div class="contato-section--black">
							<h2><img src='<?php echo get_theme_file_uri('/images/icone_trigo_esq.png'); ?>'>CONTATO<img src='<?php echo get_theme_file_uri('/images/icone_trigo_dir.png'); ?>'></h2>
							<div class="contato-section--margins">
								<p><img src='<?php echo get_theme_file_uri('/images/icone_mapa.png'); ?>'>AV Rodolfo Amoedo 455 Barra da Tijuca, Rio de Janeiro</p>
								<p><img src='<?php echo get_theme_file_uri('/images/icone_whatsapp.png'); ?>'>(21) 2495.6810</p>
								<p><img src='<?php echo get_theme_file_uri('/images/icone_email.png'); ?>'>e-mail: delliportal@delliportal.com.br</p>
								<p><img src='<?php echo get_theme_file_uri('/images/icone_instagram.png'); ?>'>instagram.com/delliportal</p>
								<p><img src='<?php echo get_theme_file_uri('/images/icone_facebook.png'); ?>'>facebook.com/delliportal</p>
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
