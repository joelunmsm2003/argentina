<section class="proyectos">
	<div class="grande">
		<div class="cont-1170">
			<div class="col-izq">
				<div class="numero"><?= __('home proyectos gran-num') ?></div>
				<p class="subtit"><?= __('home proyectos gran-texto') ?></p>
			</div>
			<div class="cont-modulo slider-proyectos">
				<ul>
					<li class="modulo-proy">
						<img src="images/proyectos/grande-1.jpg" alt="{{ Programar Alt }}">
						<div class="texto">
							<p>Instalación de NodosB y BTS's.</p>
							<p><span>Cliente: </span>NOKIA Argentina</p>
						</div>
					</li>
					<li class="modulo-proy">
						<img src="images/proyectos/grande-2.jpg" alt="">
						<div class="texto">
							<p>Instalaciones Especiales: Sites INDOOR & TRUCKS.</p>
							<p><span>Cliente: </span>Nokia Perú</p>
						</div>
					</li>
					<li class="modulo-proy">
						<img src="images/proyectos/grande-3.jpg" alt="">
						<div class="texto">
							<p>Instalación de equipos de MW.</p>
							<p><span>Cliente: </span>AMX Perú</p>
						</div>
					</li>
				</ul>
			</div>
			<?php if (SECCION  == 'home') {?>
				<a href="<?=url('telecomunicaciones')?>" class="boton">
					<?= __('home proyectos ver-mas') ?> <i class="icon-right-big"></i>
				</a>
			<?php } ?>
		</div>
	</div>
</section>