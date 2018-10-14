<?php

/* 
* --------------------------------------------------------------------------
* METAS
* --------------------------------------------------------------------------
*
* En "defecto" se definen los valores por defecto para cada metaetiqueta. 
* 
* En "secciones" se definen los valores pora cada meta por sección. Estos
* pueden sobreescribirse desde la configuración de cada página.
*
* En "plantilla" se define la base para todas la metas en donde {valor} se 
* reemplaza por el valor que se le asigna a las metas en "secciones".
*
*/

$empresa = Config::obtener('empresa');

return array(

	'defecto' => array(
		'es' => array(
			'titulo' => '',
			'descripcion' => 'Telecomunicaciones y automatización de procesos.',
			'img' => BASE_URL.'images/metas/600-315.jpg',
		)
	),

	'plantilla' => array(
		'titulo' => '{valor} | '. $empresa->nombre,
		'descripcion' => '{valor}',
		'img' => '{valor}',
	),

	'secciones' => array(
		'home' => array(
			'es' => array(
				'titulo' => '',
				'descripcion' => 'Organización dedicada a brindar servicios en el ámbito de las telecomunicaciones y de la automatización y control de procesos.',
				'img' => '',
			),
			'en' => array(
				'titulo' => '',
				'descripcion' => '',
				'img' => '',
			),
		),
		'quienes-somos' => array(
			'es' => array(
				'titulo' => 'Quiénes Somos',
				'descripcion' => 'Nuestra experiencia y know how en el diseño e implementación de redes de comunicación nos posiciona como una empresa líder en el ámbito regional.',
				'img' => '',
			),
			'en' => array(
				'titulo' => 'About Us',
				'descripcion' => '',
				'img' => '',
			),
		),
		'telecomunicaciones' => array(
			'es' => array(
				'titulo' => 'Telecomunicaciones',
				'descripcion' => 'Empresas líderes de los rubros industrial, minero y petrolero ya cuentan con nuestros servicios y son quienes garantizan nuestra labor.',
				'img' => '',
			),
			'en' => array(
				'titulo' => 'Telecomunications',
				'descripcion' => '',
				'img' => '',
			),
		),
		'automatizacion' => array(
			'es' => array(
				'titulo' => 'Automatización',
				'descripcion' => 'Estamos preparados para brindar respuestas efectivas a las necesidades de innovación de las empresas de la región.',
				'img' => '',
			),
			'en' => array(
				'titulo' => 'Automation',
				'descripcion' => '',
				'img' => '',
			),
		),
		'novedades' => array(
			'es' => array(
				'titulo' => 'Novedades',
				'descripcion' => 'Lea y comparta las novedades de nuestra empresa.',
				'img' => '',
			),
			'en' => array(
				'titulo' => 'News',
				'descripcion' => '',
				'img' => '',
			),
		),
		'contacto' => array(
			'es' => array(
				'titulo' => 'Contacto',
				'descripcion' => 'Comuníquese con nosotros!',
				'img' => '',
			),
			'en' => array(
				'titulo' => 'Contact',
				'descripcion' => '',
				'img' => '',
			),
		),


		
		'acordeon' => array(
			'es' => array(
				'titulo' => 'Acordeón',
				'descripcion' => '',
				'img' => '',
			),
		),
		'slider' => array(
			'es' => array(
				'titulo' => 'Slider',
				'descripcion' => '',
				'img' => '',
			),
		),
	)

);