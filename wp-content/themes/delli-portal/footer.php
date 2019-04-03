			<footer>
				<div class="row no-gutters">
					<div class="col col-md-12">
						<ul>
							<li><a href="#home">Delli Portal</a></li>
							<li><a href="#delivery">Pe&ccedil;a em casa</a></li>
							<li><a href="#cardapio">Card&aacute;pio</a></li>
							<li><a href="#mapa">Onde estamos</a></li>
							<li><a href="#contato">Contato</a></li>
						</ul>
					</div>
				</div>

				<div class="row no-gutters">
					<div class="col">
						<div class="footer-logo">
							<img src='<?php echo get_theme_file_uri('/images/logo_white.png'); ?>' alt="Delli Logo">
						</div>
					</div>
				</div>
				
				<div class="row no-gutters">
					<div class="col">
						<div class="footer-small">
							<small>by <a href="https://www.thudiumdesign.com" target="_blank">thudium design</a> <?php echo date("Y") ?></small>
						</div>
					</div>
				</div>
			</footer>
		    <?php wp_footer(); ?>
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
	</body>
</html>