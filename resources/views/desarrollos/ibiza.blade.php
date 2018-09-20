{{--====== Head ============--}}
@extends('templates.desarrollo')

@section('keywords', '')
@section('title', 'Bosques de Ibiza')
{{--====== /Head ============--}}

{{--====== Header ============--}}
@section('header-img', '/images/desarrollos/ibiza/head.jpg')

@section('header-title-img', '/images/desarrollos/ibiza/logo.png')
@section('header-title', 'BOSQUES DE IBIZA')
@section('header-p', 'El fraccionamiento Bosques de Ibiza está situado en el municipio de Tizayuca, estado de Hidalgo, a tan solo 40 minutos del DF.')
{{--====== /Header ============--}}

{{--====== Main ============--}}

{{-- Models Section --}}
@section('models-slide')
			<div class="swiper-wrapper swiper-wrapper-tres">
				<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/cantabria/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: CANTABRIA</b></h5>
			      		<p>Terreno desde: 90 M2</p>
			      		<p>Construcción de: 64.10 M2</p>
			      		<p>Precio:$577,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/cantabria') }}" class="btn-custom">VER MODELO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/cartagena/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: CARTAGENA</b></h5>
			      		<p>Terreno desde: 67.50 M2</p>
			      		<p>Construcción de: 70.23 M2</p>
			      		<p>Precio:$553,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/cartagena') }}" class="btn-custom">VER MODELO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/corcega/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: CÓRCEGA</b></h5>
			      		<p>Terreno desde: 67.50 M2</p>
			      		<p>Construcción de: 66.02 M2</p>
			      		<p>Precio:$506,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/corcega') }}" class="btn-custom">VER MODELO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/mykonos/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: MYKONOS</b></h5>
			      		<p>Terreno desde: 67.50 M2</p>
			      		<p>Construcción de: 41.78 M2</p>
			      		<p>Precio:$440,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/mykonos') }}" class="btn-custom">VER MODELO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/santorini-pa/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: SANTORINI (PLANTA ALTA)</b></h5>
			      		<p>Terreno desde: 90.00 M2</p>
			      		<p>Construcción de: 39.68 M2</p>
			      		<p>Precio:$356,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/santorinipa') }}" class="btn-custom">VER MODELO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/santorini-pb/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: SANTORINI (PLANTA BAJA)</b></h5>
			      		<p>Terreno desde: 90.00 M2</p>
			      		<p>Construcción de: 45.63 M2</p>
			      		<p>Precio:$380,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/santorinipb') }}" class="btn-custom">VER MODELO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/terranova-plus/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: TERRANOVA PLUS</b></h5>
			      		<p>Terreno desde: 90.00 M2</p>
			      		<p>Construcción de: 49.68 M2</p>
			      		<p>Precio:$500,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/terranova-plus') }}" class="btn-custom">VER MODELO</a>
		      	</div>
			</div>
@endsection
{{-- /Models Section --}}

{{-- Catalogo Section --}}
@section('catalogo-p')
	<p>Un proyecto que cuenta con elementos como viviendas de excelente diseño con cocinas y recámaras muy amplias. </p>
	<p>Adicionalmente, el fraccionamiento cuenta con acceso controlado, escuelas, jardín de niños, locales comerciales, áreas verdes y parques con juegos infantiles. Todo esto para que tú y tu familia vivan en un ambiente seguro y cómodo. </p>
	<p>Y lo mejor, en Bosques de Ibiza sí te alcanza para comprar tu casa propia!</p>
@endsection
@section('catalogo-btn1', '#models-section')
@section('catalogo-btn2', '/contactanos')
{{-- /Catalogo Section --}}

{{-- Beneficio Section --}}
@section('beneficios')
			<div class="row">
				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/escuela.png" alt="icono">
					</div>
					<div class="col m9 left-align beneficio-text">
						<h5><b>ESCUELA</b></h5>
						<p>En cualquiera de nuestros desarrollos podrás estar tranquilo al saber que tus hijos estudiarán en excelentes escuelas, a pocos kilómetros de tu nuevo hogar.</p>
					</div>
				</div>
				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/verde.png" alt="icono">
					</div>
					<div class="col m9 left-align beneficio-text">
						<h5><b>ÁREAS VERDES</b></h5>
						<p>En cada uno de nuestros desarrollos hemos diseñado exclusivas áreas verdes, donde las mascotas de la familia podrán ejercitarse al aire libre.</p>
					</div>
				</div>
				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/comercial.png" alt="icono">
					</div>
					<div class="col m9 left-align beneficio-text">
						<h5><b>ZONA COMERCIAL</b></h5>
						<p>Nuestros complejos están ubicados cercanos a centros comerciales, por lo que contarás con una amplia gama de servicios a pocos pasos de tu nuevo hogar.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/parque.png" alt="icono">
					</div>
					<div class="col m9 left-align beneficio-text">
						<h5><b>PARQUES</b></h5>
						<p>¿Buscas más áreas verdes? Pregunta por nuestros complejos cercanos a los más espaciosos parques y pulmones vegetales de la ciudad.</p>
					</div>
				</div>
				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/control.png" alt="icono">
					</div>
					<div class="col m9 left-align beneficio-text">
						<h5><b>ACCESO CONTROLADO</b></h5>
						<p>Tu seguridad y la de tu familia es lo más importante, por eso hemos desarrollado un sistema de acceso donde tú mismo puedes controlar quien entra a visitarte.</p>
					</div>
				</div>
			</div>
@endsection
{{-- /Beneficio Section --}}

{{-- Equipo Section --}}
@section('equipo-recepcion-btn1', '#')
@section('equipo-recepcion-btn2', '#')
@section('equipo-recepcion-btn3', '#')

@section('equipo-callcenter-btn1', '#')
@section('equipo-callcenter-btn2', '#')
@section('equipo-callcenter-btn3', '#')
{{-- /Equipo Section --}}

{{-- Map Section --}}
@section('map', '/images/desarrollos/ibiza/mapa.jpg')
{{-- /Map Section --}}

{{-- Otros Section --}}
@section('otros-img', '/images/villafuentes.jpg')
@section('otros-title', 'VILLAS DE LAS FUENTES')
@section('otros-p', 'Ubicado en una de las mejores zonas del oriente de la ciudad, Villas de las Fuentes ofrece una ubicación privilegiada al estar cerca de servicios, escuelas, hospitales, farmacias, parques, etc.')

@section('otros-info-img', '/images/desarrollos/villafuentes/logo.jpg')
@section('otros-info-title', 'VILLAS DE LAS FUENTES')
@section('otros-info-avivienda', '42.07')
@section('otros-info-alote', '75')
@section('otros-info-recamaras', '2')
@section('otros-info-baños', '1')

@section('otros-btn-url', 'villafuentes')
{{-- /Otros Section --}}

{{--====== /Main ============--}}