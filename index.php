<!DOCTYPE html>
<html>
	<head>
            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
            <script>
                
                function initialize() {
                  var myLatlng = new google.maps.LatLng(4.696490240756579,-74.07622996693419);
                  var mapOptions = {
                    zoom: 16,
                    center: myLatlng
                  }
                  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                  var marker = new google.maps.Marker({
                      position: myLatlng,
                      map: map,
                      title: 'Chic Performance'
                  });
                }
                google.maps.event.addDomListener(window, 'load', initialize);
            </script>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
            <meta name="description" content="">
            <meta name="author" content="">
            <title>Chic Performance</title>
            <meta name="description" content="" />
            <meta name="keywords" content="" />
            <meta name="author" content="Codrops" />
            <link rel="shortcut icon" href="file:///C|/xampp/htdocs/favicon.ico"> 
            <link rel="stylesheet" type="text/css" href="css/default.css" />
            <link rel="stylesheet" type="text/css" href="css/component.css" />
            
            <script src="js/modernizr.custom.js"></script>
            <script src="http://code.jquery.com/jquery-latest.min.js"></script>
            <script src="js/jPaginate.js"></script>
            
            <!-- Incluimos el plugin -->
            <script src="bjqs.min.js"></script>
            <script src="script.js"></script>
            <link rel="shortcut icon" href="images/favicon.html">
            
            <!-- Bootstrap -->
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/bootstrap-theme.min.css" rel="stylesheet">
            
            <!-- Custom CSS -->
            <link href="css/style.css" rel="stylesheet">
            <link rel="stylesheet" href="js/rs-plugin/css/settings.css" type="text/css"/>
            
            <!-- Superslides CSS -->
            <link href="css/superslides.css" rel="stylesheet">
            
            <!-- Owl Carousel stylesheets -->
            <link href="css/owl.carousel.css" rel="stylesheet">
            <link href="css/owl.theme.css" rel="stylesheet">
            
            <!-- Fancybox -->
            <link href="css/jquery.fancybox.css" rel="stylesheet">
            
            <!-- Animate - necessary for Wow.js -->
            <link href="css/animate.css" rel="stylesheet">
            
            <!-- Google Fonts -->
            <link href="http://fonts.googleapis.com/css?family=PT+Sans:400,700|Oranienbaum|PT+Serif:400italic" rel="stylesheet">
            
            <!-- Font Awesome Icons -->
            <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.css" rel="stylesheet">
            
            <!-- HTML5 -->
            <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
            <![endif]-->
            
            <link rel="stylesheet" href="estilos.css" />

	</head>
	<body data-spy="scroll" data-target=".navbar-collapse">
		<!-- ========== MENU START ========== -->
		<div class="navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">
						<img src="images/ico.gif" width="90" height="27" alt="" class="img-responsive" />
					</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home">INICIO</a></li>
						<li><a href="#about">NOSOTROS</a></li>
                                                <li><a href="#staff" id="ctl-staff">STAFF</a></li>
                                                <li><a href="#testimonials">SERVICIOS</a></li>
                        <!--
						<li class="dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">BLOG <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#blog">Latest Posts</a></li>
								<li><a href="blog.html">No Sidebar</a></li>
								<li><a href="blog-left.html">Left Sidebar</a></li>
								<li><a href="blog-right.html">Right Sidebar</a></li>
								<li><a href="post.html">Single Post</a></li>
							</ul>
						</li>
                        -->
                                                <li><a href="#blog">EVENTOS</a></li>
                        <!--
						<li><a href="#sessions">PORTAFOLIO</a></li>
						<li><a href="#testimonials">TESTIMONIALS</a></li>
                        -->
						<li><a href="#contact">CONTACTENOS</a></li>
					</ul>
				</div>
			</div>
	</div>

		<!-- ========== MENU END ========== -->
        

	<!-- ========== BANNER START ========== -->
        
        <div id="banner">
        <!--
            <div class="video">
                <video width="400" height="250" loop autoplay>
                      <source src="videos/video.mp4" type="video/mp4">
                      <source src="videos/video.ogg" type="video/ogg">
                    Plugin no soportado
                </video>
            </div>
            -->
            <div class="slides-container">
                <img src="images/banner1.jpg" alt="" />
                <img src="images/banner2.jpg" alt="" />
                <img src="images/banner3.jpg" alt="" />
                <img src="images/banner4.jpg" alt="" />
            </div>
            <div class="tint">
                <p><a href="#about" class="btn btn-default btn-lg">NAVEGAR</a></p>
                <div class="welcome text-center">
                <!-- SLIDESHOW -->
                <div id="slider">
                    <ul class="bjqs">
                        <li><img src="images/b1.jpg" alt="" title="texto 1" /></li>
                        <li><img src="images/b2.jpg" alt="" title="texto 2" /></li>
                        <li><img src="images/b3.jpg" alt="" title="texto 3" /></li>
                        <li><img src="images/b4.jpg" alt="" title="texto 4" /></li>
                        <li><img src="videos/video.gif" alt="" title="texto 5" /></li>
                    </ul>
                </div> 
                
                </div>
            </div>
	</div>
        <!--
        <!-- ========== BANNER END ========== -->
	<div id="home"></div>
	<!-- ========== ABOUT START ========== -->
	<section id="about">
            <div class="container text-center">
                <div class="row wow bounceInUp" data-wow-delay="0.5s">
                    <div class="col-md-12">
                        <h2>NOSOTROS</h2>
                        <h4>TODOS TENEMOS UNA HISTORIA</h4>
                        <div class="divider"><i class="fa fa-bookmark"></i></div>
                        <p style="text-align: justify;">CHIC PERFORMANCE LTDA es una empresa con 6 años de experiencia en la  producción de eventos con  acciones de comunicación y/o marketing a través de estrategias cargadas de creatividad e ingenio. 
