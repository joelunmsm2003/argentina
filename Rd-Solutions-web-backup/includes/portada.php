<style>
	<?php 
		$imagen = 'images/portadas/'.SECCION.'.jpg';
		$imagen_mobile = 'images/portadas/'.SECCION.'-mobile.jpg';
	?>
	.portada-interna {
		background-image: url(<?= $imagen ?>?v=<?=filemtime(BASE_PATH.$main_css)?>);
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center center
	}
	@media (max-width: 550px) {
		.portada-interna {
			background-image: url(<?= $imagen_mobile ?>?v=<?=filemtime(BASE_PATH.$imagen_mobile)?>);
		}
	}
</style>
<section class="portada-interna">
		<h1>
		<?php
			switch (SECCION) {
				case 'quienes-somos':
					echo __('quienes-somos portada-quienes');
					break;
				case 'telecomunicaciones':
					echo __('telecomunicaciones portada');
					break;
				case 'automatizacion':
					echo __('automatizacion portada');
					break;
				case 'contacto':
					echo __('contacto portada');
					break;
				default:
					echo 'Solutions RD';
					break;
			}
		?>
		</h1>
</section>