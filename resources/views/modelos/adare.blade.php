{{--====== Head ============--}}
@extends('templates.modelo')

@section('keywords', '')
@section('title', 'Adare')
{{--====== /Head ============--}}

{{--====== Header ============--}}
@section('header-img', '/images/modelos/adare/DSC_0183b.jpg')

@section('header-title-img', '/images/desarrollos/sanpatricio/logo_sanpatricio.png')
@section('header-title', 'SAN PATRICIO')
@section('header-h4', 'ADARE')
@section('header-price')
Desde <b>$574,500.00*</b>
@endsection
{{--====== /Header ============--}}

{{--====== Main ============--}}

{{-- Models Section --}}
@section('models-slide')
<a class="carousel-item" href="#one!"><img src="/images/modelos/adare/galeria-1.jpg"></a>
			    <a class="carousel-item" href="#two!"><img src="/images/modelos/adare/galeria-2.jpg"></a>
			    <a class="carousel-item" href="#three!"><img src="/images/modelos/adare/galeria-3.jpg"></a>
@endsection

@section('models-info')
{{-- <h3>¡CON <b>BONO DE DESCUENTO</b> DE HASTA <b> $45,000.00 PESOS!</b></h3> --}}
<p>La vivienda Adare tiene una fantástica combinación de espacios generosos y bien diseñados, y al contar una recámara en planta baja, tienes toda la flexibilidad para adaptar la vivienda a lo que tú y tu familia necesitan. Adicionalmente, las recámaras de planta alta son amplias y tienen áreas de guardado generosas para que puedas guardar cómodamente todo lo que necesites.</p>
@endsection

@section('models-terreno', '75.00')
@section('models-construccion', '71.75')
{{-- /Models Section --}}

{{-- Catalogo Section --}}
@section('catalogo-p')
<p>Colinas de San Patricio es el nuevo desarrollo de Davivir en el oriente de la ciudad. Ven, conoce y entérate por qué este desarrollo será tan especial y único! Al vivir en Colinas de San Patricio contarás con muchos servicios cómo escuelas, universidades, hospitales y tiendas de auto servicio, a sólo unos pasos de tu hogar. Adicionalmente, al estar ubicado frente a la Línea Verde, tendrás todos los espacios recreativos, deportivos y de convivencia familiar que este parque lineal ofrece.</p>
<p>En Colinas de San Patricio contaremos con cuatro modelos distintos de vivienda, para que puedas escoger el que más se acomoda a tus necesidades y presupuesto. Adicionalmente, al adquirir tu vivienda en este desarrollo, contarás con viviendas ecológicas de una excelente distribución, calidad y diseño, además de tener parques dentro del desarrollo y accesos controlados en las calles, para que puedas vivir con tranquilidad.</p>
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
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					</div>
				</div>
				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/calle.png" alt="icono">
					</div>
					<div class="col m9 left-align beneficio-text">
						<h5><b>CALLE PRIVADA</b></h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					</div>
				</div>
				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/verde.png" alt="icono">
					</div>
					<div class="col m9 left-align beneficio-text">
						<h5><b>ÁREAS VERDES</b></h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
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
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					</div>
				</div>
				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/deporte.png" alt="icono">
					</div>
					<div class="col m9 left-align beneficio-text">
						<h5><b>ÁREA DEPORTIVA</b></h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					</div>
				</div>
				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/regimen.png" alt="icono">
					</div>
					<div class="col m9 left-align beneficio-text">
						<h5><b>REGIMEN CONDOMINAL</b></h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
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
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					</div>
				</div>
				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/vias.png" alt="icono">
					</div>
					<div class="col m9 left-align beneficio-text">
						<h5><b>VÍAS DE ACCESO</b></h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					</div>
				</div>
				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/control.png" alt="icono">
					</div>
					<div class="col m9 left-align beneficio-text">
						<h5><b>ACCESO CONTROLADO</b></h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					</div>
				</div>
			</div>
@endsection
{{-- /Beneficio Section --}}

{{-- Plano Section --}}
@section('plano', '/images/modelos/adare/plano.jpg')
{{-- /Plano Section --}}

{{-- Más Section --}}
@section('video', 'https://www.google.com/maps/embed?pb=!4v1536608677434!6m8!1m7!1sCAoSLEFGMVFpcE96UlR2R0V0MXB5UDI5c29xTHR5TTZRU3Jqdzh5bHd3WjZiVTRF!2m2!1d21.884303894561!2d-102.24262496804!3f187.3930959716684!4f-21.553628663297147!5f0.7820865974627469')
@section('mas-model')
			<div class="swiper-wrapper swiper-wrapper-tres">
				<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/desarrollos/sanpatricio/adare.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: ADARE</b></h5>
			      		<p>Terreno desde: 75.00 M2</p>
			      		<p>Construcción de: 71.75 M2</p>
			      		<p>Precio:$574.500.00 *</p>
	      			</div>
		      		<a href="{{ url('/modelo/adare') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/desarrollos/sanpatricio/bray.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: BRAY</b></h5>
			      		<p>Terreno desde: 75.00 M2</p>
			      		<p>Construcción de: 51.49 M2</p>
			      		<p>Precio:$490.000.00 *</p>
			      	</div>
		      		<a href="{{ url('/modelo/bray') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/desarrollos/sanpatricio/ennis.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: ENNIS</b></h5>
			      		<p>Terreno desde: 75.00 M2</p>
			      		<p>Construcción de: 65.53 M2</p>
			      		<p>Precio:$545.000.00 *</p>
		      		</div>
		      		<a href="{{ url('/modelo/ennis') }}" class="btn-custom">VER DESARROLLO</a>
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