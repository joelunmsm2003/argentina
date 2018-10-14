<?php
require_once('api/inicio.php');

// Configuración de la página ///
define('SECCION', 'novedades');
// Fin configuración de la página //
include('header.php');

$novedades = Novedades::obtener();
?>
<section class="novedades">
	<div class="container">
		<div class="row">
			<div class="col-12 offset-md-0 col-md-12 col-lg-10 offset-lg-1 text-center">
				<h1>Novedades</h1>

				<?php foreach ($novedades as $novedad) { ?>
				<div class="modulo-novedades">
          <?
          if($novedad->foto_id>0){
            echo '<img src="'.$novedad->foto->src.'" alt="'.$novedad->titulo.'">';
          }
          ?>
					<div class="cont-texto">
						<div class="tit"><?=$novedad->titulo?></div>
						<div class="descripcion"><?=$novedad->cuerpo?></div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>


<?php include('footer.php'); ?>
