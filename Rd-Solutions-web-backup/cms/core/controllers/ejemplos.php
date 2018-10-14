<?php

Class Ejemplos extends MY_Controller {

    function __construct(){

        parent::__construct();


	     /////////////////////
	    /// Configuración ///
	   /////////////////////

		$controller_config["script"] = "ejemplos";


	     //////////////////////////////
	    /// Opciones de las vistas ///
	   //////////////////////////////

        // Nombre del listado
		$controller_config["name"] = "ejemplos";

	    $controller_config["paginator_results_per_page"] = 9999999;

	     // Drag & drop
        $controller_config["ordenar"] = true;

        // Acciones
        $controller_config['actions_list'] = array(
        	'editar'	=>	base_url().$controller_config['script'].'/edit/{id}/{uriParameters}',
        	'delete'	=>	'javascript:areYouSurePrompt(\''.base_url().$controller_config['script'].'/delete/{id}/{uriParameters}\');'
        );


	 	 ///////////////////////////////////
	    /// Configuración de los campos ///
	   ///////////////////////////////////

		$controller_config['campos_form'] = array(

			array(
				'key'    =>'archivo_id',
				'label'  =>'PDF con thumbnail',
				'type'   =>'form_upload',
				'filter' =>null,
				'class'  =>'form-half clear label-up',
				'comentarios' =>'Solo los PDFs pueden tener thumbnail. Se genera de 150px de alto con ancho variable, solo si está instalada la extensión ImageMagick.',
				'properties'=> array(
					'name'          => 'archivo_id',
					'allowed_types' => 'pdf',
					'thumbnail' => true,
				)
			),
		);

        $this->cargar_config( $controller_config );
    }
}