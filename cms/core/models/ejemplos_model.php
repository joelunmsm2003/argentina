<?php

class Ejemplos_model extends MY_Model {

	var $fields = array(
		'id',
		'archivo_id',
		'orden'
	);

	var $table = 'ejemplos';

	function __construct(){
        parent::__construct();
    }

}
