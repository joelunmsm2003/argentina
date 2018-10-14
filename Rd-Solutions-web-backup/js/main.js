$(document).ready(function(){

	/** 
	* PLUGINS
	* Todo el JS está dividido en módulos que cargamos opcionalmente junto con
	* sus dependencias (otros JS y CSS).
	*
	* Con la función cargarPlugin() definimos si se carga o no y con cargarRecursos()
	* cargamos dinámicamente todas las dependencias del script que queremos ejecutar.
	*
	* CargarPlugin() lee un array creado con el método Plugins::activar() del helper 
	* Plugins (core/Plugins.php)
	*
	* Ej :  Plugins::activar('owlCarousel')
	*/

	// Tabs
		// https://github.com/filamentgroup/Accessible-jQuery-Tabs
	if( cargarPlugin('tabs') ){
		cargarRecursos([
			{tipo: 'js', src: 'js/jquery.tabs/jquery.tabs.min.js'},
		], function(){
			$(window).resize(function(){
				if( $(window).width() > 990){
					if(window.tabs === undefined){
						window.tabs = $('.tab-seccion').tabs({
							autoRotate: 2500,
							alwaysScrollToTop:false
						});
					}
				}else{
					if(window.tabs !== undefined){
						$('.tab-seccion').destroyTabs();
						window.tabs = undefined;
					}
				}
			}).resize();
		});
		if( $(window).width() < 990){
			// $(".js-cont-desplegable").hide();
			$(".mobile-tittle").click(function(e){
				$(".mobile-tittle").removeClass('selected');
				$(this).addClass('selected');
		       var desplegable = $(this).next();
		       $('.js-cont-desplegable').not(desplegable).slideUp('fast');
		        desplegable.slideToggle('fast');		    	
	    	});
	    }
	}
	// Galerías (Owl Carousel)
	// http://owlcarousel2.github.io/OwlCarousel2/
	if( cargarPlugin('owlCarousel') ){
		cargarRecursos([
			{tipo: 'css', src: 'js/jquery.owl-carousel/assets/owl.carousel.min.css'},
			{tipo: 'css', src: 'js/jquery.owl-carousel/assets/animate.min.css'},
			{tipo: 'js',  src: 'js/jquery.owl-carousel/owl.carousel.min.js'},

		], function(){

			$('.slider-principal > ul').owlCarousel({
				items: 1,
			    loop: true,
				autoplay: true,
			    autoplayTimeout: 6000,
			    slideSpeed: 100,
		        nav: false,
			});	
		    if ($(window).width() < 1015) {
		      $('.slider-proyectos > ul').addClass('owl-carousel');
		      $('.slider-proyectos > ul').owlCarousel({
		        items: 1,
		        loop: true,
		        autoplay: true,
		        autoplayTimeout: 6000,
		        slideSpeed: 100,
		        nav: true,
		        navText: [
		          "<i class=\"icon-left-open icon\"></i><span>Anterior</span>",
		          "<i class=\"icon-right-open icon\"></i><span>Siguiente</span>"
		        ],
		      });
		    } else {
		      $('.slider-proyectos > ul').removeClass('owl-carousel');
		    }

			$('.slider-novedades > ul').owlCarousel({
				items: 1,
			    loop: true,
				autoplay: true,
			    autoplayTimeout: 6000,
			    slideSpeed: 100,
		        nav: true,
		        navText: [
		          "<i class=\"icon-left-open icon\"></i><span>Anterior</span>",
		          "<i class=\"icon-right-open icon\"></i><span>Siguiente</span>"
		        ],
		        responsive: {
		        	0 : {
		        		nav: false,
		        		dots: true,
		        		dotsCont: 'circ'
		        	},
		        	1015 : {dots: false},
		        }
			});	

			$('.slider-marcas > ul').owlCarousel({
				items: 7,
			    loop: true,
				autoplay: true,
			    autoplayTimeout: 3500,
			    slideSpeed: 100,
		        nav: false,
		        responsive : {
				    // breakpoint from 0 up
				    0 : {
				    	items: 1
				    },
				    // breakpoint from 320 up
				    320 : {
				    	items: 2
				    },
				    // breakpoint from 480 up
				    480 : {
				    	items: 3
				    },
				    // breakpoint from 480 up
				    650 : {
				    	items: 4
				    },
				    // breakpoint from 768 up
				    768 : {
				    	items: 5
				    },
				    1300 : {
				    	items: 6
				    }
				}
			});	
		});
	}

	// Gridder
	// https://github.com/oriongunning/gridder
	if( cargarPlugin('gridder') ){
		cargarRecursos([
			{tipo: 'js',  src: 'js/jquery.gridder/jquery.gridder.min.js'},

		], function(){
				$('.gridder').gridderExpander({
				    scroll: false,
				    scrollOffset: 30,
				    scrollTo: "panel",                  // panel or listitem
				    animationSpeed: 400,
				    animationEasing: "easeInOutExpo",
				    showNav: false,                      // Show Navigation
				    nextText: "Next",                   // Next button text
				    prevText: "Previous",               // Previous button text
				    closeText: "Close",                 // Close button text
				    onStart: function(){
				        //Gridder Inititialized
				    },
				    onContent: function(){
				        //Gridder Content Loaded
				    },
				    onClosed: function(){
				        //Gridder Closed
				    }
				});

				// Abrir el primero por default
				if( cargarPlugin('abrirGridder') ){
					$('[data-abierto=1]').trigger('click');
				}
		});
	}
	// }


	// WOW (animación)
	// https://github.com/matthieua/WOW
	if( cargarPlugin('animacion') ){
		cargarRecursos([
			{tipo: 'css',  src: 'css/animate.min.css'},
			{tipo: 'js',  src: 'js/jquery.wow/wow.min.js'},

		], function(){
			wow = new WOW({
				boxClass:     'wow',     
				animateClass: 'animated',
				offset:       0,         
				mobile:       true,      
				live:         false       
		    }).init();
		});
	}

	// Acordeon
	if( cargarPlugin('acordeon') ){
	    $(document).ready(function(){
	    	$(".js-respuesta").hide();
			$(".js-pregunta").click(function(e){
		       var $desplegable = $(this).next();
		       $('.js-respuesta').not($desplegable).slideUp('fast');
		        $desplegable.slideToggle('fast');

		    	var $liClickeado =  $(this).parent();
		    	// Sacamos la clase activo al li padre clickeado
		        $('.lista-faq li').not($liClickeado).removeClass('activo');
		    	// Toggle de clase activo al padre (li) del elemento clickeado (pregunta)
		        $(this).parent('.lista-faq li').toggleClass('activo');
		        e.preventDefault();
	    	});
	    });
	 }



	/** 
	* JS GENERALES
	* Estos scripts se ejecutan siempre.
	*
	*/

	/// Transiciones entre páginas y animación de enlaces internos # ///
	$(function() {

		$('html').addClass('active'); /* [1] */

		$('a[href]').each(function() { /* [2] */
			if ( location.hostname === this.hostname || !this.hostname.length ) { /* [2] */

				var link = $(this).attr("href"); /* [3] */

				if ( link.match("^#") ) { /* [4] */

					$(this).click(function() {
						var target = $(link); /* [5] */ 
						target = target.length ? target : $('[name=' + this.hash.slice(1) +']'); /* [5] */ 
						if (target.length) {
							$('html,body').animate({ /* [6] */ 
							scrollTop: target.offset().top - 70 /* [6] */ 
							}, 1000); return false; /* [6] */ 
						}
					});

				} else if ( link.match("^mailto") ) { /* [7] */ 
					// Act as normal  /* [7] */ 
				} else {

					$(this).click(function(e) {
					e.preventDefault(); /* [8] */ 
					$('html').removeClass('active'); /* [9] */ 
					setTimeout(function() { /* [10] */
					window.location = link; /* [10] */
					}, 500); /* [10] */
					});

				}

			}
		});

	});

	 
	/// Scroll en cabecera ///
	// Anima el menú cuando hay scroll
	$( window ).scroll(function(){
		var $cabecera = $('.cabecera');
		if( $(window).scrollTop() > 20){
			$cabecera.addClass('scroll');
		}else{
			$cabecera.removeClass('scroll');
		}
	});
	// Oculta y muestra el menú cuando hay scroll
	var $cabecera = $('.cabecera');
	var previousScroll = 0;
	$(window).scroll(function(event){
	   var scroll = $(this).scrollTop();
	   if (scroll > previousScroll && scroll > 400){
	       $cabecera.addClass('ocultar');
	       //Cierra el menú cuando hay scroll
			$(".navbar-collapse").removeClass("in").addClass("collapse");
			$(".hamburger").removeClass("is-active");
	   } else {
	      $cabecera.removeClass('ocultar');
	   }
	   previousScroll = scroll;
	});

	/// Menú hamburguesa ///
	$(document).ready(function(){
		$('.hamburger').click(function(){
			$(this).toggleClass('is-active');
			$('.cabecera').toggleClass('activo');
		});
	});



	/** 
	* HELPERS
	* Estas funciones son las que usamos definir si cargar o no el resto del JavaScript
	* y cargar sus recursos
	*
	*/


	// Reviso si cargar un plugin JS
	// Cargo solo los plugins listados en el array jsPlugins (El array jsPlugins se genera con PHP).
	function cargarPlugin(plugin){
		return (window.jsplugins.indexOf( plugin ) !== -1);
	}

	// Cargo los recursos dinámicamente y ejecuto el callback
	// (Pueden ser CSS o JS)
	function cargarRecursos(recursos, callback) {
		var total = recursos.length;
		recursos.forEach(function(r){
			var s;
			if(r.tipo == 'css'){
				s = document.createElement( 'link' );
				s.setAttribute('rel','stylesheet');
				s.setAttribute('type','text/css');
				s.setAttribute('href',r.src);
			}
			if(r.tipo == 'js'){
				s = document.createElement( 'script' );
				s.setAttribute( 'src', r.src );
			}
			s.onload = s.onreadystatechange = function() {
			    if(!this.readyState || this.readyState == "loaded" || this.readyState == "complete") {
			        total--;
					/*console.log('Cargó ' + r.src);*/
    				if(total === 0){
    					callback();
    				}
			    }
			};
			document.head.insertBefore(s, document.head.firstChild);
		});
	}
});