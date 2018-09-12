{{--====== Head ============--}}
@extends('templates.desarrollo')

@section('keywords', '')
@section('title', 'Punta Palermo')
{{--====== /Head ============--}}

{{--====== Header ============--}}
@section('header-img', '/images/desarrollos/puntapalermo/head.JPG')

@section('header-title-img', '/images/desarrollos/puntapalermo/logo.png')
@section('header-title', 'PUNTA PALERMO')
@section('header-p', 'Las viviendas de Punta Palermo tienen un excelente diseño, cuentan con cocinas amplias, recámaras cómodas y la mejor distribución de espacios interiores que puedes encontrar en la zona de Tecámac.')
{{--====== /Header ============--}}

{{--====== Main ============--}}

{{-- Models Section --}}
@section('models-slide')
			<div class="swiper-wrapper swiper-wrapper-tres">
				<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/aleppo/head.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: ALEPPO</b></h5>
			      		<p>Terreno desde: 63.37 M2</p>
			      		<p>Construcción de: 83.73 M2</p>
			      		<p>Precio:$951,000.00 *</p>
	      			</div>
		      		<a href="{{ url('/modelo/aleppo') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/damasco/head.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: DAMASCO</b></h5>
			      		<p>Terreno desde: 54.00 M2</p>
			      		<p>Construcción de: 56.60 M2</p>
			      		<p>Precio:$705,000.00 *</p>
			      	</div>
		      		<a href="{{ url('/modelo/damasco') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/imperial/head.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: IMPERIAL</b></h5>
			      		<p>Terreno desde: 90.00 M2</p>
			      		<p>Construcción de: 94.00 M2</p>
			      		<p>Precio:$1,164,000.00 *</p>
		      		</div>
		      		<a href="{{ url('/modelo/imperial') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/turquia/head.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: TURQUIA</b></h5>
			      		<p>Terreno desde: 59.73 M2</p>
			      		<p>Construcción de: 66.81 M2</p>
			      		<p>Precio:$794,000.00 *</p>
	      			</div>
		      		<a href="{{ url('/modelo/turqia') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
			</div>
@endsection
{{-- /Models Section --}}





{{-- Catalogo Section --}}
@section('catalogo-p')
	<p>Ubicado sobre la Avenida Ozumbilla en el municipio de Tecamac, Punta Palermo es un fraccionamiento que se distingue por estar estratégicamente ubicado cerca de centros comerciales, escuelas, supermercados, autopistas y múltiples rutas de transporte público.</p>
	<p>Adicionalmente, el desarrollo cuenta con acceso controlado, calles con pórticos con interfón, áreas verdes dentro de privadas, parques, escuelas y comercio. Todo esto para ofrecer un entorno agradable, de alta calidad y que aumente la plusvalía de las viviendas.</p>
@endsection
@section('catalogo-btn1', '#')
@section('catalogo-btn2', '#')
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
						<img src="/images/modelo-aleppo/calle.png" alt="icono">
					</div>
					<div class="col m9 left-align beneficio-text">
						<h5><b>CALLE PRIVADA</b></h5>
						<p>Nuestros complejos tienen para ti la opción de vivir en calle privada, una característica pensada para la sana convivencia y la seguridad de tu familia.</p>
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
			</div>
			<div class="row">
				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/comercial.png" alt="icono">
					</div>
					<div class="col m9 left-align beneficio-text">
						<h5><b>ZONA COMERCIAL</b></h5>
						<p>Nuestros complejos están ubicados cercanos a centros comerciales, por lo que contarás con una amplia gama de servicios a pocos pasos de tu nuevo hogar.</p>
					</div>
				</div>
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
						<img src="/images/modelo-aleppo/vias.png" alt="icono">
					</div>
					<div class="col m9 left-align beneficio-text">
						<h5><b>VÍAS DE ACCESO</b></h5>
						<p>Para brindarte el mejor acceso, nuestros desarrollos están ubicados dentro de rutas que facilitan tu desplazamiento y el de todo aquel que te visite.</p>
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
@section('map', '/images/desarrollos/puntapalermo/mapa.jpg')
{{-- /Map Section --}}

{{-- Otros Section --}}
@section('otros-img', '/images/hidalgo.jpg')
@section('otros-title', 'MONTECARLO-TECAMÁC')
@section('otros-p', 'Te presentamos Montecarlo, ubicado en Tecámac, Estado de México, pensado en gente exigente que aprecia los detalles de vivir bien.')

@section('otros-info-img', '/images/Montecarlo.png')
@section('otros-info-title', 'MONTECARLO')
@section('otros-info-avivienda', '	40.31')
@section('otros-info-alote', 'X')
@section('otros-info-recamaras', '4')
@section('otros-info-baños', '3')

@section('otros-btn-url', 'montecarlo')
{{-- /Otros Section --}}

{{--====== /Main ============--}}