<?php
  require_once('api/inicio.php');

	// Configuración de la página ///
	  define('SECCION', 'contacto');
	// Fin configuración de la página //
	include('header.php');
	include('portada.php');
?>


<section class="contacto bajada">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2 id="enviado"><?= __('contacto h2'); ?></h2>				
			</div>			

			<div class="col-12 col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">		
				<?php include(API_PATH.'forms/contacto.php'); ?>
				<?= $form_contacto->mensaje_estado ?>
				<?php if ($form_contacto->estado != 'ok') { ?>					
				<form method="post" action="<?=url('contacto')?>#enviado" >
								
					<!-- Por un tema de accesibilidad, todos los inputs deben tener label, pero si los queremos ocultos le ponemos la clase sr-only -->
					<label for="nombre"><?= __('contacto nombre'); ?></label>
					<input type="text" name="nombre" id="nombre" value="<?= isset($_POST['nombre']) ? $_POST['nombre'] : ''?>">

					<label for="empresa"><?= __('contacto empresa'); ?></label>
					<input type="text" name="empresa" id="empresa" value="<?= isset($_POST['empresa']) ? $_POST['empresa'] : ''?>">
				
					<label for="email"><?= __('contacto email'); ?></label>
					<input type="email" name="email" id="email" value="<?= isset($_POST['email']) ? $_POST['email'] : ''?>">

					<label for="tel"><?= __('contacto telefono'); ?></label>
					<input type="tel" name="tel" id="tel" value="<?= isset($_POST['tel']) ? $_POST['tel'] : ''?>">

					
					<label for="consulta"><?= __('contacto consulta'); ?></label>
					<textarea name="consulta"><?= isset($_POST['consulta']) ? $_POST['consulta'] : '' ?></textarea>

					<!-- TODO: Agregar credenciales en api/config/forms -->
					<?= isset($form_contacto->campos['captcha']) ? $form_contacto->campos['captcha']->html('light', 'normal') : ''?>

					<button type="submit" name="enviar_contacto" value="Enviar">Enviar</button>

				</form>    
				<?php } ?>			
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>