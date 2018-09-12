{{--====== Head ============--}}
@extends('templates.modelo')

@section('keywords', '')
@section('title', 'Berlin')
{{--====== /Head ============--}}

{{--====== Header ============--}}
@section('header-img', '/images/modelos/berlin/head.jpg')

@section('header-title-img', '/images/desarrollos/montebello/logo.jpg')
@section('header-title', 'MONTEBELLO')
@section('header-h4', 'BERLIN')
@section('header-price')
Desde <b>$604,000.00*</b>
@endsection
{{--====== /Header ============--}}

{{--====== Main ============--}}

{{-- Models Section --}}
@section('models-slide')
				<a class="carousel-item" href="#one!"><img src="/images/modelos/berlin/galeria-1.jpg"></a>
			    <a class="carousel-item" href="#two!"><img src="/images/modelos/berlin/galeria-2.jpg"></a>
			    <a class="carousel-item" href="#three!"><img src="/images/modelos/berlin/galeria-3.jpg"></a>
			   	<a class="carousel-item" href="#cuatro!"><img src="/images/modelos/berlin/galeria-4.jpg"></a>
			   	<a class="carousel-item" href="#cuatro!"><img src="/images/modelos/berlin/galeria-4.jpg"></a>



@endsection

@section('models-info')
{{-- <h3>¡CON <b>BONO DE DESCUENTO</b> DE HASTA <b> $45,000.00 PESOS!</b></h3> --}}
<p>El modelo Berlín tiene la particularidad de contar con una recámara en planta baja en caso que así se necesite, cuenta con ámplios espacios, y diversas áreas de guardado.</p>
@endsection

@section('models-terreno', '67.50')
@section('models-construccion', '69.00')
{{-- /Models Section --}}

{{-- Catalogo Section --}}
@section('catalogo-p')
	<p>Después del éxito obtenido en el fraccionamiento Montebello della Stanza se dio inicio a la segunda etapa llamada Jardines de Montebello donde mejoramos las especificaciones de las viviendas, el diseño arquitectónico, y sobre todo, mejoramos el entorno.  </p>
	<p>Ahora con pequeñas privadas, cada una con interfón para que puedas controlar quién entra a visitarte. Jardines de Montebello te brinda un estilo de vida diferente, con la tranquilidad que te brinda vivir con este toque de exclusividad, donde la suma de los pequeños detalles hacen la diferencia.</p>
	<p>Ubicados en la Zona Norte de la ciudad con seguridad, acceso controlado, área social, cerca de centros comerciales, escuelas y hospitales.</p>
@endsection
@section('catalogo-btn1', '#')
@section('catalogo-btn2', '#')
{{-- /Catalogo Section --}}

{{-- Beneficio Section --}}
@section('beneficios')
		<div class="row">
				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/control.png" alt="icono">
					</div>
					<div class="col m9 left-align beneficio-text">
						<h5><b>ACCESO CONTROLADO</b></h5>
						<p>Tu seguridad y la de tu familia es lo más importante, por eso hemos desarrollado un sistema de acceso donde tú mismo puedes controlar quien entra a visitarte.</p>
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

			</div>
@endsection
{{-- /Beneficio Section --}}

{{-- Plano Section --}}
@section('plano')
<div class="plano-dos">
	<img src="/images/modelos/berlin/plano-pb.png" alt="Plano">
	<img src="/images/modelos/berlin/plano-pa.png" alt="Plano">
</div>
@endsection
{{-- /Plano Section --}}

{{-- Más Section --}}
@section('mas-section', '')
@section('visita-virtual', 'display:none;')
@section('un-modelo', '')
@section('video', 'https://www.google.com/maps/embed?pb=!4v1536608677434!6m8!1m7!1sCAoSLEFGMVFpcE96UlR2R0V0MXB5UDI5c29xTHR5TTZRU3Jqdzh5bHd3WjZiVTRF!2m2!1d21.884303894561!2d-102.24262496804!3f187.3930959716684!4f-21.553628663297147!5f0.7820865974627469')
@section('mas-model')
			<div class="swiper-wrapper swiper-wrapper-one">
				<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/desarrollos/montebello/viena.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: VIENA</b></h5>
			      		<p>Terreno desde: 67.50 M2</p>
			      		<p>Construcción de: 61.92 M2</p>
			      		<p>Precio:$562.200.00 *</p>
	      			</div>
		      		<a href="{{ url('/modelo/VIENA') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
			</div>
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
@section('otros-img', '/images/villafuentes.jpg')
@section('otros-title', 'AGUASCALIENTES')
@section('otros-p', 'Ubicado en una de las mejores zonas del oriente de la ciudad, Villas de las Fuentes ofrece una ubicación privilegiada al estar cerca de servicios, escuelas, hospitales, farmacias, parques, etc.')

@section('otros-info-img', '/images/desarrollos/villafuentes/logo.jpg')
@section('otros-info-title', 'VILLAS DE LAS FUENTES')
@section('otros-info-avivienda', '42.07')
@section('otros-info-alote', '75')
@section('otros-info-recamaras', '2')
@section('otros-info-baños', '1')

@section('otros-btn-url')
	<a href="{{ url('/desarrollo/villafuentes') }}" class="btn-custom">VER DESARROLLO</a>
@endsection
{{-- /Otros Section --}}

{{--====== /Main ============--}}