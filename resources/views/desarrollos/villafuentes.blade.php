{{--====== Head ============--}}
@extends('templates.desarrollo')

@section('keywords', '')
@section('title', 'Villas de las Fuentes')
{{--====== /Head ============--}}

{{--====== Header ============--}}
@section('header-img', '/images/desarrollos/villafuentes/head.jpg')

@section('header-title-img', '/images/desarrollos/villafuentes/logo.jpg')
@section('header-title', 'VILLAS DE LAS FUENTES')
@section('header-p', 'Ubicado en una de las mejores zonas del oriente de la ciudad, Villas de las Fuentes ofrece una ubicación privilegiada al estar cerca de servicios, escuelas, hospitales, farmacias, parques, etc.')
{{--====== /Header ============--}}

{{--====== Main ============--}}

{{-- Models Section --}}
@section('models-slide')
			<div class="swiper-wrapper swiper-wrapper-one">
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/minerva/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: MINERVA</b></h5>
			      		<p>Terreno desde: 76.50 M2</p>
			      		<p>Construcción de: 41.67 M2</p>
			      		<p>Precio:$370,000.00 *</p>
			      	</div>
		      		<a href="{{ url('/modelo/minerva') }}" class="btn-custom">VER MODELO</a>
		      	</div>
			</div>
@endsection
{{-- /Models Section --}}

{{-- Catalogo Section --}}
@section('catalogo-p')
	<p>Un fraccionamiento con una ubicación que facilita tu desplazamiento al contar con múltiples rutas de camiones y transporte público en general.</p>
	<p>El fraccionamiento ofrece viviendas con los más amplios espacios, en un entorno pensado para una sana convivencia y un buen nivel de vida de sus residentes.</p>
	<p>Además, por tener viviendas con eco tecnologías, Villas de las Fuentes te ayuda a ahorrar en gastos de luz y agua, al tiempo que ayudas a cuidar el medio ambiente.</p>
@endsection
@section('catalogo-btn1', '#models-section')
@section('catalogo-btn2', '/contactanos')
{{-- /Catalogo Section --}}

{{-- Beneficio Section --}}
@section('beneficios')

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
@section('equipo-recepcion-btn1', '55-84-49-33-40')
@section('equipo-recepcion-btn2', 'montecarlo.recepcion@davivir.com.mx')
@section('equipo-recepcion-btn3', '55-84-49-33-40')

@section('equipo-callcenter-btn1', '55-59-34-71-93')
@section('equipo-callcenter-btn2', 'montecarlo.recepcion@davivir.com.mx')
@section('equipo-callcenter-btn3', '55-59-34-71-93')
{{-- /Equipo Section --}}

{{-- Map Section --}}
@section('map', '/images/desarrollos/villafuentes/mapa.png')
{{-- /Map Section --}}

{{-- Otros Section --}}
@section('otros-img', '/images/desarrollos/sanpatricio/head2.jpg')
@section('otros-title', 'AGUASCALIENTES')
@section('otros-p', 'Es el nuevo desarrollo de Davivir en el oriente de la ciudad. Ven, conoce y entérate por qué este desarrollo será tan especial y único!')

@section('otros-info-img', '/images/desarrollos/sanpatricio/logo_sanpatricio.png')
@section('otros-info-title', 'COLINAS DE SAN PATRICIO')
@section('otros-info-avivienda', '51.35')
@section('otros-info-alote', '75')
@section('otros-info-recamaras', '2')
@section('otros-info-baños', '1')

@section('otros-btn-url', 'sanpatricio')
{{-- /Otros Section --}}

{{--====== /Main ============--}}