Contamos con personal capacitado: Promotores, Modelos de Protocolo, Actores, Artistas. Para desarrollar canales directos de información de su producto o servicio con el mercado objetivo. 
Desarrollamos sus ideas desde la creación, diseño y ejecución con nuestro Staff, Equipos Técnicos y Mobiliario en Lanzamientos y Activaciones de Marca, Ferias, Show Rooms, Eventos Corporativos, Stands entre otros. 	</p>
                    </div>
		</div>
                <!-- ========== CLIENTES START ========== -->
		<section id="client">
                    <div class="container">
                        <div class="row wow flipInY" data-wow-delay="0.5s">
                            <div class="col-md-12 text-center" style="background-image: url(images/fondo.jpg)">
                                <h4><div>CLIENTES</div></h4>
                                <div class="divider"><i class="fa fa-bookmark"></i></div>
                                <div class="cliente">
                                    <img src="images/Clientes/Client1.jpg" />
                                    <img src="images/Clientes/Client2.jpg" />
                                    <img src="images/Clientes/Client3.jpg" />
                                    <img src="images/Clientes/Client4.jpg" />
                                    <img src="images/Clientes/Client5.jpg" />
                                    <img src="images/Clientes/Client6.jpg" />
                                    <img src="images/Clientes/Client7.jpg" />
                                    <img src="images/Clientes/Client8.jpg" />
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <!-- ========== CLIENTES END ========== -->
		<!-- ========== ABOUT END ========== -->
		<!-- ========== MODELS START ========== -->

		<section id="staff">
			<div class="parallax" data-velocity=".4" data-fit="-400" style="background-image: url(images/parallax1.jpg)"></div>
			<div class="tint"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="wow fadeInLeftBig" data-wow-delay="0.3s">STAFF</h2>
						<h4 class="wow fadeInRightBig" data-wow-delay="0.5s">CONOCELOS</h4>
						<div class="divider"><i class="fa fa-user"></i></div>
						<p style="text-align: justify;">Contamos con personal capacitado: Modelos, Promotores, Actores, Artistas, Performance, DJ ́s, Volanteros para sus eventos. Tenemos un portafolio completo de Modelos de Protocolo, Pasarela y Fotografía. Nuestras modelos de protocolo están capacitados para atraer al mercado objetivo de sus puntos de venta. El perfil de nuestro Staff cumple con las diferentes expectativas y desempeño que se requiera. Por esto el presupuesto se ajusta según su necesidad.</p>
					</div>
				</div>
				<div class="row wow fadeInUpBig" data-wow-delay="0.5s">
                                    <div class="col-md-12 text-center">
                                        <ul class="filter-menu">
                                            <li id="todos" class="filter btn btn-default active" >TODOS</li>
                                            <li class="filter btn btn-default"  id="men">HOMBRES</li>
                                            <li class="filter btn btn-default" id="women">MUJERES</li>
                                        </ul>
                                        <div style="display: inline-block; text-align: center; width:100%; height:25px; margin-bottom: 50px;" id="menu-todos">
                                            <div id="btn-1" class="boton-prueba">1</div>
                                            <div id="btn-2" class="boton-prueba">2</div>
                                            <div id="btn-3" class="boton-prueba">3</div>
                                            <div id="btn-4" class="boton-prueba">4</div>
                                            <div id="btn-5" class="boton-prueba">5</div>
                                            <div id="btn-6" class="boton-prueba">6</div>
                                            <div id="btn-7" class="boton-prueba">7</div>
                                            <div id="btn-8" class="boton-prueba">8</div>
                                            <div id="btn-9" class="boton-prueba">9</div>
                                            <div id="btn-10" class="boton-prueba">10</div>
                                            <div id="btn-11" class="boton-prueba">11</div>
                                            <div id="btn-12" class="boton-prueba">12</div>
                                            <div id="btn-13" class="boton-prueba">13</div>
                                        </div>
                                        <div style="display: inline-block; text-align: center; width:100%; height:25px; margin-bottom: 50px;" id="menu-women">
                                            <div id="btn-1" class="boton-prueba">1</div>
                                            <div id="btn-2" class="boton-prueba">2</div>
                                            <div id="btn-3" class="boton-prueba">3</div>
                                            <div id="btn-4" class="boton-prueba">4</div>
                                            <div id="btn-5" class="boton-prueba">5</div>
                                            <div id="btn-6" class="boton-prueba">6</div>
                                            <div id="btn-7" class="boton-prueba">7</div>
                                            <div id="btn-8" class="boton-prueba">8</div>
                                            <div id="btn-9" class="boton-prueba">9</div>
                                            <div id="btn-10" class="boton-prueba">10</div>
                                        </div>
                                        <div style="display: inline-block; text-align: center; width:100%; height:25px; margin-bottom: 25px;" id="menu-men">
                                            <div id="btn-11" class="boton-prueba">1</div>
                                            <div id="btn-12" class="boton-prueba">2</div>
                                            <div id="btn-13" class="boton-prueba">3</div>
                                        </div>
                                        <ul class="models" >
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/1.jpg" title=""><img src="images/Model/mujer/1.jpg" alt="" /></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/2.jpg" title=""><img src="images/Model/mujer/2.jpg" alt="" class="img-responsive" /></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/3.jpg" title=""><img src="images/Model/mujer/3.jpg" alt="" class="img-responsive" /></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/4.jpg" title=""><img src="images/Model/mujer/4.jpg" alt="" class="img-responsive" /></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/5.jpg" title=""><img src="images/Model/mujer/5.jpg" alt="" class="img-responsive" /></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/6.jpg" title=""><img src="images/Model/mujer/6.jpg" alt="" class="img-responsive" /></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/7.jpg" title=""><img src="images/Model/mujer/7.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/8.jpg" title=""><img src="images/Model/mujer/8.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/9.jpg" title=""><img src="images/Model/mujer/9.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/10.jpg" title=""><img src="images/Model/mujer/10.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/11.jpg" title=""><img src="images/Model/mujer/11.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/12.jpg" title=""><img src="images/Model/mujer/12.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/13.jpg" title=""><img src="images/Model/mujer/13.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/14.jpg" title=""><img src="images/Model/mujer/14.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/15.jpg" title=""><img src="images/Model/mujer/15.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/16.jpg" title=""><img src="images/Model/mujer/16.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/17.jpg" title=""><img src="images/Model/mujer/17.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/18.jpg" title=""><img src="images/Model/mujer/18.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/19.jpg" title=""><img src="images/Model/mujer/19.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/20.jpg" title=""><img src="images/Model/mujer/20.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/21.jpg" title=""><img src="images/Model/mujer/21.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/22.jpg" title=""><img src="images/Model/mujer/22.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/23.jpg" title=""><img src="images/Model/mujer/23.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/24.jpg" title=""><img src="images/Model/mujer/24.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/25.jpg" title=""><img src="images/Model/mujer/25.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/26.jpg" title=""><img src="images/Model/mujer/26.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/27.jpg" title=""><img src="images/Model/mujer/27.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/28.jpg" title=""><img src="images/Model/mujer/28.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/29.jpg" title=""><img src="images/Model/mujer/29.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/30.jpg" title=""><img src="images/Model/mujer/30.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/31.jpg" title=""><img src="images/Model/mujer/31.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/32.jpg" title=""><img src="images/Model/mujer/32.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/33.jpg" title=""><img src="images/Model/mujer/33.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/34.jpg" title=""><img src="images/Model/mujer/34.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/35.jpg" title=""><img src="images/Model/mujer/35.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/36.jpg" title=""><img src="images/Model/mujer/36.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/37.jpg" title=""><img src="images/Model/mujer/37.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/38.jpg" title=""><img src="images/Model/mujer/38.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/39.jpg" title=""><img src="images/Model/mujer/39.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/40.jpg" title=""><img src="images/Model/mujer/40.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/41.jpg" title=""><img src="images/Model/mujer/41.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/42.jpg" title=""><img src="images/Model/mujer/42.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/43.jpg" title=""><img src="images/Model/mujer/43.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/44.jpg" title=""><img src="images/Model/mujer/44.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/45.jpg" title=""><img src="images/Model/mujer/45.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/46.jpg" title=""><img src="images/Model/mujer/46.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/47.jpg" title=""><img src="images/Model/mujer/47.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/48.jpg" title=""><img src="images/Model/mujer/48.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/49.jpg" title=""><img src="images/Model/mujer/49.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/50.jpg" title=""><img src="images/Model/mujer/50.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/51.jpg" title=""><img src="images/Model/mujer/51.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/52.jpg" title=""><img src="images/Model/mujer/52.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/53.jpg" title=""><img src="images/Model/mujer/53.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/54.jpg" title=""><img src="images/Model/mujer/54.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix mujer"><a class="fancybox" data-fancybox-group="group" href="images/Model/mujer/55.jpg" title=""><img src="images/Model/mujer/55.jpg" alt="" class="img-responsive"/></a></li>

                                            <li class="mix hombre"><a class="fancybox" data-fancybox-group="hombre" href="images/Model/hombre/1.jpg" title=""><img src="images/Model/hombre/1.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix hombre"><a class="fancybox" data-fancybox-group="hombre" href="images/Model/hombre/2.jpg" title=""><img src="images/Model/hombre/2.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix hombre"><a class="fancybox" data-fancybox-group="hombre" href="images/Model/hombre/3.jpg" title=""><img src="images/Model/hombre/3.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix hombre"><a class="fancybox" data-fancybox-group="hombre" href="images/Model/hombre/4.jpg" title=""><img src="images/Model/hombre/4.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix hombre"><a class="fancybox" data-fancybox-group="hombre" href="images/Model/hombre/5.jpg" title=""><img src="images/Model/hombre/5.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix hombre"><a class="fancybox" data-fancybox-group="hombre" href="images/Model/hombre/6.jpg" title=""><img src="images/Model/hombre/6.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix hombre"><a class="fancybox" data-fancybox-group="hombre" href="images/Model/hombre/7.jpg" title=""><img src="images/Model/hombre/7.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix hombre"><a class="fancybox" data-fancybox-group="hombre" href="images/Model/hombre/8.jpg" title=""><img src="images/Model/hombre/8.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix hombre"><a class="fancybox" data-fancybox-group="hombre" href="images/Model/hombre/9.jpg" title=""><img src="images/Model/hombre/9.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix hombre"><a class="fancybox" data-fancybox-group="hombre" href="images/Model/hombre/10.jpg" title=""><img src="images/Model/hombre/10.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix hombre"><a class="fancybox" data-fancybox-group="hombre" href="images/Model/hombre/11.jpg" title=""><img src="images/Model/hombre/11.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix hombre"><a class="fancybox" data-fancybox-group="hombre" href="images/Model/hombre/12.jpg" title=""><img src="images/Model/hombre/12.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix hombre"><a class="fancybox" data-fancybox-group="hombre" href="images/Model/hombre/13.jpg" title=""><img src="images/Model/hombre/13.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix hombre"><a class="fancybox" data-fancybox-group="hombre" href="images/Model/hombre/14.jpg" title=""><img src="images/Model/hombre/14.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix hombre"><a class="fancybox" data-fancybox-group="hombre" href="images/Model/hombre/15.jpg" title=""><img src="images/Model/hombre/15.jpg" alt="" class="img-responsive"/></a></li>
                                            <li class="mix hombre"><a class="fancybox" data-fancybox-group="hombre" href="images/Model/hombre/16.jpg" title=""><img src="images/Model/hombre/16.jpg" alt="" class="img-responsive"/></a></li>
                                        </ul>
		</section>

		<!-- ========== MODELS END ========== -->
        <!-- ========== SERVICIOS  ========== -->

		<section id="testimonials">
			<div class="container text-center">
				<div class="row wow flipInX" data-wow-delay="0.5s">
					<div class="col-md-12">
						<h2>SERVICIOS</h2>
						<h4>LO QUE OFRECEMOS</h4>
						<div class="divider"><i class="fa fa-quote-right"></i></div>
					</div>
				</div>
				<div class="row wow flipInX" data-wow-delay="0.5s">
					<div class="col-md-12">
						<div class="owl-carousel">
							<div class="item">
                            <h4>Iluminación</h4>
								<p style="text-align: justify;">Tenemos a su disposición un gran cantidad de equipos de Iluminación: Par Led ́s, Cabezas

