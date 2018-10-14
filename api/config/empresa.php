<?php

/*
* ---------------------------------------------------------------------------
* EMPRESA
* ---------------------------------------------------------------------------
*
* Acá ponemos todos los datos de contacto de la empresa así los podemos
* reutilizar en todo el sitio. Podés guardar cualquier dato no solo los que
* están definidos ahora.

Config::obtener('empresa')->fijo_enlace
* 
*/

return array(
	
	'nombre' 	=> 'Solutions RD',
	'redes' 	=> array(
			'facebook' => 'https://www.facebook.com/RD-Telecom-SAC-934699539892117/',
	),
	'telefono' 	=> '',
	'email' 	=> ocultarEmail( 'info@solutions-rd.com.ar' ),
	'direccion' => '',
	'latitud' 	=> '',
	'longitud' 	=> '',

);