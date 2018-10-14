<?php

class Novedades_model extends MY_Model {

	var $fields = array(
		'activa',
		'titulo_es',
		'titulo_en',
		'cuerpo_es',
		'cuerpo_en',
		'foto_id',
		'uri',
		'orden'
	);

	var $table = 'novedades';

	function __construct(){
        parent::__construct();
    }

    public function save_item($o,$isUpdate){

		// El título es obligatorio)
		if(isset($o->activa) ? $o->activa : false){
	    	if(! (isset($o->titulo_es) ? $o->titulo_es : false)){
				throw new Exception('El título es obligatorio.');
				return false;
			}
		}

    	// Creo automáticamente la URI
    // 	if(isset($o->titulo)){
    // 		include_once(APPPATH.'helpers/cadenaUrl.php');
		// 	$o->uri = cadenaUrl(mb_strtolower($o->titulo,'utf-8'));
		// }

		return parent::save_item($o, $isUpdate);
	}

}