Rompe Cielos, Pantallas de Proyección, Laser, Estructuras Truss, Paneles de Led.Hacemos la 

programación de las luces siguiendo la planeacion diseñadapara su evento.<small>Iluminación</small></p>
<table width="100%" border="0">
  <tr>
    <td></td>
    <td><img src="images/s1.jpg" width="259" height="216" ></td>
    <td></td>
  </tr>
</table>


							</div>
							<div class="item">
								<h4>Sonido</h4>
								<p style="text-align: justify;">Tenemos una amplia gama de sistemas de audio de alta fidelidad: Consolas Digitales, Microfoneria

Alambrica e inalambrica, Sistemas Array, Equipos DJ, Consolas, Amplificadores e.t.c. Todos los 

equipos son de ultima tecnologiaasegurando un optimo desempeño en los eventos.<small>Sonido</small></p>
<table width="100%" border="0">
  <tr>
    <td></td>
    <td><img src="images/s2.jpg" width="259" height="216" ></td>
    <td></td>
  </tr>
</table>
							</div>
							<div class="item">
								<h4>Merchandising</h4>
								<p style="text-align: justify;">Diseñamos y realizamos material publicitario P.O.P. en: Camisetas, Chaquetas, Gorras, Esferos,

Botones, Mugs y Libretas entre otros. Se utilizan técnicas de Bordado, Sublimación, Estampado, 

