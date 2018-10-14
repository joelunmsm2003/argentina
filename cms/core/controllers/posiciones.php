<?php

class Posiciones extends MY_Controller {

	var $controller_config;

    function __construct(){

        parent::__construct();


	     ///////////////////////////
	    ////// Configuración //////
	   ///////////////////////////

        $controller_config["script"] 	= "posiciones";
        $controller_config["model"] 	= $controller_config["script"]."_model";


	     ////////////////////////////////////
	    ////// Opciones de las vistas //////
	   ////////////////////////////////////

        //Nombre del listado
		$controller_config["name"] = "posiciones para los banners";

		$controller_config["add_button"] = false;

        //Acciones
        $controller_config['actions_list'] = array(
        	'editar'	=>	base_url().$controller_config['script'].'/edit/{id}/{uriParameters}',
        );


	 	 /////////////////////////////////////////
	    ////// Configuración de los campos //////
	   /////////////////////////////////////////

		// Opciones de filtrado
		 $controller_config['campos_form'] = array(

			array(
				'key'     =>'nombre',
				'label'   =>'Nombre',
				'type'    =>'form_input',
				'filter'  =>null,
				'list'    =>true,
				'class'   =>'form-third label-up',
				'properties'=> array(
					'name'      => 'nombre',
					'maxlength' => 100,
				)
			),

			array(
				'key'     =>'cod',
				'label'   =>'Código',
				'type'    =>'form_hidden',
				'filter'  =>null,
				'list'    =>false,
				'class'   =>'form-third label-up',
				'properties'=> array(
					'name'      => 'cod',
					'maxlength' => 35,
				)
			),

			array(
				'key'    =>'banners',
				'label'  =>'',
				'type'   =>'child_relation_iframe',
				'filter' =>null,
				'titulo' => 'Banners',
				'properties' => array(
					'child_controller' =>'banners_posiciones',
					'child_model'      =>'banners_posiciones_model',
					'foreign_key'      =>'posicion_id'
                )
            ),

		);

        $this->controller_config = $controller_config;
    }
}