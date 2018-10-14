<?php

  require_once('api/inicio.php');


  //////////////////////////////////
 /// Configuración de la página ///
//////////////////////////////////

  define('SECCION', 'tabs');

// Fin configuración de la página //

  include('header.php');

  Plugins::activar('tabs');
  Plugins::activar('gridder');
  Plugins::activar('abrirGridder');

?>

<article>
	<div class="container">
		<div class="row">

			<h2>Iuju! Tabs brah</h2>
			<h3>Prósimamente</h3>
		
			<h4>v1. by Francho Lafro</h4>
			<section class="tabs tabs-esterilizacion">
				<div class="tab-seccion container">
					<div class="col-xs-12">
						<nav class="tab-nav-container">
							<div class="titular">ESTERILIZACIÓN Y DESCONTAMINACIÓN ESPECIALIZADA</div>
							<a class="tab-nav hidden-xs hidden-sm" href="#tab-1">
								<span class="titulo">Medicina Asistencial</span>
							</a>
							<a class="tab-nav hidden-xs hidden-sm" href="#tab-2">
								<span class="titulo">Industria Farmaceutica</span>
							</a>
							<a class="tab-nav hidden-xs hidden-sm" href="#tab-3">
								<span class="titulo">Industria de productos Médicos</span>
							</a>
							<a class="tab-nav hidden-xs hidden-sm" href="#tab-4">
								<span class="titulo">Industria Cosmética</span>
							</a>
							<a class="tab-nav hidden-xs hidden-sm" href="#tab-5">
								<span class="titulo">Industria Alimenticia</span>
							</a>
						</nav>
						<div class="tab-container">
							<div class="tab-content" id="tab-1">
								<div class="mobile-tittle visible-xs-inline-block visible-sm-inline-block">
									<span class="">Medicina Asistencial</span>
								</div>
								<div class="js-cont-desplegable">
									<div class="cont-texto">
										<div class="titulo hidden-sm">							
											Medicina Asistencial
										</div>
										<p>Se procesan a diario materiales no termolábiles por vapor de agua (textiles, instrumental quirúrgico, etc.) y termolábiles por Óxido de Etileno o Plasma de Peróxido de Hidrógeno (productos médicos reutilizables, equipamiento eléctrónico, endoscopios, etc.) dependiendo de los plazos requeridos o bien del tipo de producto en cuestión.</p>
									</div>
								</div>
							</div>
							<div class="tab-content" id="tab-2">
								<div class="mobile-tittle visible-xs-inline-block visible-sm-inline-block">
									<span class="">Industria Farmaceutica</span>
								</div>
								<div class="js-cont-desplegable">
									<div class="cont-texto">
										<div class="titulo hidden-sm">							
											Industria Farmaceutica
										</div>
										<p>Se procesan a diario materiales no termolábiles por vapor de agua (elementos filtrantes, materiales de laboratorio, medios de cultivo, etc.) y termolábiles por Óxido de Etileno. Este último proceso resulta de elección para el tratamiento a granel de una amplia variedad de material de empaque primario, incluyendo frascos (de vidrio o plástico), tapas, insertos, pomos, tapones, precintos de aluminio, etc. Asimismo, se aplica en el tratamiento de ciertos principios activos que requieren condición de esterilidad.</p>
									</div>
								</div>
							</div>
							<div class="tab-content" id="tab-3">
								<div class="mobile-tittle visible-xs-inline-block visible-sm-inline-block">
									<span class="">Industria de productos Médicos</span>
								</div>
								<div class="js-cont-desplegable">
									<div class="cont-texto">
										<div class="titulo hidden-sm">							
											Industria de productos Médicos
										</div>
										<p>Se procesan a diario materiales no termolábiles por vapor de agua (implantes metálicos, productos textiles, de silicona, etc.) y termolábiles por Óxido de Etileno o Plasma de Peróxido de Hidrógeno dependiendo de los plazos requeridos o bien del tipo de producto en cuestión.</p>
									</div>
								</div>
							</div>
							<div class="tab-content" id="tab-4">
								<div class="mobile-tittle visible-xs-inline-block visible-sm-inline-block">
									<span class="">Industria Cosmética</span>
								</div>
								<div class="js-cont-desplegable">
									<div class="cont-texto">
										<div class="titulo hidden-sm">							
											Industria Cosmética
										</div>
										<p>Se procesan a diario materiales no termolábiles por vapor de agua (elementos filtrantes, materiales de laboratorio, medios de cultivo, etc.) y termolábiles por Óxido de Etileno. Este último proceso resulta de elección para el tratamiento a granel de una amplia variedad de material de empaque primario.</p>
									</div>
								</div>
							</div>
							<div class="tab-content" id="tab-5">
								<div class="mobile-tittle visible-xs-inline-block visible-sm-inline-block">
									<span class="">Industria Alimenticia</span>
								</div>
								<div class="js-cont-desplegable">
									<div class="cont-texto">
										<div class="titulo hidden-sm">							
											Industria Alimenticia
										</div>
										<p>Se procesan a diario materiales no termolábiles por vapor de agua (elementos filtrantes, materiales de laboratorio, medios de cultivo, etc.) y termolábiles por Óxido de Etileno. Este último proceso resulta de elección para el tratamiento a granel de una amplia variedad de material de empaque primario.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<h4>v2. by John Germi</h4>
			<h5>El comportamiento es que en mobile se transforme en acordeon.</h5>
			<ul class="gridder">

			    <li class="gridder-list  wow fadeInDown" data-wow-delay="0.2s" data-griddercontent="#content1" id="list-1" data-abierto="1">
			    	<h4>Service Full</h4>
			    	<p>El servicio más completo del mercado. Recomendado para vehículos a partir de los 30.000 km. Este exhaustivo chequeo le permitirá mantener su vehículo siempre en óptimas condiciones.</p>
			    	<i class="icon-plus-circled"></i>	
			    </li>

			    <li class="gridder-list  wow fadeInDown" data-wow-delay="0.4s" data-griddercontent="#content2" id="list-2">
			    	<h4>Service Básico</h4>
			    	<p>Rápido y económico, es el adecuado para vehículos nuevos o con un bajo promedio mensual de kilómetros.</p>
			    	<i class="icon-plus-circled"></i>    
			    </li>

			    <li class="gridder-list  wow fadeInDown" data-wow-delay="0.6s" data-griddercontent="#content3">
			    	<h4>Control de viaje</h4>
			    	<p>Diseñado para su tranquilidad. Revisión de 35 puntos críticos antes de tomar la ruta.</p>
			    	<i class="icon-plus-circled"></i>    
			    </li>

			    <li class="gridder-list  wow fadeInDown" data-wow-delay="0.8s" data-griddercontent="#content4" id="list-4">
			    	<h4>Inspección de usados</h4>
			    	<p>Ahórrese disgustos. Antes de cerrar la compra de un auto usado, acérquese a nuestro centro de Servicios y en 2 horas recibirá un completo informe escrito con el estado del vehículo. Controlamos más de 90 puntos para que su compra tenga final feliz.</p>
			    	<i class="icon-plus-circled"></i>   
			    </li>

					<div id="content1" class="gridder-content">
						<div class="gridder-contenido wow fadeIn">
							<div class="row">

								<div class="col-sm-4">
									<span>El servicio más completo del mercado. Recomendado para vehículos a partir de los 30.000 km. Este exhaustivo chequeo le permitirá mantener su vehículo siempre en óptimas condiciones.</span>
								</div>
								<div class="col-sm-4">
									<ul>
										<li>Sistema de carga</li>
										<li>Bujías, cables de bujías, tapa distribuidor, rotor</li>
										<li>Neumáticos delanteros, traseros y de auxilio</li>
										<li>Arranque y regulación de motor</li>
										<li>Embrague</li>
										<li>Luces de posición, bajas, altas, antiniebla, freno, balizas, marcha atrás</li>
										<li>Luces interiores</li>
										<li>Amortiguadores</li>
										<li>Aire acondicionado</li>
										<li>Chapones y protectores</li>
										<li>Tren delantero: rótulas, bujes de parrilla, bujes de barra estabilizadora, bieletas, parrilas, brazos de rótulas, cazoletas, caja de dirección, cremallera, extremos, prec-up</li>
										<li>Rulemanes de ruedas</li>
										<li>Semiejes</li>
										<li>Grasa de caja</li>
										<li>Soporte de motor y de caja</li>
									</ul>
								</div>
								<div class="col-sm-4">
									<ul>
										<li>Frenos delanteros y traseros: bomba, caños/flexibles, válvula compensadora, discos, pastillas, calipers, testigos, campanas, cintas, cilindros</li>
										<li>Freno de mano</li>
										<li>Radiador de agua, condensador, radiador de aceite</li>
										<li>Tren trasero: bujes de parrilla, bujes de barra estabilizadora, bujes de eje trasero, brazos de suspensión, bieletas, rulemanes</li>
										<li>Sistema de escape, fijaciones</li>
										<li>Lavaparabisas, lavaluneta, escobillas</li>
										<li>Cardanes y crucetas</li>
										<li>Caja de transferencia, diferencial</li>
										<li>Bocina, cierre centralizado, alza cristales</li>
										<li>Matafuegos</li>
										<li>Cerraduras y bisagras</li>
										<li>Indicador de servicio</li>
									</ul>
								</div>

							</div>
					  </div> 
					 </div>

					<div id="content2" class="gridder-content">
						<div class="gridder-contenido wow fadeIn">
							<div class="row">

								<div class="col-sm-4">
									<span>Rápido y económico, es el adecuado para vehículos nuevos o con un bajo promedio mensual de kilómetros.</span>
								</div>
								<div class="col-sm-4">
									<ul>
										<li>Aceite de motor, líquido de frenos, refrigerante, de dirección hidráulica, de embrague hidráulico, de caja automática, de lavaparabrisas (estado, niveles, cambio)</li>
										<li>Filtro de aceite, filtro de combustible, filtro de aire (estado, limpieza, cambio)</li>
										<li>Bornes y agua de batería (estado, limpieza)</li>
										<li>Correa poli-v, correa trapezoidal (estado)</li>
									</ul>
								</div>
								<div class="col-sm-4">
									<ul>
										<li>Mangueras (estado)</li>
										<li>Neumáticos delanteros y traseros(estado, presión)</li>
										<li>Arranque y regulación de motor (estado)</li>
										<li>Luces de posición, bajas, altas, antiniebla, freno, balizas, marcha atrás (cambio lámparas)</li>
										<li>Indicador de servicios (reseteo)</li>
									</ul>
								</div>
								
							</div>
					  </div> 
					 </div>

					<div id="content3" class="gridder-content">
						<div class="gridder-contenido wow fadeIn">
							<div class="row">

								<div class="col-sm-4">
									<span>Diseñado para su tranquilidad. Revisión de 35 puntos críticos antes de tomar la ruta.</span>
								</div>
								<div class="col-sm-4">
									<ul>
										<li>Aceite de motor, líquido de frenos, refrigerante, de dirección hidráulica, de caja automática, de lavaparabrisas</li>
										<li>Filtro de aire</li>
										<li>Correa poli-v y/o trapezoidal</li>
										<li>Mangueras</li>
										<li>Neumáticos</li>
									</ul>
								</div>
								<div class="col-sm-4">
									<ul>
										<li>Semiejes</li>
										<li>Frenos delanteros</li>
										<li>Regulación de motor</li>
										<li>Embrague</li>
										<li>Lavaparabrisas, lavaluneta, escobillas</li>
										<li>Luces de posición, bajas, altas, antiniebla, freno, balizas, marcha atrás, patente</li>
									</ul>
								</div>
								
							</div>
					  </div> 
					 </div>

					<div id="content4" class="gridder-content">
						<div class="gridder-contenido wow fadeIn">
							<div class="row">

								<div class="col-sm-4">
									<span>Ahórrese disgustos. Antes de cerrar la compra de un auto usado, acérquese a nuestro centro de Servicios y en 2 horas recibirá un completo informe escrito con el estado del vehículo. Controlamos más de 90 puntos para que su compra tenga final feliz.</span>
								</div>
								<div class="col-sm-4">
									<ul>
										<li>Aceite de motor, líquido de frenos, refrigerante, de dirección hidráulica, de embrague hidráulico, de caja automática, de lavaparabrisas.</li>
										<li>Filtro de aceite, filtro de combustible, filtro de aire, filtro de habitáculo</li>
										<li>Bornes y agua de batería, correa poli-v, correa trapezoidal, mangueras</li>
										<li>Sistema de carga</li>
										<li>Bujías, cables de bujías, tapa distribuidor, rotor</li>
										<li>Neumáticos delanteros, traseros y de auxilio</li>
										<li>Arranque y regulación de motor</li>
										<li>Embrague</li>
										<li>Luces de posición, bajas, altas, antiniebla, freno, balizas, marcha atrás</li>
										<li>Luces interiores</li>
										<li>Amortiguadores</li>
										<li>Aire acondicionado</li>
										<li>Chapones y protectores</li>
										<li>Tren delantero: rótulas, bujes de parrilla, bujes de barra estabilizadora, bieletas, parrilas, brazos de rótulas, cazoletas, caja de dirección, cremallera, extremos, prec-up</li>
									</ul>
								</div>
								<div class="col-sm-4">
									<ul>
										<li>Rulemanes de ruedas</li>
										<li>Semiejes</li>
										<li>Grasa de caja</li>
										<li>Soporte de motor y de caja</li>
										<li>Frenos delanteros y traseros: bomba, caños/flexibles, válvula compensadora, discos, pastillas, calipers, testigos, campanas, cintas, cilindros</li>
										<li>Freno de mano</li>
										<li>Radiador de agua, condensador, radiador de aceite</li>
										<li>Tren trasero: bujes de parrilla, bujes de barra estabilizadora, bujes de eje trasero, brazos de suspensión, bieletas, rulemanes</li>
										<li>Sistema de escape, fijaciones</li>
										<li>Lavaparabisas, lavaluneta, escobillas</li>
										<li>Cardanes y crucetas</li>
										<li>Caja de transferencia, diferencial</li>
										<li>Bocina, cierre centralizado, alza cristales</li>
										<li>Cerraduras y bisagras</li>
									</ul>
								</div>
								
							</div>
					  </div> 
					 </div>
			</ul>

		</div>
	</div>
</article>

<?php include('footer.php'); ?>