Grabado Laser e impresión Digital para dejar su marca posicionada en el merchandising ofrecido al 

mercado objetivo.<small>Merchandising</small></p>
<table width="100%" border="0">
  <tr>
    <td></td>
    <td><img src="images/s3.jpg" width="259" height="216" ></td>
    <td></td>
  </tr>
</table>
							</div>
							<div class="item">
								<h4>Stands</h4>
								<p style="text-align: justify;">Diseñamos, producimos y montamos espacios para la experiencia de marca y las ventas en

Stands a la medida de las necesidades de su empresa, creamos un entorno estético y de gran 

impacto visual. Brindamos vista en 3D (render), para que el cliente participe en el diseño antes del 

desarrollo del Stand.<small>Stands</small></p>
<table width="100%" border="0">
  <tr>
    <td></td>
    <td><img src="images/s4.jpg" width="259" height="216" ></td>
    <td></td>
  </tr>
</table>
							</div>
                            <!-- 
                            <div class="item">
								<h4>STANDS</h4>
								<blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada nisi sem, dignissim euismod erat imperdiet eget. Aliquam aliquet augue vitae fermentum sodales. Morbi bibendum tellus ac urna porttitor viverra. Nulla vel ultricies tortor. Pellentesque rhoncus quis lacus vitae fermentum. Aliquam scelerisque massa a metus commodo pretium. Duis libero justo, ullamcorper lacinia libero eu, pulvinar egestas justo.<small>STANDS</small></blockquote>
							</div>
                            -->
						</div>
					</div>
				</div>
				<div class="row">
					<!--div class="col-md-12">
						<p><a href="#" class="btn btn-default btn-lg">VER MAS</a></p>
					</div-->
				</div>
			</div>
		</section>

		<!-- ========== SERVICIOS END ========== -->

		<!-- ========== BLOG START ========== -->

		<section id="blog">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="wow fadeInLeftBig" data-wow-delay="0.3s">EVENTOS</h2>
						<h4 class="wow fadeInRightBig" data-wow-delay="0.5s">ULTIMOS EVENTOS</h4>
						<div class="divider"><i class="fa fa-book"></i></div>
					</div>
				</div>
				<div class="row-margin owl-carousel">

					<div class="item">
						<div class="post-thumb col-sm-4">
							<img src="images/eventos/Exe Bacata 95/12.jpg" alt="Banner" class="img-responsive" />
						</div>
						<div class="post col-sm-8">
							<h3 class="entry-title">EXE BACATA 95</h3>
							<div class="entry-meta">
								<span class="date">Marzo 27 a Abril 02 de 2014</span>
							</div>
							<div class="entry-content">
								<p style="text-align: justify;">Hostess de la agencia Chic Performance dieron la Bienvenida

