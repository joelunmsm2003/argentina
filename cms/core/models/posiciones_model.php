<?php

class Posiciones_model extends MY_Model {

	var $fields = array(
		'nombre',
		'cod',
		'orden',
	);

	var $table = 'posiciones';

	 function __construct()
    {
        parent::__construct();
    }

    /* Evito que se creen nuevas posiciones */
    public function save_item($o, $isUpdate){
		if(! $isUpdate){
			return false;
		}
		return parent::save_item($o, $isUpdate);
	}

	/* Evito que se eliminen posiciones */
	public function delete_item($id){}

}