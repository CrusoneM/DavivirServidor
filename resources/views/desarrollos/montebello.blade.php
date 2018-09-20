{{--====== Head ============--}}
@extends('templates.desarrollo')

@section('keywords', '')
@section('title', 'Montebello')
{{--====== /Head ============--}}

{{--====== Header ============--}}
@section('header-img', '/images/desarrollos/montebello/DSC_0093_04321.jpg')

@section('header-title-img', '/images/desarrollos/montebello/logo.jpg')
@section('header-title', 'JARDINES DE MONTEBELLO')
@section('header-p', 'Jardines de Montebello te brinda un estilo de vida diferente, con la tranquilidad que te brinda vivir con este toque de exclusividad, donde la suma de los pequeños detalles hacen la diferencia.')
{{--====== /Header ============--}}

{{--====== Main ============--}}

{{-- Models Section --}}
@section('models-slide')
			<div class="swiper-wrapper swiper-wrapper">
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/viena/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: VIENA</b></h5>
			      		<p>Terreno desde: 67.50 M2</p>
			      		<p>Construcción de: 61.92 M2</p>
			      		<p>Precio:$562,200.00 *</p>
			      	</div>
		      		<a href="{{ url('/modelo/viena') }}" class="btn-custom">VER MODELO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/berlin/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: BERLÍN</b></h5>
			      		<p>Terreno desde: 67.50 M2</p>
			      		<p>Construcción de: 69.00 M2</p>
			      		<p>Precio:$604,000.00 *</p>
		      		</div>
		      		<a href="{{ url('/modelo/berlin') }}" class="btn-custom">VER MODELO</a>
		      	</div>
			</div>
@endsection
{{-- /Models Section --}}

{{-- Catalogo Section --}}
@section('catalogo-p')
	<p>Después del éxito obtenido en el fraccionamiento Montebello della Stanza se dio inicio a la segunda etapa llamada Jardines de Montebello donde mejoramos las especificaciones de las viviendas, el diseño arquitectónico, y sobre todo, mejoramos el entorno.  </p>
	<p>Ahora con pequeñas privadas, cada una con interfón para que puedas controlar quién entra a visitarte. Jardines de Montebello te brinda un estilo de vida diferente, con la tranquilidad que te brinda vivir con este toque de exclusividad, donde la suma de los pequeños detalles hacen la diferencia.</p>
	<p>Ubicados en la Zona Norte de la ciudad con seguridad, acceso controlado, área social, cerca de centros comerciales, escuelas y hospitales.</p>
@endsection
@section('catalogo-btn1', '#models-section')
@section('catalogo-btn2', '/contactanos')
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

@section('google-map', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3700.9016183885783!2d-102.27388308521219!3d21.93833328551278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjHCsDU2JzE4LjAiTiAxMDLCsDE2JzE4LjEiVw!5e0!3m2!1ses-419!2sve!4v1537478108705')
@section('map', '/images/desarrollos/montebello/mapa.png')
@section('btn-pdf', 'display:none')
@section('la', '21.938329')
@section('lg', '-102.271701')
@section('g-map',"https://www.google.com/maps/place/21%C2%B056'18.0%22N+102%C2%B016'18.1%22W/@21.938334,-102.2738897,17z/data=!3m1!4b1!4m14!1m7!3m6!1s0x8429efc19aae8451:0x84aff0699d72d319!2sAv.+Unidad+Nacional,+Jardines+de+Montebello,+20126+Aguascalientes,+Ags.,+Mexico!3b1!8m2!3d21.9390933!4d-102.2719035!3m5!1s0x0:0x0!7e2!8m2!3d21.9383291!4d-102.2717008")
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