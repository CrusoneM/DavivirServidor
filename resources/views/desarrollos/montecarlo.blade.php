{{--====== Head ============--}}
@extends('templates.desarrollo')

@section('keywords', '')
@section('title', 'Montecarlo')
{{--====== /Head ============--}}

{{--====== Header ============--}}
@section('header-img', '/images/desarrollo-sanpatricio/DSC_0152.jpg')

@section('header-title-img', '/images/Montecarlo.png')
@section('header-title', 'MONTECARLO')
@section('header-p', 'Un nuevo desarrollo ubicado en Técamac, Estado de México, pensado en gente exigente que aprecia los detalles de vivir bien.')
{{--====== /Header ============--}}

{{--====== Main ============--}}

{{-- Models Section --}}
@section('models-slide')
<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/ESTADO-DE-MÉXICO---TECÁMAC-Montecarlo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: FORTEZZA</b></h5>
			      		<p>Terreno desde:N/A m2</p>
			      		<p>Construcción de:40.31 hasta 52.27 m2</p>
			      		<p>Precio:$495.850.00</p>
			      	</div>
		      		<a href="#" class="btn-custom">VER DESARROLLO</a>
			      </div>
			      <div class="swiper-slide z-depth-2">
			      	<div><img src="/images/ESTADO-DE-MÉXICO---TECÁMAC-Montecarlo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: DAMASCO(PROXIMAMENTE)</b></h5>
			      		<p>Terreno desde:N/A m2</p>
			      		<p>Construcción de:40.31 hasta 52.27 m2</p>
			      		<p>Precio:$495.850.00</p>
			      	</div>
		      		<a href="#" class="btn-custom">VER DESARROLLO</a>
			      </div>
@endsection
{{-- /Models Section --}}

{{-- Catalogo Section --}}
@section('catalogo-p')
<p>Te presentamos Montecarlo, un nuevo desarrollo ubicado en Tecámac, Estado de México, pensado en gente exigente que aprecia los detalles de vivir bien.</p>
					<p>Muy cerca del centro del municipio de Tecámac, con lo cual contarás con muchos servicios a sólo unos pasos. Adicionalmente estarás muy cerca de la cuidad de México con múltiples vías de acceso.</p>
					<p>¿Qué estás esperando? Ven a conocernos y sé de los primeros en apartar y decir:</p>
					<p>Quiero vivir en Montecarlo! Quiero vivir con altura!</p>
@endsection
@section('catalogo-btn1', '#')
@section('catalogo-btn2', '#')
{{-- /Catalogo Section --}}

{{-- Map Section --}}
@section('map', '/images/map.jpg')
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

@section('otros-btn-url', '#')
{{-- /Otros Section --}}

{{--====== /Main ============--}}