{{--====== Head ============--}}
@extends('templates.modelo')

@section('keywords', '')
@section('title', 'Minerva')
{{--====== /Head ============--}}

{{--====== Header ============--}}
@section('header-img', '/images/modelos/minerva/head.jpg')

@section('header-title-img', '/images/desarrollos/villafuentes/logo.jpg')
@section('header-title', 'VILLAS DE LAS FUENTES')
@section('header-h4', 'MINERVA')
@section('header-price')
Desde <b>$370,000.00*</b>
@endsection
{{--====== /Header ============--}}

{{--====== Main ============--}}

{{-- Models Section --}}
@section('models-slide')
				<a class="carousel-item" href="#one!"><img src="/images/modelos/minerva/galeria-1.jpg"></a>
			    <a class="carousel-item" href="#two!"><img src="/images/modelos/minerva/galeria-2.jpg"></a>
			    <a class="carousel-item" href="#three!"><img src="/images/modelos/minerva/galeria-3.jpg"></a>
			    <a class="carousel-item" href="#three!"><img src="/images/modelos/minerva/galeria-4.jpg"></a>
@endsection

@section('models-info')
{{-- <h3>¡CON <b>BONO DE DESCUENTO</b> DE HASTA <b> $45,000.00 PESOS!</b></h3> --}}
<p>Ideal como su primera casa, ofrece todo lo necesario para crear un ambiente confortable y acogedor y la posibilidad de crecer conforme crece la familia. Con acabados de excelente calidad y detalles arquitectónicos que hacen la diferencia</p>
@endsection

@section('models-terreno', '76.50')
@section('models-construccion', '41.67')
{{-- /Models Section --}}


{{-- Catalogo Section --}}
@section('catalogo-p')
<p>Ubicado en una de las mejores zonas del oriente de la ciudad, Villas de las Fuentes ofrece una ubicación privilegiada al estar cerca de servicios, escuelas, hospitales, farmacias, parques, etc. </p>
<p>Un fraccionamiento con una ubicación que facilita tu desplazamiento al contar con múltiples rutas de camiones y transporte público en general. </p>
<p>
El fraccionamiento ofrece viviendas con los más amplios espacios, en un entorno pensado para una sana convivencia y un buen nivel de vida de sus residentes. </p>
<p>
Además, por tener viviendas con eco tecnologías, Villas de las Fuentes te ayuda a ahorrar en gastos de luz y agua, al tiempo que ayudas a cuidar el medio ambiente.</p>
@endsection
@section('catalogo-btn1', '#')
@section('catalogo-btn2', '#')
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

{{-- Plano Section --}}
@section('plano')
<div class="">
	<img src="/images/modelos/minerva/plano.jpg" alt="Plano">
</div>
@endsection
{{-- /Plano Section --}}

{{-- Más Section --}}
@section('mas-section', 'display:none;')
@section('visita-virtual', 'display:none;')
@section('un-modelo', 'display:none;')
@section('video', 'https://www.google.com/maps/embed?pb=!4v1536608677434!6m8!1m7!1sCAoSLEFGMVFpcE96UlR2R0V0MXB5UDI5c29xTHR5TTZRU3Jqdzh5bHd3WjZiVTRF!2m2!1d21.884303894561!2d-102.24262496804!3f187.3930959716684!4f-21.553628663297147!5f0.7820865974627469')
@section('mas-model')

@endsection
{{-- /Más Section --}}

{{-- Equipo Section --}}
@section('equipo-recepcion-btn1', '#')
@section('equipo-recepcion-btn2', '#')
@section('equipo-recepcion-btn3', '#')

@section('equipo-callcenter-btn1', '#')
@section('equipo-callcenter-btn2', '#')
@section('equipo-callcenter-btn3', '#')
{{-- /Equipo Section --}}

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

@section('otros-btn-url')
	<a href="{{ url('/desarrollo/sanpatricio') }}" class="btn-custom">VER DESARROLLO</a>
@endsection
{{-- /Otros Section --}}

{{--====== /Main ============--}}