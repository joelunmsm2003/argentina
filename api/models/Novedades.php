<?
Class Novedades extends Base{

	function __construct($datos=NULL){
		if(!is_null($datos))
		{

			$this->id = $datos->id;

			$this->cargar_traducciones(array(
				'titulo',
				'cuerpo',
			), $datos);

			$this->orden = $datos->orden;
			//$this->uri = url('noticias').'/'.$datos->{'uri_'.IDIOMA}.'-'.$this->id;

			if($datos->foto_id>0){
				$this->foto_id = $datos->foto_id;
				$this->foto();
			}else{
				$this->foto_id = '';
			}
		}
	}

	/**
	* Le da fomato a una propiedad
	* Especifica las reglas que le dan formato a las propiedades.
	*/

	public function foto(){
		return $this->foto = Foto::obtener(array('id' => $this->foto_id), array(
		 	'medidas' => array(
				array(
		 			'ancho' 		=> 269,
		 			'alto'  		=> 207,
		 			'src_default'  	=> '269x207.jpg',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'novedades',
				'id'     => $this->id
		 	)
		));
	}

	protected static function filtro($tabla, $tipo, $dato = null){
		$filtro = parent::filtro($tabla, $tipo, $dato);
		return $filtro;
	}

	static function obtener( $filtros = array(), $dato = null, $modelo = '', $tabla = ''){
		$filtros = !is_array($filtros) ? array($filtros => $dato) : $filtros;

		$elementos = parent::obtener($filtros, $dato, 'Novedades', 'novedades');

		return $elementos;
	}

	static function fechaEs($fecha){
		$meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
		$fecha = array_map(function($fecha) { return (int)$fecha;}, $fecha);
		return $fecha[2].' de '.$meses[$fecha[1]] . ' de '.$fecha[0];
	}
}
?>
