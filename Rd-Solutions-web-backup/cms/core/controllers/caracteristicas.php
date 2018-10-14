<?php

Class Caracteristicas extends MY_Controller {

    function __construct(){

        parent::__construct();


	     /////////////////////
	    /// Configuración ///
	   /////////////////////

		$controller_config["script"] = "caracteristicas";


	     //////////////////////////////
	    /// Opciones de las vistas ///
	   //////////////////////////////

        // Nombre del listado
		$controller_config["name"] = "características";

		// Ordeno el listado
	    if(! isset($_GET['order'])){
	    	$_GET['order'] = array(
				'tipo' => 'ASC',
				'nombre' => 'ASC',
			);
	    }


	    $controller_config["paginator_results_per_page"] = 9999999;

	     // Drag & drop
        $controller_config["ordenar"] = false;

        // Acciones
        $controller_config['actions_list'] = array(
        	'editar'	=>	base_url().$controller_config['script'].'/edit/{id}/{uriParameters}',
        	'delete'	=>	'javascript:areYouSurePrompt(\''.base_url().$controller_config['script'].'/delete/{id}/{uriParameters}\');'
        );


	 	 ///////////////////////////////////
	    /// Configuración de los campos ///
	   ///////////////////////////////////

		// Opciones de filtrado
		$controller_config['campos_form'] = array(


			array(
				'key'	=>'tipo',
				'label'	=>'Tipo',
				'type'	=>'form_dropdown',
				'filter'=>null,
				'list'	=>true,
				'class'	=>'form-quarter label-up',
				'properties'=> array(
					'name'    => 'tipo',
					'options' => array(
						'confort'   => 'Confort',
						'exterior'  => 'Exterior',
						'sonido'    => 'Sonido',
						'seguridad' => 'Seguridad',
					)
				)
			),

			array(
				'key'     =>'nombre',
				'label'   =>'Nombre',
				'type'    =>'form_input',
				'filter'  =>null,
				'list'    =>true,
				'class'   =>'form-half label-up',
				'properties'=> array(
					'name'      => 'nombre',
					'maxlength' => 500,
				)
			),
		);

        $this->cargar_config( $controller_config );
    }
}