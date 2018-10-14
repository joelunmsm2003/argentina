<?php

/**
* Archivo de idioma
*
* Las traducciones se agregan de a una con el formato 'clave' => 'valor'.
* Las claves no se pueden repetir asi que conviene ponerles un prefijo.
* Además no puede haber arrays dentro de este array.
* 
* @example
*  // HOME
* 'home-titulo' => 'Título de la home',
* 'home-bajada' => 'Lorem ipsum	dolor sit amet...',
* 
* // CONTACTO
* 'contacto-titulo' => 'Contáctenos',
* ...
*
* Estas traducciones se pueden acceder desde el sitio usando la función __(), el 
* alias del helper "Traduccion".
*
* @example
* echo __('msj-incompleto'); // Todos los campos con asterisco (*) son requeridos.
* 
* @example 
* Traducción:
* 'nav' => array(
*   'home' => 'Home'.
*   'contacto' => 'Contacto'.
* );
*
* Obtener traducción:
* __('nav contacto');
*
*
*/

return array(

	'nav' => array(
		'home' 					=> 'Home',
		'quienes' 				=> 'Quiénes Somos',
		'telecomunicaciones' 	=> 'Telecomunicaciones',
		'automatizacion' 		=> 'Automatización',
		'contacto' 				=> 'Contacto',
		'novedades' 			=> 'Novedades',
	),
	'slider-principal' => array(
		'tit1' => 'CONSTRUCCIÓN Y MANTENIMIENTO DE INFRAESTRUCTURAS DE TELECOMUNICACIONES',
		'tit2' => 'Soluciones en Automatización y Control de Procesos',
		'tit3' => 'Experiencia, calidad, innovación y know how a su servicio',
		'mas-info' => 'Más información',
	),
	'home' => array(
		'presentacion' => 'Somos una organización peruana con más de quince años de experiencia, dedicada a brindar servicios en el ámbito de las <strong>Telecomunicaciones</strong> y de la <strong>Automatización y Control de Procesos.</strong>',
		'proyectos' => array(
			'mediana-num' => '78',
			'mediana-texto' => 'proyectos de mediana envergadura en <strong>automatización</strong>',
			'gran-num' => '130',
			'gran-texto' => 'proyectos de gran/mediana envergadura en <strong>comunicaciones</strong>',
			'ver-mas' => 'Ver más',
		),
	),
	'quienes-somos' => array(
		'portada-quienes' 	=> 'Quiénes Somos',
		'h2' 				=> 'Su socio estratégico en automatización y telecomunicaciones.',
		'destacado' 		=> 'Nuestra experiencia y know how en el diseño e implementación de redes de comunicación nos posiciona como una empresa líder en el ámbito regional. ',
		'texto' 			=> '<p>Somos una empresa con más de 15 años de experiencia en el ámbito de las telecomunicaciones y la automatización. Nuestro equipo de trabajo está conformado por destacados profesionales de los campos de la ingeniería, gerencia de proyectos y construcción. Ellos son quienes llevan adelante los proyectos que desarrollamos en las áreas de la industria, la minería y el petróleo acompañando a las principales empresas de cada rubro.</p>
			<p>Nuestra misión es brindar el respaldo y la solidez necesarios a nuestros clientes en proyectos de telecomunicaciones de gran envergadura y en desarrollos específicos de usuarios particulares.</p>'
	),
	'telecomunicaciones' => array(
		'portada' 		=> 'Telecomunicaciones',
		'h2' 			=> 'Lider regional en telecomunicaciones.',
		'destacado' 	=> 'Empresas líderes de los rubros industrial, minero y petrolero ya cuentan con nuestros servicios y son quienes garantizan nuestra labor.',
		'texto' 		=> '<p>La clave de nuestra eficacia radica en nuestro compromiso con el cumplimiento de los estándares de calidad, el respeto por las normativas de seguridad y la impecable ejecución de cada uno de los proyectos en tiempo y forma.</p>
			<p>Durante los últimos dos años nuestros técnicos e ingenieros han enfrentado y superado los desafíos presentados por 130 proyectos de gran y mediana envergadura. Los resultados de ese trabajo de interacción directa con los variados equipos y software propios de la industria son la garantía de nuestra excelencia.</p>',
		'servicios-tit' => 'Nuestros<br>servicios',
		'servicios' 	=> '<li>Instalación de equipos de bases celulares (Nodos B).</li>
			<li>Instalación y puesta ON AIR Radio enlaces.</li>
			<li>Bajas satelitales.</li>
			<li>Migraciones MW.</li>
			<li>Implementación redes WIMAX, WIFI.</li>
			<li>Planificaciones de diseño, construcción y mantenimiento de redes celulares y fijas.</li>
			<li>Planificaciones de diseño, construcción y mantenimiento de redes troncales de FO.</li>
			<li>Implementación redes de FO.</li>
			<li>Metrados, costos y presupuestos civiles.</li>
			<li>Montaje y desmontaje de torres.</li>
			<li>Diseño de Planos de instalación equipos y construcción civil.</li>
			<li>Supervisión y Gerencia de Proyectos de Construcción e implementación.</li>
			<li>Obras civiles de Bases Celulares.</li>
			<li>Construcción de Obras Civiles en General.</li>
			<li>Implementación de Small Cell.</li>
			<li>Drive Test (indoor / outdoor).</li>
			<li>Post Procesamiento de Logs (Drive Test).</li>
			<li>Diseño, planificación y optimización de la red móvil.</li>
			<li>Diseño e implementación de soluciones DAS.</li>
			<li>Metodología en Dirección de Proyectos bajo los estándares del PMI.</li>',
		'proyectos-tit' => 'Otros Proyectos',
		'proyectos-list' => '<li>Realización de Bajas Satélites y Rehomings</li>
			<li>Elaboración de Site Surveys TSS</li>
			<li>Migración de equipos Siemens a Nokia – Proyecto Modernización Nokia 2014 en Lima TEM</li>
			<li>Instalación de equipos de rectificadores de la marca Huawei y Emerson</li>
			<li>Instalación de estaciones completas – RO2014 Claro.</li>
			<li>Instalación de Wimax con equipos Alvarion</li>
			<li>Instalación de Wimax con equipos Alvarion</li>
			<li>Implementación de Small Cell Proyecto Nokia Telefónica</li>
			<li>Drive Test Proyecto Nokia / Personal</li>
			<li>Post-procesamiento de logs Proyecto Nokia / Personal</li>
			<li>Implementación DAS (indoor) Proyecto Claro</li>',

	),
	'automatizacion' => array(
		'portada' 		=> 'Automatización',
		'h2' 			=> 'El camino hace el futuro.',
		'destacado' 	=> 'Estamos preparados para brindar respuestas efectivas a las necesidades de innovación de las empresas de la región.',
		'texto' 		=> '<p>Un equipo técnico especializado trabaja junto a nuestros clientes en la identificación de las oportunidades de automatización  y el diseño de soluciones para poder luego encargarnos de la puesta en marcha y el mantenimiento del proyecto. Queremos acompañar a nuestros clientes en su camino hacia el futuro aplicando los protocolos y normativas vigentes con creatividad y eficiencia.</p>
			<p>Durante los últimos dos años nuestros técnicos e ingenieros han enfrentado y superado los desafíos presentados por 78 proyectos de mediana envergadura. Los resultados de ese trabajo de interacción directa con los variados equipos y software propios de la industria son la garantía de nuestra excelencia.</p>',
		'servicios-tit' => 'Nuestros<br>servicios',
		'servicios' 	=> '<li>Desarrollo de ingeniería básica o de detalle para sistemas de control industrial basado en equipos Schneider, ABB, Allen Bradley, Siemens, etc.</li>
			<li>Desarrollo e implementación de sistemas de control Batch.</li>
			<li>Desarrollo de programas de control para PLC.</li>
			<li>Desarrollo e implementación de sistemas SCADA y Telemetría.</li>
			<li>Desarrollo y optimización de lazos de control PID.</li>
			<li>Comisionamiento y puesta en marcha.</li>
			<li>Mantenimiento proactivo y correctivo de los sistemas de control industrial.</li>
			<li>Asesoramiento técnico  en  proyectos de construcción, instrumentación, eléctrica y comunicación.</li>
			<li>Suministro e  instalaciones de tableros y gabinetes (control y fuerza).</li>
			<li>Montaje e instalación  de bandejas porta cables y tuberías eléctricas, cableado estructurado y fibra óptica.</li>
			<li>Fibra óptica (Tendido, empalme por fusión, pruebas y mediciones, reparación, mantenimiento).</li>
			<li>Suministro e instalación de tableros  de comunicaciones.</li>
			<li>Montaje e instalación de motores eléctricos, trifásicos, monofásicos, fuerza y control.</li>
			<li>Implementación del  sistema  de detección contra incendio.</li>
			<li>Implementación del  sistema de control  de  acceso.</li>
			<li>Implementación de Circuitos Cerrados de Televisión.</li>
			<li>Planificaciones de diseño, construcción y mantenimiento de redes de FO.</li>
			<li>Implementación redes de FO.</li>',
	),
	'contacto' => array(
		'portada' 	=> 'Contacto',
		'h2' 		=> 'Comuníquese con nosotros',
		'nombre' 	=> 'Nombre y Apellido*',
		'empresa' 	=> 'Empresa',
		'email' 	=> 'Email*',
		'telefono' 	=> 'Teléfono',
		'consulta' 	=> 'Consulta*',
		'enviar' 	=> 'Enviar',
	),

	'novedades' => array(
		'h1' => 'Novedades',
	),
								
	'msj-incompleto'       => 'Todos los campos con asterisco (*) son requeridos.',
	'msj-error'            => 'El email ingresado es inválido. Por favor, vuelva a ingresarlo.',
	'msj-mail_invalido'    => 'El captcha no fue completado correctamente. Vuelva a intentarlo',
	'msj-captcha_invalido' => 'Todos los campos con asterisco (*) son requeridos.',
	'msj-ok'               => 'Su mensaje ha sido enviado, muchas gracias por comunicarse con nosotros.<br /> breve nos pondremos en contacto con Ud.',
);

