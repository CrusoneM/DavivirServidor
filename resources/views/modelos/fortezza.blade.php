{{--====== Head ============--}}
@extends('templates.modelo')

@section('keywords', '')
@section('title', 'Fortezza')
{{--====== /Head ============--}}

{{--====== Header ============--}}
@section('header-img', '/images/Home.jpg')

@section('header-title-img', '/images/Montecarlo.png')
@section('header-title', 'MONTECARLO')
@section('header-h4', 'FORTEZZA')
@section('header-price')
Desde <b>$467,000.00*</b>
@endsection
{{--====== /Header ============--}}

{{--====== Main ============--}}

{{-- Models Section --}}
@section('models-slide')
<a class="carousel-item" href="#one!"><img src="/images/modelos/Fortezza/galeria-1.jpg"></a>
			    <a class="carousel-item" href="#two!"><img src="/images/modelos/Fortezza/galeria-2.jpg"></a>
			    <a class="carousel-item" href="#three!"><img src="/images/modelos/Fortezza/galeria-3.jpg"></a>
			    <a class="carousel-item" href="#four!"><img src="/images/modelos/Fortezza/galeria-4.jpg"></a>
			    <a class="carousel-item" href="#five!"><img src="/images/modelos/Fortezza/galeria-5.jpg"></a>
@endsection

@section('models-info')
<h3>¡CON <b>BONO DE DESCUENTO</b> DE HASTA <b> $45,000.00 PESOS!</b></h3>
<p>Elegir un nuevo hogar nunca había sido tan sencillo! Con el modelo Fortezza tendrás cercanía a servicios, excelente ubicación con respecto a la ciudad de México y un precio muy accesible.</p>
<p>Contarás con dos amplias recámaras, ambas con espacio para closet. Podrás escoger entre departamentos en planta baja con mayor área social y jardín privado, o si prefieres, podrás elegir departamentos en el primer y segundo piso, a un precio más económico pero con la misma funcionalidad y buen diseño.</p>
<p>Los departamentos Fortezza son ideales para aquellas familias que valoran la buena distribución de diseño y la cercanía a la Ciudad de México.</p>
@endsection

@section('models-terreno', '66.37')
@section('models-construccion', '83.73')
{{-- /Models Section --}}

{{-- Catalogo Section --}}
@section('catalogo-p')
<p>Te presentamos Montecarlo, un nuevo desarrollo ubicado en Tecámac, Estado de México, pensado en gente exigente que aprecia los detalles de vivir bien.</p>
					<p>Muy cerca del centro del municipio de Tecámac, con lo cual contarás con muchos servicios a sólo unos pasos. Adicionalmente estarás muy cerca de la cuidad de México con múltiples vías de acceso.</p>
					<p>¿Qué estás esperando? Ven a conocernos y sé de los primeros en apartar y decir:</p>
					<p>Quiero vivir en Montecarlo! Quiero vivir con altura!</p>
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
@section('plano', '/images/modelos/Fortezza/plano.jpg')
{{-- /Plano Section --}}

{{-- Más Section --}}
@section('video', 'https://www.youtube.com/embed/P-Rf1I9htJk')
@section('mas-model')
<div><img src="/images/hidalgo.jpg" alt="slide"></div>
		      	<div class="models-slide-text">
		      		<h5><b>MODELO: DAMASCO (PRÓXIMAMENTE)</b></h5>
		      		<p>Terreno desde: 47.52 M2</p>
		      		<p>Construcción de: 56.60 M2</p>
		      		<p>Precio: $565,000.00</p>
		      	</div>
  				<a href="#" class="btn-custom">VER DESARROLLO</a>
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

{{-- Map Section --}}
@section('map', '/images/map.jpg')
{{-- /Map Section --}}

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