{{--====== Head ============--}}
@extends('templates.desarrollo')

@section('keywords', '')
@section('title', 'Montecarlo')
{{--====== /Head ============--}}

{{--====== Header ============--}}
@section('header-img', '/images/desarrollos/montecarlo/header.jpg')

@section('header-title-img', '/images/desarrollos/montecarlo/Montecarlo.png')
@section('header-title', 'MONTECARLO')
@section('header-p', 'Un nuevo desarrollo ubicado en Técamac, Estado de México, pensado en gente exigente que aprecia los detalles de vivir bien.')
{{--====== /Header ============--}}

{{--====== Main ============--}}

{{-- Models Section --}}
@section('models-slide')
			<div class="swiper-wrapper">
				<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/fortezza/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: FORTEZZA</b></h5>
			      		<p>Terreno desde: N/A</p>
			      		<p>Construcción de: Desde 40.31 hasta 52.27</p>
			      		<p>Precio:$467,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/fortezza') }}" class="btn-custom">VER MODELO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/montecarlo-damasco/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: DAMASCO</b></h5>
			      		<p>Terreno desde: 47.52 M2</p>
			      		<p>Construcción de: 56.60 M2</p>
			      		<p>Precio:$571,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/montecarlo-damasco') }}" class="btn-custom">VER MODELO</a>
		      	</div>
			</div>
@endsection
{{-- /Models Section --}}

{{-- Catalogo Section --}}
@section('catalogo-p')
	<p>Davivir tiene un nuevo desarrollo de vivienda para ti. Te presentamos Montecarlo, ubicado en Tecámac, Estado de México, pensado en gente exigente que aprecia los detalles de vivir bien. Conoce Montecarlo y experimenta el placer de Vivir con altura! Al elegir vivir en Montecarlo, podrás estar ubicado muy cerca del centro del municipio de Tecámac, con lo cual contarás con muchos servicios a sólo unos pasos. Adicionalmente, por estar en Tecámac, estarás muy cerca de la ciudad de México y con múltiples vías de acceso a ella como la autopista México Pachuca, la carretera libre o incluso, la nueva línea de Mexibus que está próxima a ser inaugurada. En Montecarlo podrás elegir entre vivir en casas en calles privadas o departamentos en edificios de tres niveles también en calles privadas.</p>
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
						<img src="/images/modelo-aleppo/deporte.png" alt="icono">
					</div>
					<div class="col m9 left-align beneficio-text">
						<h5><b>ÁREA DEPORTIVA</b></h5>
						<p>Te ofrecemos áreas deportivas compuestas por amplias canchas, en las que tanto tú como tu familia podrán ejercitarse practicando sus deportes favoritos.</p>
					</div>
				</div>
				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/regimen.png" alt="icono">
					</div>
					<div class="col m9 left-align beneficio-text">
						<h5><b>REGIMEN CONDOMINAL</b></h5>
						<p>El mantenimiento y la administración de nuestros desarrollos está a cargo de un estricto régimen de condominio, que tiene como objetivo asegurar el buen vivir.</p>
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
						<img src="/images/modelo-aleppo/vias.png" alt="icono">
					</div>
					<div class="col m9 left-align beneficio-text">
						<h5><b>VÍAS DE ACCESO</b></h5>
						<p>Para brindarte el mejor acceso, nuestros desarrollos están ubicados dentro de rutas que facilitan tu desplazamiento y el de todo aquel que te visite.</p>
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

@section('mensaje-recepcion', 'Ahora que ya sabes que tenemos la mejor opción para ti, no dudes en contactarnos')
@section('hor-recepcion', 'Lunes a Domingo de 10:00 AM a 06:00 PM')
@section('equipo-recepcion-btn1', '558449340')
@section('equipo-recepcion-btn2', 'montecarlo.recepcion@davivir.com.mx')
@section('equipo-recepcion-btn3', '5215584493340')

@section('mensaje-call', 'Ahora que ya sabes que tenemos la mejor opción para ti, no dudes en contactarnos.')
@section('hor-call', 'Lunes a Viernes de 9:00 AM a 06:00 PM')
@section('equipo-callcenter-btn1', '555937193')
@section('equipo-callcenter-btn2', 'montecarlo.recepcion@davivir.com.mx')
@section('equipo-callcenter-btn3', '5215584493340')

{{-- /Equipo Section --}}

{{-- Map Section --}}
@section('map', '/images/desarrollos/montecarlo/map.jpg')
@section('la', '19.709784')
@section('lg', '-98.958067')
@section('g-map','https://www.google.com/maps/place/Desarrollo+Montecarlo,+Davivir/@19.7094958,-98.9602449,17z/data=!3m1!4b1!4m12!1m6!3m5!1s0x85d1ecc143fd62d1:0x983ffe1b23398e64!2sDESARROLLO+MONTECARLO!8m2!3d19.7067385!4d-98.951101!3m4!1s0x85d1ecdb316929e7:0x5d86a96044d19873!8m2!3d19.7094908!4d-98.9580562')
{{-- /Map Section --}}

{{-- Otros Section --}}
@section('otros-img', '/images/hidalgo.jpg')
@section('otros-title', 'HIDALGO - TIZAYUCA')
@section('otros-p', 'Un nuevo desarrollo ubicado en Técamac, Estado de México pensado en gente exigente que aprecia los detalles de vivir bien.')

@section('otros-info-img', '/images/Bosques-de-Ibiza.png')
@section('otros-info-title', 'BOSQUES DE IBIZA')
@section('otros-info-avivienda', '105')
@section('otros-info-alote', '2')
@section('otros-info-recamaras', '4')
@section('otros-info-baños', '3')

@section('otros-btn-url', 'ibiza')
{{-- /Otros Section --}}

{{--====== /Main ============--}}