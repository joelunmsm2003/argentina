<?php
  require_once('api/inicio.php');

	// Configuración de la página ///
	  define('SECCION', 'quienes-somos');
	// Fin configuración de la página //
	Plugins::activar('owlCarousel');
	
	include('header.php');?>


<?php include('portada.php'); ?>

<section class="quienes bajada">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2><?= __('quienes-somos h2'); ?></h2>
			</div>
			<div class="col-12 col-sm-12 col-md-4 col-lg-3">
				<p class="destacado"><?= __('quienes-somos destacado'); ?></p>
			</div>
			<div class="col-12 col-sm-12 col-md-8 col-lg-9">
				<?= __('quienes-somos texto'); ?>
			</div>
		</div>
	</div>
</section>

<?php include('marcas.php'); ?>
<?php include('mapa.php'); ?>
<?php include('footer.php'); ?>