a los invitados, que se registraron luego con nuestros modelos

de protocolo, y a continuación explicaron el concepto y diseño del 

nuevo Hotel Exe Bacata 95 ubicado en una zona exclusiva de Bogota.

Contamos con actores que hacían el papel de clientes y tra-
bajadores del Hotel, desarrollando performance para ambientar

el lugar con situaciones reales.</p>
							</div>
							<div class="post-more">
								<a href="Exe Bacata 95.html" class="btn btn-default">VER</a>
							</div>
						</div>
					</div>

					<div class="item">
						<div class="post-thumb col-sm-4">
							<img src="images/eventos/FIDI SHOP 2014/15.jpg" alt="Banner" class="img-responsive" />
						</div>
						<div class="post col-sm-8">
							<h3 class="entry-title">FIDI SHOP 2014</h3>
							<div class="entry-meta">
								<span class="date">Abril 3 al 6 de 2014</span>
							</div>
							<div class="entry-content">
								<p style="text-align: justify;">Esta feria reúne los mejores proyectos de inversión inmobiliaria

En donde nuestras modelos de protocolo son clave en el manejo 

de información con el cliente antes de su direccionamiento con 

los asesores. Contratamos también un performance Clown para

los niños y material POP de recordación. Los uniformes de los

modelos fueron diseñados y manufacturados por nosotros.</p>
							</div>
							<div class="post-more">
								<a href="FIDI SHOP 2014.html" class="btn btn-default">VER</a>
							</div>
						</div>
					</div>

					<div class="item">
						<div class="post-thumb col-sm-4">
							<img src="images/eventos/MEDITECH/9.jpg" alt="Banner" class="img-responsive" />
						</div>
						<div class="post col-sm-8">
							<h3 class="entry-title">MEDITECH</h3>
							<div class="entry-meta"><span class="date">12 al 15 de Agosto de 2014</span></div>
							<div class="entry-content">
								<p style="text-align: justify;">En esta feria Internacional de la salud nuestras modelos de protocolo estuvieron representando la imagen de la marca expuesta en los Stands que nos contrataron.  En esta galería pueden ver el desarrollo del trabajo de nuestro Staff en Corferias con marcas que confiaron en nuestra agencia como Soporte Vital, Protex y Medison..</p>
							</div>
							<div class="post-more">
								<a href="MEDITECH.html" class="btn btn-default">VER</a>
							</div>
						</div>
					</div>

					<div class="item">
						<div class="post-thumb col-sm-4">
							<img src="images/eventos/ORIFLAME/6.jpg" alt="Banner" class="img-responsive" />
						</div>
						<div class="post col-sm-8">
							<h3 class="entry-title">ORIFLAME</h3>
							<div class="entry-meta">
								<span class="date">9 al 11 de septiembre de 2014</span>
							</div>
							<div class="entry-content">
								<p style="text-align: justify;">Simultáneamente en las ciudades de Cali, Medellín, Bucaramanga 

