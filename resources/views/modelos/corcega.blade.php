{{--====== Head ============--}}
@extends('templates.modelo')

@section('keywords', '')
@section('title', 'Corcega')
{{--====== /Head ============--}}

{{--====== Header ============--}}
@section('header-img', '/images/modelos/corcega/head.jpg')

@section('header-title-img', '/images/desarrollos/ibiza/logo.png')
@section('header-title', 'BOSQUES DE IBIZA')
@section('header-h4', 'CORCEGA')
@section('header-price')
Desde <b>$506,000.00*</b>
@endsection
{{--====== /Header ============--}}

{{--====== Main ============--}}

{{-- Models Section --}}
@section('models-slide')
				<a class="carousel-item" href="#one!"><img src="/images/modelos/corcega/galeria-1.jpg"></a>
			    <a class="carousel-item" href="#two!"><img src="/images/modelos/corcega/galeria-2.jpg"></a>
			    <a class="carousel-item" href="#two!"><img src="/images/modelos/corcega/galeria-3.jpg"></a>
			    <a class="carousel-item" href="#two!"><img src="/images/modelos/corcega/galeria-4.jpg"></a>
			    <a class="carousel-item" href="#two!"><img src="/images/modelos/corcega/galeria-5.jpg"></a>
@endsection

@section('models-info')
{{-- <h3>¡CON <b>BONO DE DESCUENTO</b> DE HASTA <b> $45,000.00 PESOS!</b></h3> --}}
<p>Hay niveles de niveles, y en Bosques de Ibiza qué mejor que vivir en una amplia vivienda de dos niveles? Con sus 66 metros de construcción, el modelo Córcega ofrece dos recámaras grandes para que tu familia esté cómoda desde el primer momento. Adicionalmente, por su eficiente diseño, esta vivienda cuenta con un jardín posterior en el cual podrás disfrutar de la naturaleza, o bien ampliar tu vivienda con dos recámaras adicionales. Así, tendrás la exclusividad de una vivienda de dos niveles pero tendrás también la opción de crecerla si tu familia lo necesita.</p>
@endsection

@section('models-terreno', '67.50')
@section('models-construccion', '66.02')
{{-- /Models Section --}}

{{-- Catalogo Section --}}
@section('catalogo-p')
<p>El fraccionamiento Bosques de Ibiza está situado en el municipio de Tizayuca, estado de Hidalgo, a tan solo 40 minutos del DF.</p>
<p>Un proyecto que cuenta con elementos como viviendas de excelente diseño con cocinas y recámaras muy amplias.</p>
<p>Adicionalmente, el fraccionamiento cuenta con acceso controlado, escuelas, jardín de niños, locales comerciales, áreas verdes y parques con juegos infantiles. Todo esto para que tú y tu familia vivan en un ambiente seguro y cómodo.</p>
<p>Y lo mejor, en Bosques de Ibiza sí te alcanza para comprar tu casa propia!</p>
@endsection
@section('catalogo-titulo', 'VER MODELOS')
@section('catalogo-btn1', '#mas-modelo')
@section('catalogo-btn2', '/contactanos')
{{-- /Catalogo Section --}}

{{-- Beneficio Section --}}
@section('beneficios')
	
@endsection
{{-- /Beneficio Section --}}

{{-- Plano Section --}}
@section('plano')
<div class="plano-dos">
	<img src="/images/modelos/corcega/plano-1.png" alt="Plano">
	<img src="/images/modelos/corcega/plano-2.png" alt="Plano">
</div>
@endsection
{{-- /Plano Section --}}

{{-- Más Section --}}
@section('visita-virtual', 'display:none;')
@section('video', 'https://www.google.com/maps/embed?pb=!4v1536608677434!6m8!1m7!1sCAoSLEFGMVFpcE96UlR2R0V0MXB5UDI5c29xTHR5TTZRU3Jqdzh5bHd3WjZiVTRF!2m2!1d21.884303894561!2d-102.24262496804!3f187.3930959716684!4f-21.553628663297147!5f0.7820865974627469')
@section('mas-model')
					<div class="swiper-wrapper swiper-wrapper-tres">
				<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/cantabria/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: CANTABRIA</b></h5>
			      		<p>Terreno desde: 90 M2</p>
			      		<p>Construcción de: 64.10 M2</p>
			      		<p>Precio:$577,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/cantabria') }}" class="btn-custom">VER MODELO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/cartagena/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: CARTAGENA</b></h5>
			      		<p>Terreno desde: 67.50 M2</p>
			      		<p>Construcción de: 70.23 M2</p>
			      		<p>Precio:$553,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/cartagena') }}" class="btn-custom">VER MODELO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/mykonos/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: MYKONOS</b></h5>
			      		<p>Terreno desde: 67.50 M2</p>
			      		<p>Construcción de: 41.78 M2</p>
			      		<p>Precio:$440,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/mykonos') }}" class="btn-custom">VER MODELO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/santorini-pa/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: SANTORINI (PLANTA ALTA)</b></h5>
			      		<p>Terreno desde: 90.00 M2</p>
			      		<p>Construcción de: 39.68 M2</p>
			      		<p>Precio:$356,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/santorinipa') }}" class="btn-custom">VER MODELO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/santorini-pb/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: SANTORINI (PLANTA BAJA)</b></h5>
			      		<p>Terreno desde: 90.00 M2</p>
			      		<p>Construcción de: 45.63 M2</p>
			      		<p>Precio:$380,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/santorinipb') }}" class="btn-custom">VER MODELO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/modelos/terranova-plus/modelo.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: TERRANOVA PLUS</b></h5>
			      		<p>Terreno desde: 90.00 M2</p>
			      		<p>Construcción de: 49.68 M2</p>
			      		<p>Precio:$500,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/terranova-plus') }}" class="btn-custom">VER MODELO</a>
		      	</div>
			</div>
@endsection
{{-- /Más Section --}}

{{-- Equipo Section --}}

@section('mensaje-recepcion', 'Ahora que ya sabes que tenemos la mejor opción para ti, no dudes en contactarnos')
@section('hor-recepcion', 'Lunes a Domingo de 10:00 AM a 06:00 PM')
@section('equipo-recepcion-btn1', '53958813')
@section('equipo-recepcion-btn2', 'ventas@davivir.com.mx')
@section('equipo-recepcion-btn3', '5215566118121')

@section('mensaje-call', 'Ahora que ya sabes que tenemos la mejor opción para ti, no dudes en contactarnos.')
@section('hor-call', 'Lunes a Viernes de 9:00 AM a 06:00 PM')
@section('equipo-callcenter-btn1', '55801213')
@section('equipo-callcenter-btn2', 'info@davivir.com.mx')
@section('equipo-callcenter-btn3', '5215566118121')

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