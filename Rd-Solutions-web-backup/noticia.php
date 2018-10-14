<?php

  require_once('api/inicio.php');


  //////////////////////////////////
 /// Configuración de la página ///
//////////////////////////////////

	define('SECCION', 'noticia');

	if(! isset($_GET['id'])){
		error_404();
	}else{

		if(! $novedad = Novedad::obtener(array_merge(
			array('id' => $_GET['id']),
			isset($_GET['vp']) ?  array('vp' => true) : array()
		))){
			header('location:'.url('pagina-no-disponible'));
			exit;
		}
	}

 	Url::cargarDatosUrlSeccionActual($noticia);

	Metas::construir(SECCION, array(
		'titulo'      => $noticia->meta_titulo,
		'descripcion' => $noticia->meta_descripcion,
		'img'         => $noticia->foto ? $noticia->foto->src : '',
	));

/// Fin Configuración de la página ///

  include('header.php');

?>

<article>
	
	<p>URL home: <?= '<a href="'. url('home'). '">'. url('home'). '</a>' ?></p>
	<p>URL noticia: <?= '<a href="'. url('noticia', array('id'=>8, 'nombre'=>'prueba')). '">'. url('noticia', array('id'=> $noticia->id, 'nombre'=> $noticia->nombre)) . '</a>' ?></p>
	<p>URL noticias 2017: <?= '<a href="'. url('noticias-anio', array('anio' => 2017)). '">'. url('noticias-anio', array('anio' => 2017)) . '</a>' ?></p>
  
</article>

<?php include('footer.php'); ?>