y Bogota, la multinacional Oriflame hizo la presentación de una

nueva fragancia, Classic by David Beckham, posteriormente se hizo 

el lanzamiento de la línea de maquillaje The One. Nuestros modelos 

masculinos realizaron el protocolo de la fragancia y las modelos 

mujeres, con sus rostros armoniosos se encargaron de llevar el 

maquillaje de esta nueva línea.</p>
							</div>
							<div class="post-more">
								<a href="ORIFLAME.html" class="btn btn-default">VER</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

		<!-- ========== BLOG END ========== -->

		<!-- ========== CONTACT START ========== -->

		<section id="contact">
			<div class="parallax" data-velocity=".4" data-fit="-800" style="background-image: url(images/parallax3.jpg)"></div>
			<div class="tint"></div>
		  <div class="container">
				<div class="row wow flipInY" data-wow-delay="0.5s">
					<div class="col-md-12 text-center">
						<h2>CONTACTENOS</h2>
						<h4>NO DUDES EN CONTACTARNOS</h4>
						<div class="divider"><i class="fa fa-envelope"></i></div>
					</div>
				</div>
                
                <?php

if (!isset($_POST["submit"])) {
  ?>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<div class="row wow flipInY" data-wow-delay="0.5s">
	<div class="col-md-6 text-center">
		<input type="text" name="from" class="form-control" placeholder="Nombre">
	</div>
	<div class="col-md-6 text-center">
		<input type="text" name="subject" class="form-control" placeholder="Email">
	</div>
</div>
<div class="row wow flipInY" data-wow-delay="0.5s">
	<div class="col-md-12 text-center">
		<textarea class="form-control" rows="8" name="message" placeholder="Mensaje..."></textarea><br>
	</div>
</div>
<div class="row wow flipInY" data-wow-delay="0.5s">
	<div class="col-md-12 text-center">
        <button type="submit" class="btn btn-primary btn-lg" name="submit">ENVIAR</button>
	</div>
</div>
  </form>
  <?php 
} else {    

  if (isset($_POST["from"])) {
    $from = $_POST["from"]; 
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $message = wordwrap($message, 70);
    
    mail("chic.performance@gmail.com",$subject,$message,"From: $from\n");
    echo "Gracias por contactarnos";
  }
}
?>
                <!--
				<form role="form">
					<div class="row wow flipInY" data-wow-delay="0.5s">
						<div class="col-md-6 text-center">
							<input type="text" class="form-control" placeholder="Nombre">
						</div>
						<div class="col-md-6 text-center">
							<input type="email" class="form-control" placeholder="Email">
						</div>
					</div>
					<div class="row wow flipInY" data-wow-delay="0.5s">
						<div class="col-md-12 text-center">
							<textarea class="form-control" rows="8" placeholder="Mensaje..."></textarea>
						</div>
					</div>
					<div class="row wow flipInY" data-wow-delay="0.5s">
						<div class="col-md-12 text-center">
							<button type="submit" class="btn btn-primary btn-lg">ENVIAR</button>
						</div>
					</div>
				</form>
                      --> 
                       
                <!-- ========== MAPA ========== 
				<div >
                    <img src="images/Map.jpg">
                </div>
                <div id="googleMap" style="width:100%;height:380px;"></div>
				<!-- ========== MAPA ========== -->

                 <div id="map-canvas" style="width:100%;height:380px;"></div>
                
			  <div class="row wow bounceIn" data-wow-delay="0.5s">
					<div class="col-md-12 text-center">
						<a href="https://www.facebook.com/chicperformance" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="https://twitter.com/chicperformanc" target="_blank"><i class="fa fa-twitter"></i></a>
						<a href="https://plus.google.com/u/0/108464990824431812997/about" target="_blank"><i class="fa fa-google-plus"></i></a>
						<a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
						<a href="https://www.youtube.com/user/ivonnegomezc" target="_blank"><i class="fa fa-youtube"></i></a>
					</div>
			</div>
		  </div>
          
		</section>
        
		<!-- ========== CONTACT END ========== -->

		<!-- ========== FOOTER START ========== -->

