<?php
  require_once('api/inicio.php');

 /// Configuración de la página ///
  define('SECCION', 'home');
// Fin configuración de la página //

Plugins::activar('owlCarousel');
include('header.php');

$novedades = Novedades::obtener('limit',3);
?>

<section class="slider-principal">
	<ul class="owl-carousel">
		<li class="slide slide-1">
			<div class="grey-layer"></div>
			<h2><?= __('slider-principal tit1'); ?></h2>
			<a href="<?=url('telecomunicaciones')?>" class="boton"><?= __('slider-principal mas-info'); ?></a>
		</li>
		<li class="slide slide-2">
			<div class="grey-layer"></div>
			<h2><?= __('slider-principal tit2'); ?></h2>
			<a href="<?=url('automatizacion')?>" class="boton"><?= __('slider-principal mas-info'); ?></a>
		</li>
		<li class="slide slide-3">
			<div class="grey-layer"></div>
			<h2><?= __('slider-principal tit3'); ?></h2>
			<a href="<?=url('quienes-somos')?>" class="boton"><?= __('slider-principal mas-info'); ?></a>
		</li>
	</ul>
</section>

<section class="presentacion">
	<h2><?= __('home presentacion'); ?></h2>
</section>

<?php include('proy-mediana.php'); ?>
<?php include('proy-grande.php'); ?>

<?
if(!empty($novedades)){
?>
<section class="novedades-home">
	<div class="slider-novedades">
		<ul class="owl-carousel">
			<?
      foreach($novedades as $novedad){
      ?>
      <li>
				<?
        if($novedad->foto_id>0){
          echo '<img src="'.$novedad->foto->src.'" alt="'.$novedad->titulo.'">';
        }
        ?>
				<div class="texto">
					<div class="tit"><?=$novedad->titulo?></div>
					<div class="descripcion"><?=$novedad->cuerpo?></div>
				</div>
			</li>
      <?
      }
      ?>
		</ul>
	</div>
</section>
<?
}
?>

<?php include('marcas.php'); ?>
<?php include('mapa.php'); ?>
<?php include('footer.php'); ?>
