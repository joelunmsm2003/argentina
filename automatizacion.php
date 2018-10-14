<?php
  require_once('api/inicio.php');

	// Configuración de la página ///
	  define('SECCION', 'automatizacion');
	// Fin configuración de la página //
	Plugins::activar('owlCarousel');	
	include('header.php');?>


<?php include('portada.php'); ?>

<section class="quienes bajada">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2><?= __('automatizacion h2'); ?></h2>
			</div>
			<div class="col-12 col-sm-12 col-md-4 col-lg-3">
				<p class="destacado"><?= __('automatizacion destacado'); ?></p>
			</div>
			<div class="col-12 col-sm-12 col-md-8 col-lg-9">
				<?= __('automatizacion texto'); ?>
			</div>
		</div>
	</div>
</section>

<section class="servicios">
	<div class="container">
		<div class="row">
			<div class="col-12 col-xs-12 col-sm-12 col-md-3 "><h3><?= __('automatizacion servicios-tit'); ?></h3></div>
			<div class="col-12 col-xs-12 col-sm-12 col-md-8 ">
				<ul class="listado-servicios tick-list">
					<?= __('automatizacion servicios'); ?> </div>
				</ul>
		</div>
	</div>
</section>

<?php include('proy-mediana.php'); ?>

<!-- <section class="otros-proyectos">
	<div class="container">
		<div class="row">
			<div class="col-12 offset-xs-0 col-md-8 offset-md-4">
				<h3><?= __('automatizacion proyectos-tit'); ?></h3>
				<ul class="tick-list listado-proy">
				<?= __('automatizacion proyectos-list'); ?>
				</ul>
			</div>
		</div>
	</div>
</section> -->

<?php include('footer.php'); ?>