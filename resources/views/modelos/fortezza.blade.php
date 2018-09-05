{{--====== Head ============--}}
@extends('templates.modelo')

@section('keywords', '')
@section('title', 'Fortezza')
{{--====== /Head ============--}}

{{--====== Header ============--}}
@section('header-img', '/images/home.jpg')

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
<a class="carousel-item" href="#one!"><img src="/images/modelos/fortezza/galeria-1.jpg"></a>
			    <a class="carousel-item" href="#two!"><img src="/images/modelos/fortezza/galeria-2.jpg"></a>
			    <a class="carousel-item" href="#three!"><img src="/images/modelos/fortezza/galeria-3.jpg"></a>
			    <a class="carousel-item" href="#four!"><img src="/images/modelos/fortezza/galeria-4.jpg"></a>
			    <a class="carousel-item" href="#five!"><img src="/images/modelos/fortezza/galeria-5.jpg"></a>
@endsection
@section('models-descuento', '$45,000.00')
@section('models-p1', 'Elegir un nuevo hogar nunca había sido tan sencillo! Con el modelo Fortezza tendrás cercanía a servicios, excelente ubicación con respecto a la ciudad de México y un precio muy accesible.')
@section('models-p2', 'Contarás con dos amplias recámaras, ambas con espacio para closet. Podrás escoger entre departamentos en planta baja con mayor área social y jardín privado, o si prefieres, podrás elegir departamentos en el primer y segundo piso, a un precio más económico pero con la misma funcionalidad y buen diseño.')
@section('models-p3', 'Los departamentos Fortezza son ideales para aquellas familias que valoran la buena distribución de diseño y la cercanía a la Ciudad de México.')

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

{{-- Plano Section --}}
@section('plano', '/images/modelos/fortezza/PLANO-ARQUITECTÓNICO.jpg')
{{-- /Plano Section --}}

{{-- Más Section --}}
@section('video', 'https://www.youtube.com/embed/P-Rf1I9htJk')
@section('mas-model')
<div><img src="/images/ESTADO-DE-MÉXICO---TECÁMAC-Montecarlo.jpg" alt="slide"></div>
		      	<div class="models-slide-text">
		      		<h5><b>MODELO: DAMASCO(PRÓXIMAMENTE)</b></h5>
		      		<p>Terreno desde: 47.52 M2</p>
		      		<p>Construcción de: 56.60 M2</p>
		      		<p>Precio: $565,000.00</p>
		      	</div>
  				<a href="#" class="btn-custom">VER DESARROLLO</a>
@endsection
{{-- /Más Section --}}

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