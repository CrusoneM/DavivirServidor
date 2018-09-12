{{--====== Head ============--}}
@extends('templates.modelo')

@section('keywords', '')
@section('title', 'Fortezza')
{{--====== /Head ============--}}

{{--====== Header ============--}}
@section('header-img', '/images/modelos/fortezza/head.jpg')

@section('header-title-img', '/images/desarrollos/montecarlo/Montecarlo.png')
@section('header-title', 'MONTECARLO')
@section('header-h4', 'FORTEZZA')
@section('header-price')
Desde <b>$467,000.00*</b>
@endsection
{{--====== /Header ============--}}

{{--====== Main ============--}}

{{-- Models Section --}}
@section('models-slide')
<a class="carousel-item" href="#one!"><img src="/images/modelos/fortezza/galeria-1.jpg"></a>
			    <a class="carousel-item" href="#two!"><img src="/images/modelos/fortezza/galeria-2.jpg"></a>
			    <a class="carousel-item" href="#three!"><img src="/images/modelos/fortezza/galeria-3.jpg"></a>
			    <a class="carousel-item" href="#three!"><img src="/images/modelos/fortezza/galeria-4.jpg"></a>
			    <a class="carousel-item" href="#three!"><img src="/images/modelos/fortezza/galeria-5.jpg"></a>
			    <a class="carousel-item" href="#three!"><img src="/images/modelos/fortezza/galeria-6.jpg"></a>
@endsection

@section('models-info')
{{-- <h3>¡CON <b>BONO DE DESCUENTO</b> DE HASTA <b> $45,000.00 PESOS!</b></h3> --}}
<p>Elegir un nuevo hogar nunca había sido tan sencillo! Con el modelo Fortezza tendrás cercanía a servicios, excelente ubicación con respecto a la ciudad de México y un precio muy accesible.</p>
<p>Contarás con dos amplias recámaras, ambas con espacio para closet. Podrás escoger entre departamentos en planta baja con mayor área social y jardín privado, o si prefieres, podrás elegir departamentos en el primer y segundo piso, a un precio más económico pero con la misma funcionalidad y buen diseño. </p>
<p>Los departamentos Fortezza son ideales para aquellas familias que valoran la buena distribución de diseño y la cercanía a la Ciudad de México.</p>
@endsection

@section('models-terreno', 'N/A')
@section('models-construccion', 'Desde 40.31 hasta 52.27')
{{-- /Models Section --}}

{{-- Catalogo Section --}}
@section('catalogo-p')
<p>Davivir tiene un nuevo desarrollo de vivienda para ti. Te presentamos Montecarlo, ubicado en Tecámac, Estado de México, pensado en gente exigente que aprecia los detalles de vivir bien. Conoce Montecarlo y experimenta el placer de Vivir con altura! Al elegir vivir en Montecarlo, podrás estar ubicado muy cerca del centro del municipio de Tecámac, con lo cual contarás con muchos servicios a sólo unos pasos. Adicionalmente, por estar en Tecámac, estarás muy cerca de la ciudad de México y con múltiples vías de acceso a ella como la autopista México Pachuca, la carretera libre o incluso, la nueva línea de Mexibus que está próxima a ser inaugurada. En Montecarlo podrás elegir entre vivir en casas en calles privadas o departamentos en edificios de tres niveles también en calles privadas.</p>
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
	<img src="/images/modelos/fortezza/plano.png" alt="Plano">
</div>
@endsection
{{-- /Plano Section --}}

{{-- Más Section --}}
@section('visita-virtual', 'display:none;')
@section('video', 'https://www.google.com/maps/embed?pb=!4v1536608677434!6m8!1m7!1sCAoSLEFGMVFpcE96UlR2R0V0MXB5UDI5c29xTHR5TTZRU3Jqdzh5bHd3WjZiVTRF!2m2!1d21.884303894561!2d-102.24262496804!3f187.3930959716684!4f-21.553628663297147!5f0.7820865974627469')
@section('mas-model')
			<div class="swiper-wrapper">
				<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/desarrollos/montecarlo/fortezza.jpg" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: FORTEZZA</b></h5>
			      		<p>Terreno desde: N/A</p>
			      		<p>Construcción de: Desde 40.31 hasta 52.27</p>
			      		<p>Precio:$467,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/fortezza') }}" class="btn-custom">VER DESARROLLO</a>
		      	</div>
		      	<div class="swiper-slide z-depth-2">
			      	<div><img src="/images/desarrollos/montecarlo/DSC_0720.JPG" alt="slide"></div>
			      	<div class="models-slide-text">
			      		<h5><b>MODELO: DAMASCO</b></h5>
			      		<p>Terreno desde: 47.52 M2</p>
			      		<p>Construcción de: 56.60 M2</p>
			      		<p>Precio:$571,000.00*</p>
	      			</div>
		      		<a href="{{ url('/modelo/damasco') }}" class="btn-custom">VER DESARROLLO</a>
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
@section('otros-title', 'PUNTA PALERMO')
@section('otros-p', 'Punta Palermo es un fraccionamiento que se distingue por estar estratégicamente ubicado cerca de centros comerciales, escuelas, supermercados, autopistas y múltiples rutas de transporte público.')

@section('otros-info-img', '/images/sample-img.jpg')
@section('otros-info-title', 'PUNTA PALERMO')
@section('otros-info-avivienda', '54')
@section('otros-info-alote', '56.60')
@section('otros-info-recamaras', '2')
@section('otros-info-baños', '1 1/2')

@section('otros-btn-url')
	<a href="{{ url('/desarrollo/punta-palermo') }}" class="btn-custom">VER DESARROLLO</a>
@endsection
{{-- /Otros Section --}}

{{--====== /Main ============--}}