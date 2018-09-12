{{--====== Head ============--}}
@extends('templates.modelo')

@section('keywords', '')
@section('title', 'Santorini PB')
{{--====== /Head ============--}}

{{--====== Header ============--}}
@section('header-img', '/images/sample-img.jpg')

@section('header-title-img', '/images/sample-img.jpg')
@section('header-title', 'BOSQUES DE IBIZA')
@section('header-h4', 'SANTORINI PB')
@section('header-price')
Desde <b>$380,000.00*</b>
@endsection
{{--====== /Header ============--}}

{{--====== Main ============--}}

{{-- Models Section --}}
@section('models-slide')
<a class="carousel-item" href="#one!"><img src="/images/sample-img.jpg"></a>
			    <a class="carousel-item" href="#two!"><img src="/images/sample-img.jpg"></a>
			    <a class="carousel-item" href="#two!"><img src="/images/sample-img.jpg"></a>
			    <a class="carousel-item" href="#two!"><img src="/images/sample-img.jpg"></a>
			    <a class="carousel-item" href="#two!"><img src="/images/sample-img.jpg"></a>
@endsection

@section('models-info')
{{-- <h3>¡CON <b>BONO DE DESCUENTO</b> DE HASTA <b> $45,000.00 PESOS!</b></h3> --}}
<p>Nunca antes tener casa propia había sido así de fácil! El modelo Santorini es la única casa en la zona de Tecamac/Zumpango/Tizayuca que te ofrece dos recámaras completas a un precio inigualable. Desde sólo ochenta pesos diarios podrás adquirir esta vivienda y tendrás la mejor oportunidad de tener casa propia en un desarrollo que cuenta con parques, escuelas, jardín de niños, guardería, comercio y comandancia de policía.</p>
@endsection

@section('models-terreno', '90.00')
@section('models-construccion', '45.63')
{{-- /Models Section --}}

{{-- Catalogo Section --}}
@section('catalogo-p')
<p>El fraccionamiento Bosques de Ibiza está situado en el municipio de Tizayuca, estado de Hidalgo, a tan solo 40 minutos del DF.</p>
<p>Un proyecto que cuenta con elementos como viviendas de excelente diseño con cocinas y recámaras muy amplias.</p>
<p>Adicionalmente, el fraccionamiento cuenta con acceso controlado, escuelas, jardín de niños, locales comerciales, áreas verdes y parques con juegos infantiles. Todo esto para que tú y tu familia vivan en un ambiente seguro y cómodo.</p>
<p>Y lo mejor, en Bosques de Ibiza sí te alcanza para comprar tu casa propia!</p>
@endsection
@section('catalogo-btn1', '#mas-section')
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

{{-- Plano Section --}}
@section('plano')
<div class="">
	<img src="/images/sample-img.jpg" alt="Plano">
</div>
@endsection
{{-- /Plano Section --}}

{{-- Más Section --}}
@section('visita-virtual', 'display:none;')
@section('video', 'https://www.google.com/maps/embed?pb=!4v1536608677434!6m8!1m7!1sCAoSLEFGMVFpcE96UlR2R0V0MXB5UDI5c29xTHR5TTZRU3Jqdzh5bHd3WjZiVTRF!2m2!1d21.884303894561!2d-102.24262496804!3f187.3930959716684!4f-21.553628663297147!5f0.7820865974627469')
@section('mas-model')
			<div class="swiper-wrapper swiper-wrapper-tres">
				<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/sample-img.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: CANTABRIA</b></h5>
			      		<p>Terreno desde: 90 M2</p>
			      		<p>Construcción de: 64.10 M2</p>
			      		<p>Precio:$577,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/cantabria') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/sample-img.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: CARTAGENA</b></h5>
			      		<p>Terreno desde: 67.50 M2</p>
			      		<p>Construcción de: 70.23 M2</p>
			      		<p>Precio:$553,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/cartagena') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/sample-img.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: CÓRCEGA</b></h5>
			      		<p>Terreno desde: 67.50 M2</p>
			      		<p>Construcción de: 66.02 M2</p>
			      		<p>Precio:$506,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/corcega') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/sample-img.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: MYKONOS</b></h5>
			      		<p>Terreno desde: 67.50 M2</p>
			      		<p>Construcción de: 41.78 M2</p>
			      		<p>Precio:$440,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/mykonos') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/sample-img.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: SANTORINI (PLANTA ALTA)</b></h5>
			      		<p>Terreno desde: 90.00 M2</p>
			      		<p>Construcción de: 39.68 M2</p>
			      		<p>Precio:$356,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/santorinipa') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/sample-img.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: SANTORINI (PLANTA BAJA)</b></h5>
			      		<p>Terreno desde: 90.00 M2</p>
			      		<p>Construcción de: 45.63 M2</p>
			      		<p>Precio:$380,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/santorinipb') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/sample-img.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: TERRANOVA PLUS</b></h5>
			      		<p>Terreno desde: 90.00 M2</p>
			      		<p>Construcción de: 49.68 M2</p>
			      		<p>Precio:$500,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/terranova-plus') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
			</div>
@endsection
{{-- /Más Section --}}

{{-- Equipo Section --}}
@section('equipo-recepcion-btn1', '53958813')
@section('equipo-recepcion-btn2', 'ventas@davivir.com.mx')
@section('equipo-recepcion-btn3', '5566118121')

@section('equipo-callcenter-btn1', '55801213')
@section('equipo-callcenter-btn2', 'info@davivir.com.mx')
@section('equipo-callcenter-btn3', '5566118121')
{{-- /Equipo Section --}}

{{-- Otros Section --}}
@section('otros-img', '/images/desarrollos/montecarlo/fortezza.jpg')
@section('otros-title', 'MONTECARLO')
@section('otros-p', 'Te presentamos Montecarlo, ubicado en Tecámac, Estado de México, pensado en gente exigente que aprecia los detalles de vivir bien.')

@section('otros-info-img', '/images/desarrollos/montecarlo/Montecarlo.png')
@section('otros-info-title', 'MONTECARLO')
@section('otros-info-avivienda', '40.31')
@section('otros-info-alote', 'N/A')
@section('otros-info-recamaras', '2')
@section('otros-info-baños', '1')

@section('otros-btn-url')
	<a href="{{ url('/desarrollo/montecarlo') }}" class="btn-custom">VER DESARROLLO</a>
@endsection
{{-- /Otros Section --}}

{{--====== /Main ============--}}