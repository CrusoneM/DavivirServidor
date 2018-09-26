<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="description" content="@yield('p-cabecera')">
	<meta name="keywords" content="@yield('keywords')">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->

    <title>Davivir | @yield('title')</title>

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.0/css/swiper.min.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custom css  -->
    <link href="/css/style-dym.css" rel="stylesheet">
    <!-- Medias css  -->
    <link href="/css/medias-dym.css" rel="stylesheet">
</head>
<body>
	<header>
		<nav>
			<div class="nav-wrapper">
				<a href="/" class="brand-logo"><img src="/images/logo_davivir.png" alt="Logo"></a>
				<ul class="collapsible right">
				    <li>
				      <div class="collapsible-header"><i class="material-icons">menu</i></div>
				      <div class="collapsible-body">
				      	<ul id="collapse-mobile-desarrollo" class="collapsible">
				      	    <li>
				      	    	<div class="collapsible-header">DESARROLLOS</div>
				      	    	<div class="collapsible-body">
				      	    		<ul>
				      	    		    <li><a href="{{ url('/desarrollo/ibiza') }}">IBIZA</a></li>
				      	    		    <li><a href="{{ url('/desarrollo/montebello') }}">MONTEBELLO</a></li>
				      	    		    <li><a href="{{ url('/desarrollo/montecarlo') }}">MONTECARLO</a></li>
				      	    		    <li><a href="{{ url('/desarrollo/puntapalermo') }}">PUNTA PALERMO</a></li>
				      	    		    <li><a href="{{ url('/desarrollo/sanpatricio') }}">SAN PATRICIO</a></li>
				      	    		    <li><a href="{{ url('/desarrollo/villafuentes') }}">VILLAS DE LAS FUENTES</a></li>
				      	    		</ul>
				      	    	</div>
				      	    </li>
				      	    <li><a href="{{ url('/empresa') }}">NUESTRA EMPRESA</a></li>
				      	    <li><a href="{{ url('/contactanos') }}">CONTÁCTANOS</a></li>
				      	    <li><a href="{{ url('/blog') }}">BLOG</a></li>
				      	    <li><a href="{{ url('/contactanos') }}">COTIZA YA</a></li>
				      	</ul>
				      </div>
				    </li>
			  	</ul>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					{{-- <li><a href="{{ url('/desarrollo/montecarlo') }}">DESARROLLOS</a></li> --}}
					<li><a href='#' class="dropdown-trigger" data-target='dropdownDesarrollos'>DESARROLLOS</a></li>
		      	    <ul id='dropdownDesarrollos' class='dropdown-content'>
					    <li><a href="{{ url('/desarrollo/ibiza') }}">IBIZA</a></li>
					    <li class="divider" tabindex="-1"></li>
					    <li><a href="{{ url('/desarrollo/montebello') }}">MONTEBELLO</a></li>
					    <li class="divider" tabindex="-1"></li>
					    <li><a href="{{ url('/desarrollo/montecarlo') }}">MONTECARLO</a></li>
					    <li class="divider" tabindex="-1"></li>
					    <li><a href="{{ url('/desarrollo/puntapalermo') }}">PUNTA PALERMO</a></li>
					    <li class="divider" tabindex="-1"></li>
					    <li><a href="{{ url('/desarrollo/sanpatricio') }}">SAN PATRICIO</a></li>
					    <li class="divider" tabindex="-1"></li>
					    <li><a href="{{ url('/desarrollo/villafuentes') }}">VILLAS DE LAS FUENTES</a></li>
				  	</ul>
					<li><a href="{{ url('/empresa') }}">NUESTRA EMPRESA</a></li>
					<li><a href="{{ url('/contactanos') }}">CONTÁCTANOS</a></li>
					<li><a href="{{ url('/blog') }}">BLOG</a></li>
					<li><a href="{{ url('/contactanos') }}" id="cotizaYa">COTIZA YA</a></li>
					<li><a href="#"><i class="fas fa-bars"></i></a></li>
				</ul>
			</div>
		</nav>
		<!-- header info -->
		<div id="header-info">
			<img src="@yield('header-img')" alt="header-img">
			<div id="header-text">
				<div id="header-img"><img src="@yield('header-title-img')" alt="@yield('header-title')"></div>
				<div id="header-titles">
					<h3><b>@yield('header-title')</b></h3>
					<h2>@yield('header-p')</h2>
				</div>
			</div>
		</div>
		<!-- /header info -->
		<!-- header text mobile-->
		<div id="header-text-mobile">
			<div id="header-img"><img src="@yield('header-title-img')" alt="@yield('header-title')"></div>
			<div id="header-titles">
				<h3><b>@yield('header-title')</b></h3>
				<h2>@yield('header-p')</h2>
			</div>
		</div>
		<!-- /header text mobile-->
	</header>

	<div id="main">

		<section id="models-section">
			<h4>CONOCE LOS <b>MODELOS</b> @yield('header-title')</h4>
			<div class="swiper-container">

		      	@yield('models-slide')

		  	</div>
		  	<!-- Swiper mobile -->
		  	<div class="swiper-container-mobile">

		      	@yield('models-slide')

		  	</div>
		  	<!-- /Swiper mobile -->
		</section>

		<section id="catalogo-section">
			<div class="row">
				<div class="col m7" id="nuevo-desarrollo">
					<h4><b>TENEMOS UN NUEVO DESARROLLO DE VIVIENDA PARA TI</b></h4>
					@yield('catalogo-p')
					<a href="#models-section" class="scroll btn-custom"><b>VER MODELOS</b></a>
					<a href="@yield('catalogo-btn2')" class="btn-custom">AGENDA TU VISITA</a>
				</div>
				<div class="col m5" id="catalogo-form">
					<h4>SOLICITA MÁS <b>INFORMACIÓN</b></h4> 
					<form action="#" method="post">
						<input type="text" name="names" placeholder="Nombre y Apellido">
						<input type="email" name="email" placeholder="Email">
						<input type="number" name="phone" placeholder="Teléfono">
						<textarea name="comment" id="comment" class="materialize-textarea" placeholder="¿En que podemos ayudarte?"></textarea>
						<p>
					      <label>
					        <input type="checkbox" class="filled-in" required />
					         <span><a style="color: white" href="{{ url('/aviso') }}">ACEPTO <span style="color: #fff799">TÉRMINOS Y CONDICIONES</span></span></a>
					      </label>
					    </p>
						<button class="btn-custom-btn btn">ENVIAR</button>
					</form>
				</div>
			</div>
		</section>

		<section id="beneficios-section">
			<h4>CONOCE LOS BENEFICIOS DEVIVIR EN <b>@yield('header-title')</b></h4>
			<p><b>Detalles únicos que te harán disfrutar de<br>cada momento de tu vida.</b></p>
			@yield('beneficios')
		</section>

		<section id="equipo-section">
			<h4>CONTACTA A <b>NUESTRO EQUIPO</b> @yield('header-title')</h4>
			<div class="row">
				<div class="col s12 m6">
					<div class="col s12 m6 imagen-equipo">
						<img src="/images/RECEPCION.jpg" alt="recepcion">
					</div>
					<div class="col m6 left-align description-equipo">
						<h6>RECEPCIÓN</h6>
						<p>@yield('mensaje-recepcion')</p>
						<p class="equipo-horario"><b>@yield('hor-recepcion')</b></p>
						<div class="equipo-iconos">
							{{-- <a class="tooltipped" onclick="copyEquipoBtn(), toastEquipoBtn('telefono')" data-clipboard-text="@yield('equipo-recepcion-btn1')" data-position="bottom" data-tooltip="@yield('equipo-recepcion-btn1')"><img src="/images/Telefono.png" alt="Telefono"></a> --}}
							
							<a href="tel:@yield('equipo-recepcion-btn1')" ><img src="/images/Telefono.png" alt="Telefono"></a>

							<a href="mailto:@yield('equipo-recepcion-btn2')" ><img src="/images/Mensaje.png" alt="mensajes"></a>

							<a href="https://api.whatsapp.com/send?phone=@yield('equipo-recepcion-btn3')" target="_blank" style="@yield('dis-whatapp')""><img src="/images/Whatsapp.png" alt="Whatsapp"></a>
						</div>
					</div>
				</div>
				<div class="col s12 m6">
					<div class="col s12 m6 imagen-equipo">
						<img src="/images/CALL-CENTER.jpg" alt="recepcion">
					</div>
					<div class="col m6 left-align description-equipo">
						<h6>CALL CENTER</h6>
						<p>@yield('mensaje-call')</p>
						<p class="equipo-horario"><b>@yield('hor-call')</b></p>
						<div class="equipo-iconos">
							<a href="tel:@yield('equipo-callcenter-btn1')" ><img src="/images/Telefono.png" alt="Telefono"></a>

							<a href="mailto:@yield('equipo-callcenter-btn2')" ><img src="/images/Mensaje.png" alt="mensajes"></a>

							<a <a href="https://api.whatsapp.com/send?phone=@yield('equipo-callcenter-btn3')" target="_blank" style="@yield('dis-whatapp')"><img src="/images/Whatsapp.png" alt="Whatsapp"></a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="map-section" class="center-align">
			<h4>VISITA TU <b>PRÓXIMO HOGAR</b></h4>
			<iframe src="@yield('google-map')" width="1700" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			<p><b>LLEGA A @yield('header-title') CON UN SOLO CLIC</b></p>
			<a href="https://waze.com/ul?ll=@yield('la'),@yield('lg')&navigate=yes&z=10" target="_blank" class="btn-custom">WAZE</a>
			<a href="@yield('map')" style="@yield('btn-pdf')" class="btn-custom" download>DESCARGAR PDF</a>
			<a href="@yield('g-map')" target="_blank" class="btn-custom"><i class="fas fa-map-marker-alt"></i> ¿CÓMO LLEGAR A @yield('header-title')?</a>
			<a href="/contactanos" class="btn-custom">AGENDA TU VISITA</a>
		</section>

		<section id="otros-section">
			<h4 class="center-align">CONOCE OTROS DE <b>NUESTROS DESAROLLOS</b></h4>
			<div class="row otros-section">
				<div class="col m7">
					<img src="@yield('otros-img')" alt="Otros desarrollos">
				</div>
				<div class="col m5">
					<div id="otros-text">
						<h5><b>@yield('otros-title')</b></h5>
						<p>@yield('otros-p')</p>
					</div>
					<div id="otros-info">
						<img src="@yield('otros-info-img')" alt="Bosques" id="otros-bosques">
						<h5><b>@yield('otros-info-title')</b></h5>
						<p>Desde</p>
						<div class="row center-align" id="otros-caracteristicas">
							<div class="col m3">
								<h5>ÁREA DE VIVIENDA</h5>
								<p><b>@yield('otros-info-avivienda')<sup><b>2</b></sup></b></p>
							</div>
							<div class="col m3">
								<h5>ÁREA DE LOTE</h5>
								<p><b>@yield('otros-info-alote')<sup><b>2</b></sup></b></p>
							</div>
							<div class="col m3">
								<h5>RECAMARAS</h5>
								<p><b>@yield('otros-info-recamaras')</b></p>
							</div>
							<div class="col m3">
								<h5>BAÑOS</h5>
								<p><b>@yield('otros-info-baños')</b></p>
							</div>
						</div>
						<a href="@yield('otros-btn-url')" class="btn-custom">VER DESARROLLO</a>
					</div>
				</div>
			</div>
			<!-- Otros Section Mobile -->
			<div class="otros-section-mobile">
				<div class="otro-otros-section-mobile z-depth-2">
					<div><img src="@yield('otros-img')" alt="Otros desarrollos"></div>
					<div class="otro-text-section-mobile">
						<h5><b>@yield('otros-title')</b></h5>
						<p>@yield('otros-p')</p>
						<p class="otros-text-description-mobile">
							Área de Vivienda: @yield('otros-info-avivienda') M2 <br>
							Área de Lote: @yield('otros-info-alote') M2 <br>
							Recamaras: @yield('otros-info-recamaras') <br>
							Baños: @yield('otros-info-baños')
						</p>
						<a href="@yield('otros-btn-url')" class="btn-custom">VER DESARROLLO</a>
					</div>
				</div>
			</div>
			<!-- /Otros Section Mobile -->
		</section>

		<section id="catalogo-footer">
			<div class="row">
				<div class="col m5 offset-m7" id="catalogo-form-footer">
					{{-- <img src="/images/imagen-contactanos.jpg" alt="Img-catalogo"> --}}
					<h4>SOLICITA MÁS <b>INFORMACIÓN</b></h4> 
					<form action="#" method="post">
						<input type="text" name="names" placeholder="Nombre y Apellido">
						<input type="email" name="email" placeholder="Email">
						<input type="number" name="phone" placeholder="Teléfono">
						<textarea name="comment" id="comment" class="materialize-textarea" placeholder="¿En que podemos ayudarte?"></textarea>
						<p>
					      <label>
					        <input type="checkbox" class="filled-in" required />
					        <span><a style="color: white" href="{{ url('/aviso') }}">ACEPTO <span style="color: #fff799">TÉRMINOS Y CONDICIONES</span></span></a>
					      </label>
					    </p>
						<button class="btn-custom-btn btn">ENVIAR</button>
					</form>
				</div>
			</div>
		</section>

	</div>

	<footer>
		<img src="/images/logo.png" alt="logo" class="left">
		<div class="right">
			<a href="#"><img src="/images/blog/facebook.png" alt="fb"></a>
			<p>| Aviso de privacidad | DAVIVIR 2018 México</p>
		</div>
	</footer>

	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<!-- Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <!-- Swiper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.0/js/swiper.min.js"></script>
    <!-- ClipboardJs-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
    <!-- CustomJs-->
    <script src="/js/custom.js"></script>
	<!-- Scroll-->
    <script src="/js/scroll-efect.js"></script>
</body>
</html>