{{--====== Head ============--}}
@extends('templates.desarrollo')

@section('keywords', '')
@section('title', 'Bosques de Ibiza')
{{--====== /Head ============--}}

{{--====== Header ============--}}
@section('header-img', '/images/desarrollos/ibiza/head.jpg')

@section('header-title-img', '/images/desarrollos/ibiza/logo.png')
@section('header-title', 'BOSQUES DE IBIZA')
@section('header-p', 'El fraccionamiento Bosques de Ibiza está situado en el municipio de Tizayuca, estado de Hidalgo, a tan solo 40 minutos del DF.')
{{--====== /Header ============--}}

{{--====== Main ============--}}

{{-- Models Section --}}
@section('models-slide')
			<div class="swiper-wrapper swiper-wrapper-tres">
				<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/desarrollos/ibiza/head.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: CARTAGENA</b></h5>
			      		<p>Terreno desde:  67.50M2</p>
			      		<p>Construcción de:  70.23M2</p>
			      		<p>Precio:$553,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/cartagena') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/desarrollos/ibiza/head.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: CANTABRIA</b></h5>
			      		<p>Terreno desde:  90.00M2</p>
			      		<p>Construcción de: 64.10M2</p>
			      		<p>Precio:$577,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/cantabria') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/desarrollos/ibiza/head.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: TERRANOVA</b></h5>
			      		<p>Terreno desde: 90.00M2</p>
			      		<p>Construcción de: 49.68M2</p>
			      		<p>Precio:$500,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/terranova') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/desarrollos/ibiza/head.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: SANTORINI P. BAJA </b></h5>
			      		<p>Terreno desde:  90.00M2</p>
			      		<p>Construcción de:  45.63M2</p>
			      		<p>Precio:$380,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/s-planta-baja') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/desarrollos/ibiza/head.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: SANTORINI P. ALTA</b></h5>
			      		<p>Terreno desde:  90.00M2</p>
			      		<p>Construcción de:  39.68M2</p>
			      		<p>Precio:$356,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/s-planta-alta') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/desarrollos/ibiza/head.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: MYKONOS</b></h5>
			      		<p>Terreno desde:  67.50M2</p>
			      		<p>Construcción de:  41.78M2</p>
			      		<p>Precio:$440,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/mykonos') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/desarrollos/ibiza/head.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: CÓRCEGA</b></h5>
			      		<p>Terreno desde:  67.50M2</p>
			      		<p>Construcción de:  66.02M2</p>
			      		<p>Precio:$506,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/corcega') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
			</div>
@endsection
{{-- /Models Section --}}

{{-- Catalogo Section --}}
@section('catalogo-p')
	<p>Un proyecto que cuenta con elementos como viviendas de excelente diseño con cocinas y recámaras muy amplias. </p>
	<p>Adicionalmente, el fraccionamiento cuenta con acceso controlado, escuelas, jardín de niños, locales comerciales, áreas verdes y parques con juegos infantiles. Todo esto para que tú y tu familia vivan en un ambiente seguro y cómodo. </p>
	<p>Y lo mejor, en Bosques de Ibiza sí te alcanza para comprar tu casa propia!</p>
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
						<img src="/images/modelo-aleppo/verde.png" alt="icono">
					</div>
					<div class="col m9 left-align beneficio-text">
						<h5><b>ÁREAS VERDES</b></h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					</div>
				</div>
				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/comercial.png" alt="icono">
					</div>
					<div class="col m9 left-align beneficio-text">
						<h5><b>ZONA COMERCIAL</b></h5>
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

{{-- Equipo Section --}}
@section('equipo-recepcion-btn1', '#')
@section('equipo-recepcion-btn2', '#')
@section('equipo-recepcion-btn3', '#')

@section('equipo-callcenter-btn1', '#')
@section('equipo-callcenter-btn2', '#')
@section('equipo-callcenter-btn3', '#')
{{-- /Equipo Section --}}

{{-- Map Section --}}
@section('map', '')
{{-- /Map Section --}}

{{-- Otros Section --}}
@section('otros-img', '/images/villafuentes.jpg')
@section('otros-title', 'VILLAS DE LAS FUENTES')
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