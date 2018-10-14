	
	</main>
	
	<footer>
		<div class="pie">
			<div class="cont-1170">
				<img src="images/footer/solutions-rd.png" alt="Solutions RD">
				<div class="cont-datos">
					<div class="datos">
						<h4>Perú</h4>
						<div class="direccion"><i class="icon-location"></i>C/ San Luis Gonzaga 752 - Piso 4<br><span>Zárate - Lima</span>
						</div>
						<a href="tel:5116825678" class="tel"><i class="icon-phone"></i>+511 682 5678</a>
					</div>
					<div class="datos">
						<h4>Argentina</h4>
						<div class="direccion"><i class="icon-location"></i>C/ Sarmiento 567 - Of. 212<br><span>CABA</span>
						</div>
						<a href="tel:549112184959" class="tel"><i class="icon-phone"></i>+54 9 11 5218 4959</a>
					</div>
					<div class="datos">
						<h4>Chile</h4>
						<div class="direccion"><i class="icon-location"></i>Av. Apoquindo 6410 - Of. 605<br><span>Las Condes - Santiago</span>
						</div>
						<a href="tel:56228409500" class="tel"><i class="icon-phone"></i>+562 2840 9500</a>
					</div>
				</div>
				<div class="redes">
					<a class="facebook icon-facebook" href="<?=Config::obtener('empresa')->redes['facebook']?>" target="_blank"></a>
					<a class="mail icon-mail" href="mailto:<?=Config::obtener('empresa')->email?>" target="_blank"></a>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
	    		<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="legales">
							<small>© <?=date('Y')?> RD SOLUTIONS | Todos los derechos reservados</small>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 synapsis">
						<a class="synapsis" href="http://synapsis.com.ar/" target="_blank">Diseño Web: SYNAPSIS.com.ar</a>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha384-rY/jv8mMhqDabXSo+UCggqKtdmBfd3qC2/KvyTDNQ6PcUJXaxK1tMepoQda4g5vB" crossorigin="anonymous"></script>
	<!-- <script src="js/bootstrap/bootstrap.min.js"></script> -->

	<?php
		Plugins::cargar();
		$main_js = $minified->merge(BASE_PATH.'js/main.min.js', 'js', array('js/main.js'));
		echo '<script src="'.str_replace(BASE_PATH, '', $main_js).'?v='.filemtime($main_js) .'"></script>'. PHP_EOL;
	?>
</body>
</html>