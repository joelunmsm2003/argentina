<?php

include_once('core/Formulario.php');

$form_contacto = new Formulario(
	array(
		'destinatarios' => array(
			// Config::obtener('empresa')->email,
			'soporte@synapsis.com.ar',
		),
		'asunto' 	=> 'Contacto - '.Config::obtener('empresa')->nombre,
		'remitente' => array(
			'nombre' => 'Web '.Config::obtener('empresa')->nombre,
			'email' => 'web@solutions-rd.com.ar' // Email ficticio 
		),
		'responder_a' => array(
			'nombre' => 'nombre',
			'email' => 'email'
		),
		'opciones' => array(
			'debug' => false,
			'guardar_contacto' => false,
			'guardar_form' => false
		)
	)
);

$form_contacto->agregarCampos(
	array(

		array(
			'name' 		=> 'nombre',
			'label' 	=> 'Apellido y Nombre',
			'tipo' 		=> 'text',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'empresa',
			'label' 	=> 'Empresa',
			'tipo' 		=> 'text',
			// 'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'email',
			'label' 	=> 'Email',
			'tipo' 		=> 'email',
			'validar' 	=> array('formato', 'requerido'),
		),

		array(
			'name' 		=> 'tel',
			'label' 	=> 'Teléfono',
			'tipo' 		=> 'tel',
			// 'validar' 	=> array('requerido'),
		),		

		array(
			'name' 		=> 'consulta',
			'label' 	=> 'Consulta',
			'tipo' 		=> 'textarea',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'captcha',
			'label' 	=> 'Captcha',
			'tipo' 		=> 'Captcha',
			 'validar' 	=> array('requerido'),
		),

	)
);

$form_contacto->agregarMensajeEstado(
	array (
		'incompleto'       =>  __('msj-incompleto'),
		'error'            =>  __('msj-error'),
		'mail_invalido'    =>  __('msj-mail_invalido'),
		'captcha_invalido' =>  __('msj-captcha_invalido'),
		'ok'               =>  __('msj-ok'),
	)
);

if( isset($_POST['enviar_contacto']) ){
	$form_contacto->enviar();
}