<footer>
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-12">
						<p>
							<span><i class="fa fa-map-marker fa-lg"></i>Carrera 70C #99a - 86, Bogota.</span>
							<span><i class="fa fa-phone fa-lg"></i> <a href="tel:+5713054963">+57 1 3054963 - +57 1 4714216 </a></span>
							<span><i class="fa fa-envelope fa-lg"></i> <a href="mailto:chic.performance@gmail.com">chic.performance@gmail.com</a></span>
				    </p>
						<p>&copy; 2014 Chic Performance</p>
					</div>
				</div>
			</div>
		</footer>

		<!-- ========== FOOTER END ========== -->

		<!-- Modernizr Plugin -->
		<script src="js/modernizr.custom.97074.js"></script>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.10.2.min.js"></script>

		<!-- Bootstrap Plugins -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Retina Plugin -->
		<script src="js/retina-1.1.0.min.js"></script>

		<!-- Superslides Plugin -->
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.animate-enhanced.min.js"></script>
		<script src="js/jquery.superslides.js"></script>

		<!-- Owl Carousel Plugin -->
		<script src="js/owl.carousel.js"></script>

		<!-- Scrolly Plugin -->
		<script src="js/jquery.scrolly.js"></script>
        
        <script src="js/rs-plugin/pluginsources/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
    	<script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>

		<!-- MixItUp Plugin -->
		<script src="js/jquery.mixitup.min.js"></script>

		<!-- Fancybox Plugin -->
		<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>

		<!-- WOW Plugin -->
		<script src="js/jquery.fancybox.js"></script>

		<!-- jQuery Settings -->
		<script src="js/settings.js"></script>
        
        <script src="js/custom.js" type="text/javascript"></script>
        <script>
            $("#ctl-staff").click(function(){
               $("#menu-women").hide(); 
               $("#menu-men").hide();
                $('#men').css('border','1px solid #704b80');
                $('#women').css('border','1px solid #704b80');
                $("#menu-women").hide("slow");
                $("#menu-men").hide("slow");
                $("#menu-todos").css("visibility","visible");
                $("#menu-todos").show("slow");
                Seleccion('btn-1');
                $(".boton-prueba").removeClass('activo');
                $('#btn-1').addClass('activo');
            });
            
            $(".boton-prueba").click(function(){
                Seleccion($(this).attr("id"));
                $(".boton-prueba").removeClass('activo');
                $(this).addClass('activo');
            });
            
            $('#todos').click(function(){
                $(this).css('border','1px solid #fff');
                $('#men').css('border','1px solid #704b80');
                $('#women').css('border','1px solid #704b80');
                $("#menu-women").hide("slow");
                $("#menu-men").hide("slow");
                $("#menu-todos").css("visibility","visible");
                $("#menu-todos").show("slow");
                Seleccion('btn-1');
                $(".boton-prueba").removeClass('activo');
                $('#btn-1').addClass('activo');
            }); 
            
            $('#women').click(function(){
                $(this).css('border','1px solid #fff');
                $('#men').css('border','1px solid #704b80');
                $('#todos').css('border','1px solid #704b80');
                $("#menu-todos").css("visibility","hidden");
                $("#menu-todos").hide();
                $("#menu-men").css("visibility","hidden");
                $("#menu-men").hide();
                $("#menu-women").css("visibility","visible");
                $("#menu-women").show("slow");
                Seleccion('btn-1');
                $(".boton-prueba").removeClass('activo');
                $('#btn-1').addClass('activo');
            });
            
            $('#men').click(function(){
                $(this).css('border','1px solid #fff');
                $('#women').css('border','1px solid #704b80');
                $('#todos').css('border','1px solid #704b80');
                $("#menu-todos").css("visibility","hidden");
                $("#menu-todos").hide();
                $("#menu-women").css("visibility","hidden");
                $("#menu-women").hide();
                $("#menu-men").css("visibility","visible");
                $("#menu-men").show("slow");
                Seleccion('btn-11');
                $(".boton-prueba").removeClass('activo');
                $('#btn-11').addClass('activo');
            });
            
            function Seleccion(val){
                switch (val){
                    case 'btn-1':
                        inicio =0;
                        fin = 5;
                        break;
                    case 'btn-2':
                        inicio =6;
                        fin = 11;
                        break;
                    case 'btn-3':
                        inicio =12;
                        fin = 17;
                        break;
                    case 'btn-4':
                        inicio =18;
                        fin = 23;
                        break;
                    case 'btn-5':
                        inicio =24;
                        fin = 29;
                        break;
                    case 'btn-6':
                        inicio =30;
                        fin = 35;
                        break;
                    case 'btn-7':
                        inicio =36;
                        fin = 41;
                        break;
                    case 'btn-8':
                        inicio =42;
                        fin = 47;
                        break;
                    case 'btn-9':
                        inicio =48;
                        fin = 53;
                        break;
                    case 'btn-10':
                        inicio =54;
                        fin = 54;
                        break;
                    case 'btn-11':
                        inicio =55;
                        fin = 60;
                        break;
                    case 'btn-12':
                        inicio =61;
                        fin = 66;
                        break;
                    case 'btn-13':
                        inicio =67;
                        fin = 70;
                        break;
                }
                
                
               $(".mix").each(function(){
                    var cual = $(this).index();
                    if ((cual < inicio)||(cual >fin)){
                        $(this).hide();
                    }else{
                        $(this).show();
                    }
               });
            }
            
        </script>    
	</body>
</html>