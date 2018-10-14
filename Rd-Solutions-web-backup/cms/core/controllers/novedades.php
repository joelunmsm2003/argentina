<?php
Class Novedades extends MY_Controller {

    function __construct(){

        parent::__construct();


	     /////////////////////
	    /// Configuración ///
	   /////////////////////

		$controller_config["script"] = "novedades";


	     //////////////////////////////
	    /// Opciones de las vistas ///
	   //////////////////////////////

        // Nombre del listado
		$controller_config["name"] = "novedades";

		// Ordeno el listado
	    

        // Acciones
        $controller_config['actions_list'] = array(
        	'editar'	=>	base_url().$controller_config['script'].'/edit/{id}/{uriParameters}',
        	// 'preview'	=>	base_url().'../novedades/{uri}?vp{uriParameters}',
        	'delete'	=>	'javascript:areYouSurePrompt(\''.base_url().$controller_config['script'].'/delete/{id}/{uriParameters}\');'
        );


	 	 ///////////////////////////////////
	    /// Configuración de los campos ///
	   ///////////////////////////////////

		// Opciones de filtrado
		$controller_config['campos_form'] = array(

			array(
				'key'	=>'activa',
				'label'	=>'Activa',
				'type'	=>'form_checkbox',
				'filter'=>null,
				'list'	=>true,
				'class'	=>'form-quarter label-up cl-b',
				'properties'=> array(
					'name'    => 'activa',
					'value'   => 1,
					'checked' => 'checked',
				)
			),

			array(
				'key'    =>'foto_id',
				'label'  =>'Foto',
				'type'   =>'jcropimage',
				'filter' =>null,
				'list'   =>false,
				'class'  =>'form-full label-up ',
				'properties'=> array(
					'id'       => 'foto_id',
					'name'     => 'foto_id',
					'quantity' =>1,
					'sizes'    =>array(
						array('width'=>'269','height'=>'207', 'method'=>'crop'),
					),
				'siempre_jpg' => true,
				'margenes'    => false,
				'controller'  => $controller_config["script"]
				)
			),

			array(
				'key'     =>'titulo_es',
				'label'   =>'Título ES',
				'type'    =>'form_input',
				'filter'  =>null,
				'list'    =>true,
				'class'   =>'form-third label-up',
				'properties'=> array(
					'name'      => 'titulo_es',
					'maxlength' => 100,
				)
			),

      array(
				'key'     =>'titulo_en',
				'label'   =>'Título EN',
				'type'    =>'form_input',
				'filter'  =>null,
				'list'    =>true,
				'class'   =>'form-third label-up',
				'properties'=> array(
					'name'      => 'titulo_en',
					'maxlength' => 100,
				)
			),

			array(
				'key'     =>'cuerpo_es',
				'label'   =>'Cuerpo ES',
				'type'    =>'form_textarea',
				'filter'  =>null,
				'list'    =>false,
				'class'   =>'form-full label-up cl-b',
				'properties'=> array(
					'name'      => 'cuerpo_es',
					'rows' => 15,
				)
			),

      array(
				'key'     =>'cuerpo_en',
				'label'   =>'Cuerpo EN',
				'type'    =>'form_textarea',
				'filter'  =>null,
				'list'    =>false,
				'class'   =>'form-full label-up cl-b',
				'properties'=> array(
					'name'      => 'cuerpo_en',
					'rows' => 15,
				)
			),

		);

        $this->cargar_config( $controller_config );
    }
}
