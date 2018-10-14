<section class="proyectos">
	<div class="mediana">
		<div class="cont-1170">
			<div class="col-izq">
				<div class="numero"><?= __('home proyectos mediana-num') ?></div>
				<p class="subtit"><?= __('home proyectos mediana-texto') ?></p>
			</div>
			<div class="cont-modulo slider-proyectos">
				<ul>
					<li class="modulo-proy">
						<img src="images/proyectos/mediana-1.jpg" alt="">
						<div class="texto">
							<p>Upgrade Cuajone: Desarrollo Ingeniería Básica y Detalle de Molienda, Remolienda, Flotación y Relaves.</p>
							<p><span>Cliente: </span>ABB S.A.</p>
						</div>
					</li>
					<li class="modulo-proy">
						<img src="images/proyectos/mediana-2.jpg" alt="">
						<div class="texto">
							<p>Upgrade SPCC: Desarrollo de la programación, puesta en marcha y babysitting.</p>
							<p><span>Cliente: </span>ABB S.A.</p>
						</div>
					</li>
					<li class="modulo-proy">
						<img src="images/proyectos/mediana-3.jpg" alt="">
						<div class="texto">
							<p>Mantenimiento OPPFilm: Levantamiento y mejoras de parámetros de variador faja principal MX 0001-TD.</p>
							<p><span>Cliente: </span>OPPFilm S.A.</p>
						</div>
					</li>
				</ul>
			</div>					

			<?php if (SECCION  == 'home') {?>
				<a href="<?=url('automatizacion')?>" class="boton"><?= __('home proyectos ver-mas') ?> <i class="icon-right-big"></i></a>
			<?php } ?>
		</div>
	</div>
</section>