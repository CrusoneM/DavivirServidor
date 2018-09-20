{{--====== Head ============--}}
@extends('templates.desarrollo')

@section('keywords', '')
@section('title', 'San Patricio')
{{--====== /Head ============--}}

{{--====== Header ============--}}
@section('header-img', '/images/desarrollos/sanpatricio/head.jpg')

@section('header-title-img', '/images/desarrollos/sanpatricio/logo_sanpatricio.png')
@section('header-title', 'COLINAS DE SAN PATRICIO')
@section('header-p', 'Colinas de San Patricio es el nuevo desarrollo de Davivir en el oriente de la ciudad. Ven, conoce y entérate por qué este desarrollo será tan especial y único!')
{{--====== /Header ============--}}

{{--====== Main ============--}}

{{-- Models Section --}}
@section('models-slide')
			<div class="swiper-wrapper swiper-wrapper-tres">
				<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/adare/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: ADARE</b></h5>
			      		<p>Terreno desde: 75.00 M2</p>
			      		<p>Construcción de: 71.75 M2</p>
			      		<p>Precio:$574.500.00 *</p>
	      			</div>
		      		<a href="{{ url('/modelo/adare') }}" class="btn-custom">VER MODELO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/bray/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: BRAY</b></h5>
			      		<p>Terreno desde: 75.00 M2</p>
			      		<p>Construcción de: 51.49 M2</p>
			      		<p>Precio:$490.000.00 *</p>
			      	</div>
		      		<a href="{{ url('/modelo/bray') }}" class="btn-custom">VER MODELO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/ennis/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: ENNIS</b></h5>
			      		<p>Terreno desde: 75.00 M2</p>
			      		<p>Construcción de: 65.53 M2</p>
			      		<p>Precio:$545.000.00 *</p>
		      		</div>
		      		<a href="{{ url('/modelo/ennis') }}" class="btn-custom">VER MODELO</a>
		      	</div>
			</div>
@endsection
{{-- /Models Section --}}

{{-- Catalogo Section --}}
@section('catalogo-p')
	<p>Colinas de San Patricio es el nuevo desarrollo de Davivir en el oriente de la ciudad. Ven, conoce y entérate por qué este desarrollo será tan especial y único! Al vivir en Colinas de San Patricio contarás con muchos servicios cómo escuelas, universidades, hospitales y tiendas de auto servicio, a sólo unos pasos de tu hogar. Adicionalmente, al estar ubicado frente a la Línea Verde, tendrás todos los espacios recreativos, deportivos y de convivencia familiar que este parque lineal ofrece. </p>
	<p>En Colinas de San Patricio contaremos con cuatro modelos distintos de vivienda, para que puedas escoger el que más se acomoda a tus necesidades y presupuesto. Adicionalmente, al adquirir tu vivienda en este desarrollo, contarás con viviendas ecológicas de una excelente distribución, calidad y diseño, además de tener parques dentro del desarrollo y accesos controlados en las calles, para que puedas vivir con tranquilidad.</p>
@endsection
@section('catalogo-btn1', '#models-section')
@section('catalogo-btn2', '/contactanos')
{{-- /Catalogo Section --}}

{{-- Beneficio Section --}}
@section('beneficios')
		<div class="row">
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
				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/parque.png" alt="icono">
					</div>
					<div class="col m9 left-align beneficio-text">
						<h5><b>PARQUES</b></h5>
						<p>¿Buscas más áreas verdes? Pregunta por nuestros complejos cercanos a los más espaciosos parques y pulmones vegetales de la ciudad.</p>
					</div>
				</div>
			</div>
			<div class="row">
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

@section('dis-whatapp', 'display:none')

@section('mensaje-recepcion', 'Ahora que ya sabes que tenemos la mejor opción para ti, no dudes en contactarnos')
@section('hor-recepcion', 'De Lunes a Viernes de 8:00 AM a 2:00 PM y de 3:00 PM a 6:00 PM')
@section('equipo-recepcion-btn1', '9961111')
@section('equipo-recepcion-btn2', 'ventas@davivir.com.mx')

@section('mensaje-call', 'Ahora que ya sabes que tenemos la mejor opción para ti, no dudes en contactarnos.')
@section('hor-call', 'De Lunes a Viernes de 9:00 AM a 06:00 PM')
@section('equipo-callcenter-btn1', '9961111')
@section('equipo-callcenter-btn2', 'ventas@davivir.com.mx')

{{-- /Equipo Section --}}

{{-- Map Section --}}
@section('map', '/images/desarrollos/sanpatricio/mapa.jpg')
@section('btn-pdf', 'display:none')
@section('la', '21.883951')
@section('lg', '-102.236948')
@section('g-map','https://www.google.com/maps/place/21.883951,+-102.236948/@21.8838064,-102.2372686,439m/data=!3m1!1e3!4m13!1m7!3m6!1s0x8429f1f22dfa0045:0x70418829a2ce40ec!2sSan+Francisco+de+Los+Viveros+%26+Av+Vallarta,+Aguascalientes,+Ags.,+Mexico!3b1!8m2!3d21.8838328!4d-102.2369492!3m4!7e2!8m2!3d21.8839508!4d-102.2369483')
{{-- /Map Section --}}

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

@section('otros-btn-url', 'villafuentes')
{{-- /Otros Section --}}

{{--====== /Main ============--}}