{{--====== Head ============--}}
@extends('templates.modelo')

@section('keywords', '')
@section('title', 'Aleppo')
{{--====== /Head ============--}}

{{--====== Header ============--}}
@section('header-img', '/images/modelos/aleppo/head.jpg')

@section('header-title-img', '/images/desarrollos/puntapalermo/logo.png')
@section('header-title', 'PUNTA PALERMO')
@section('header-h4', 'ALEPPO')
@section('header-price')
Desde <b>$951,000.00.00*</b>
@endsection
{{--====== Header ============--}}

{{--====== Main ============--}}

{{-- Models Section --}}
@section('models-slide')
				<a class="carousel-item" href="#one!"><img src="/images/modelos/aleppo/galeria-1.jpg"></a>
			    <a class="carousel-item" href="#two!"><img src="/images/modelos/aleppo/galeria-2.jpg"></a>
			    <a class="carousel-item" href="#three!"><img src="/images/modelos/aleppo/galeria-3.jpg"></a>

@endsection

@section('models-info')
{{-- <h3>¡CON <b>BONO DE DESCUENTO</b> DE HASTA <b> $45,000.00 PESOS!</b></h3> --}}
<p>Pensada en grande, con amplios espacios, exclusividad, terreno generoso, sala de TV y tres recámaras (la principal con baño privado), este modelo es para quien disfruta de su casa y para quien siempre busca lo mejor para su familia. Por qué conformarte con menos si con el modelo Aleppo tienes a tu disposición más de ochenta metros cuadrados de construcción para pases los mejores momentos con tu familia?</p>
@endsection

@section('models-terreno', '63.37')
@section('models-construccion', '83.73')
{{-- /Models Section --}}

{{-- Catalogo Section --}}
@section('catalogo-p')
	<p>Las viviendas de Punta Palermo tienen un excelente diseño, cuentan con cocinas amplias, recámaras cómodas y la mejor distribución de espacios interiores que puedes encontrar en la zona de Tecámac.</p>
	<p>Ubicado sobre la Avenida Ozumbilla en el municipio de Tecamac, Punta Palermo es un fraccionamiento que se distingue por estar estratégicamente ubicado cerca de centros comerciales, escuelas, supermercados, autopistas y múltiples rutas de transporte público.</p>
	<p>Adicionalmente, el desarrollo cuenta con acceso controlado, calles con pórticos con interfón, áreas verdes dentro de privadas, parques, escuelas y comercio. Todo esto para ofrecer un entorno agradable, de alta calidad y que aumente la plusvalía de las viviendas.</p>
@endsection
@section('catalogo-btn1', '{{ url("/desarrollo/puntapalermo") }}')
@section('catalogo-btn2', '{{ url("/contacto") }}')
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
{{-- Plano Section --}}
@section('plano')
<div class="plano-dos">
	<img src="/images/modelos/aleppo/plano-pa.png" alt="Plano">
	<img src="/images/modelos/aleppo/plano-pb.png" alt="Plano">
</div>
@endsection
{{-- /Plano Section --}}

{{-- Más Section --}}
@section('visita-virtual', 'display:none;')
@section('mas-model')
				<div class="swiper-wrapper swiper-wrapper-tres">
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/palermo-damasco/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: DAMASCO</b></h5>
			      		<p>Terreno desde: 54.00 M2</p>
			      		<p>Construcción de: 56.60 M2</p>
			      		<p>Precio:$705,000.00 *</p>
			      	</div>
		      		<a href="{{ url('/modelo/palermo-damasco') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/imperial/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: IMPERIAL</b></h5>
			      		<p>Terreno desde: 90.00 M2</p>
			      		<p>Construcción de: 94.00 M2</p>
			      		<p>Precio:$1,164,000.00 *</p>
		      		</div>
		      		<a href="{{ url('/modelo/imperial') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/turquia/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: TURQUIA</b></h5>
			      		<p>Terreno desde: 59.73 M2</p>
			      		<p>Construcción de: 66.81 M2</p>
			      		<p>Precio:$794,000.00 *</p>
	      			</div>
		      		<a href="{{ url('/modelo/turquia') }}" class="btn-custom">VER DESARROLLO</a>
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
@section('otros-title', 'MONTECARLO-TECAMÁC')
@section('otros-p', 'Te presentamos Montecarlo, ubicado en Tecámac, Estado de México, pensado en gente exigente que aprecia los detalles de vivir bien.')

@section('otros-info-img', '/images/Montecarlo.png')
@section('otros-info-title', 'MONTECARLO')
@section('otros-info-avivienda', '	40.31')
@section('otros-info-alote', 'X')
@section('otros-info-recamaras', '4')
@section('otros-info-baños', '3')

@section('otros-btn-url')
	<a href="{{ url('/desarrollo/montecarlo') }}" class="btn-custom">VER DESARROLLO</a>
@endsection
{{-- /Otros Section --}}

{{--====== /Main ============--}}