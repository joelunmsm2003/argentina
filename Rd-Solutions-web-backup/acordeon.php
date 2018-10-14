<?php

  require_once('api/inicio.php');


  //////////////////////////////////
 /// Configuración de la página ///
//////////////////////////////////

  define('SECCION', 'acordeon');

// Fin configuración de la página //

  include('header.php');

  Plugins::activar('acordeon');
?>

<article>
	<div class="container">
		<h2>Well done! Llegaste al acordeón. Developed by Fran Lafro (ex Afro)</h2>
	</div>
</article>

<section class="faq">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1">
				<ul class="lista-faq">
				<?php
					$faq = array(
						array(
							'pregunta' 	=>	'¿CUÁL ES LA FECHA DE VENCIMIENTO DE ESTERILIZACIÓN PARA UN PRODUCTO MÉDICO?',
							'respuesta' =>	'No existe tal cosa. La fecha de expiración que figura en el envase de un producto médico no corresponde a un eventual “vencimiento” de su esterilización, sino que atañe a la caducidad de dicho dispositivo. Si el empaque se conserva en condiciones inalteradas, la esterilidad del producto en su interior no se ve modificada.',
						),
						array(
							'pregunta' 	=>	'REQUISITOS PARA LA VALIDACION DE UNA CARGA.',
							'respuesta' =>	'Investigaciones iniciales sobre compatibilidad del producto y envase. Estudios previos sobre otros productos similares. Disponibilidad de cargas tipo representativas. Información bibliográfica.'
						),
						array(
							'pregunta' 	=>	'CONDICIONES DE LIMPIEZA DE MATERIALES INGRESANTES A PLANTA',
							'respuesta' =>	'Los materiales a ingresar a Planta deben encontrarse íntegros, limpios y secos. Asisthos SRL no asume responsabilidades de Inspección de Recepción con respecto a estos requisitos.'
						), 
					);
				
					foreach ($faq as $pregunta) { ?>				
						<li>
							<p class="js-pregunta"><?=$pregunta['pregunta']?><i class="flecha">^</i></p>
							<p class="js-respuesta"><?=$pregunta['respuesta']?></p>
						</li>
				<?php }	?>
				</ul>
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>