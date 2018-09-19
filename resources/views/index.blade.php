@extends('layouts.app')
@section('title', 'Home')
@section('content')
		<section id="slider" class="full-screen clearfix slider-escritorio">
			<div class="slider-parallax-inner">
				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide" style="background-image: url('images/Home-header-2.jpg');background-position: center center; background-size: cover;">
							<div class="slider-title" style="height: 370px">
								<div class="text-center" style="width: 100%;">
									<h1 class="nobottommargin topmargin-sm" style="color: white; ">NUNCA FUE TAN FÁCIL ESTRENAR</h1>
									<h1 class="" style="color: white; ">TU NUEVO HOGAR</h1>
								</div>
									<form method="POST" id="desktop-form">
										<div class="text-center col-md-10 offset-1 row norightpadding" style="background-color: #f7f7f7; opacity: 1">
												<div class="col-lg-10 row norightpadding noleftpadding nomargin" style="padding: 2%0%;" >
								      	

												<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
													
													<div class="form-group col-md-3 text-left">
														<label for="ciudad">Ciudad</label>
														<select id="ciudad" name="ciudad" class="form-control">
		                                  					<option value="">Seleccione ciudad</option>
														@foreach ($ciudades as $ciudad)
		                                  					<option value="{{ $ciudad->id_ciudad }}">{{ $ciudad->ciudad }}</option>
		                              					@endforeach

														</select>
													</div>
													<div class="form-group col-md-3 text-left">
														<label for="recamaras">Recámaras</label>
														<select id="recamaras" name="recamaras" class="form-control">
															<option value="">Seleccione recámaras</option>
															<option value="2">2</option>
															<option value="3">3</option>

														</select>
													</div>
													<div class="form-group col-md-3 text-left">
														<label for="precios">Precios desde</label>
														<select id="precios" name="precios" class="form-control">
															<option value="">Seleccione precio</option>
															<option value="0-399000"> Menos de $400.000 </option>
															<option value="400000-799000">$400.000 - $800.000</option>
															<option value="800000-999999">$800.000 - $1.000.000</option>
															<option value="1000000-50000000"> Mas de $1.000.000 </option>

														</select>
													</div>

													<div class="form-group col-md-3 text-left">
														<label for="ingresos">ingresos</label>
														<select id="ingresos" name="ingresos" class="form-control">
															<option value="">Seleccione ingreso</option>
															<option value="5000-7999">$5.000 - $8.000</option>
															<option value="8000-9999">$8.000 - $10.000</option>
															<option value="10000-50000">Mas de $10.000</option>
														</select>
													</div>
												</div>
												<div class="col-lg-2 norightpadding">
													<div class="d-flex h-100">
													    <div class="row justify-content-center align-self-center text-center col-12" style="padding-bottom: 2%;">
															<button id="enviar" type="button" class="btn btn-danger enviar-form buscar-desktop" style="margin-top: 12px; padding: 6px 40px;">Buscar</button>
													    </div>
													</div>
												</div>
										</div>
									</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>

		<section >
			<div id="header-mobil">
				<div  class="text-center" style="max-height: 750px">
					<img class="rounded-home" src="images/mexico-Montecarlo.jpg" style="max-width:  100%">
				</div>
				<div class="col-12 text-center bg-red" style="padding: 50px 25px;" >	
					<h1 class=" weight-bold " style="color: white; ">NUNCA FUE TAN FÁCIL ESTRENAR TU NUEVO HOGAR</h1>
					<div class="text-center col-md-10 row nomargin" style="background-color: #f7f7f7; opacity: 1; padding: 8%">
						<form method="POST" id="mobile-form">
						<div class="col-lg-10 row norightpadding noleftpadding nomargin" style="" >
							
							<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="form-group col-md-3 text-left">
								<label for="ciudad weight-light">Ciudad</label>
								<select id="ciudad" name="ciudad" class="form-control">
									<option value="0">Seleccione ciudad</option>
									@foreach ($ciudades as $ciudad)
		                                <option value="{{ $ciudad->id_ciudad }}">{{ $ciudad->ciudad }}</option>
		                             @endforeach

								</select>
							</div>

							<div class="form-group col-md-3 text-left">
								<label for="recamaras weight-light">Recámaras</label>
								<select id="recamaras" name="recamaras" class="form-control">
									<option value="0">Seleccione recamaras</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
							</div>

							<div class="form-group col-md-3 text-left">
								<label for="precios weight-light">precios</label>
								<select id="precios" name="precios" class="form-control">
									<option value="">Seleccione precio</option>
									<option value="0-399000"> Menos de $400.000 </option>
									<option value="400000-799000">$400.000 - $800.000</option>
									<option value="800000-999999">$800.000 - $1.000.000</option>
									<option value="1000000-50000000"> Mas de $1.000.000 </option>
								</select>
							</div>

							<div class="form-group col-md-3 text-left">
								<label for="ingresos weight-light">ingresos</label>
								<select id="ingresos" name="ingresos" class="form-control">
									<option value="">Seleccione ingreso</option>
									<option value="5000-7999">$5.000 - $8.000</option>
									<option value="8000-9999">$8.000 - $10.000</option>
									<option value="10000-50000">Mas de $10.000</option>
								</select>
							</div>
						</div>
						<div class="col-lg-2 norightpadding">
							<div class="d-flex h-100">
								<div class="row justify-content-center align-self-center text-center col-12">
									<button type="button" class="btn btn-danger enviar-form buscar-mobile" style="margin-top: 12px; padding: 6px 40px;">Buscar</button>
								</div>
							</div>
						</div>
					</form>
					</div>
				</div>
		</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="contenedor-escritorio-pc" style="padding-top: 75px">
				<div class="text-center col-md-12" >
					<h2 class="text-color bottommargin-lg">
						<strong class="weight-light">CONOCE</strong>
						<strong class="weight-bold">NUESTROS DESARROLLOS</strong>
					</h2>
				</div>
				<div class="col-lg-12 row  nopadding residence ">
					<div class="col-xl-7 col-lg-6 col-md-5 nopadding residence-img-left">
						<img src="images/HIDALGO---TIZAYUCA.jpg" style="height: 100%">	
					</div>
					<div class="col-lg-9 col-xl-6  col-md-9 nopadding bg-red residence-text-right">
						<div style="padding: 6%8%">
							<h2><strong class="weight-bold text-light">HIDALGO-TIZAYUCA</strong></h2>
							<h3 class="weight-light text-light nobottommargin"> Un nuevo desarrollo ubicaco en Tecámac. Estado de México.  Pensando en gente exigente que aprecia los detalles de vivir bien</h3>
							<h3 class="weight-light text-light"></h3>
						</div>
						<div class="tres-cuadros-right">
							<div class="bg-yellow cuadros">
							</div>
							<div class="bg-yellow cuadros">
							</div>
							<div class="bg-yellow cuadros">
							</div>
						</div>
					</div>
					<div class="col-xl-5 col-lg-6 col-md-7   content-descripcion-right" >
						<div class="col-md-12 bottommargin">
							<img src="images/Bosques-de-Ibiza.png" style="height: 100%">
						</div>
						
						<div class="col-md-12">
							<h3 class="nomargin"><strong class="weight-bold text-red">BOSQUES DE IBIZA</strong></h3>
							<h3 class="text-red weight-light" style="margin-bottom: 15px">Desde</h3>
						</div>

						<div class="col-md-12 row nomargin nopadding text-center noabsolute">
							<div class="col-md-3 nopadding  cuadro-descripcion-res" style="height:  105px">
								<div class="nopadding">
									<p class="text-red nomargin text-center">ÁREA DE</p>
									<p class="text-red nomargin text-center">VIVIENDA</p>
								</div>
								<div  class="descripcion-res" >
									<h3 class="nomargin text-center"><strong class="weight-bold text-red">105<sup>2</sup></strong></h3>
								</div>
							</div>
							<div class="col-md-3 nopadding cuadro-descripcion-res" style="height:  105px">
								<div class="nopadding">
									<p class="text-red nomargin text-center">ÁREA DE </p>
									<p class="text-red nomargin text-center">LOTE</p>
								</div>
								<div class="descripcion-res">
									<h3 class="nomargin text-center"><strong class="weight-bold text-red">2<sup>2</sup></strong></h3>
								</div>
							</div>
							<div class="col-md-3 nopadding cuadro-descripcion-res cuadro-descripcion-res-noborder" style="height:  105px">
								<div class="nopadding">
									<p class="text-red nomargin text-center">RECAMARAS</p>
								</div>
								<div class="descripcion-res">
									<h3 class="nomargin text-center"><strong class="weight-bold text-red">4</strong></h3>
								</div>
							</div>
							<div class="col-md-3 nopadding" style="height:  105px">
								<div class="nopadding">
									<p class="text-red nomargin text-center">BAÑOS</p>
								</div>
								<div class="descripcion-res">
									<h3 class="nomargin text-center"><strong class="weight-bold text-red">3</strong></h3>
								</div>
							</div>
						</div>
						<div class="col-md-12 text-md-left btn-desarrollo">
							<a href="desarrollo/ibiza"><button type="button" class="btn btn-danger weight-light" style="margin-top: 12px; padding: 8px 40px;">VER DESARROLLO</button></a>
						</div>	
					</div>
				</div>



				<div class="col-lg-12 row  nopadding residence " >
					<div class="col-xl-7 col-lg-6 col-md-5 nopadding residence-img-right">
						<img src="images/mexico-Punta-Palermo.jpg" style="height: 100%">	
					</div>
					<div class="col-lg-9 col-xl-6   col-md-9 nopadding bg-red residence-text-left">
						<div style="padding: 6%8%">
							<h2><strong class="weight-bold text-light">HIDALGO-TIZAYUCA</strong></h2>
							<h3 class="weight-light text-light nobottommargin"> Un nuevo desarrollo ubicaco en Tecámac. Estado de México.  Pensando en gente exigente que aprecia los detalles de vivir bien</h3>
							<h3 class="weight-light text-light"></h3>
						</div>
						<div class="tres-cuadros-left">
							<div class="bg-yellow cuadros">
							</div>
							<div class="bg-yellow cuadros">
							</div>
							<div class="bg-yellow cuadros">
							</div>
						</div>
					</div>
					<div class="col-xl-5 col-lg-6 col-md-7   content-descripcion-left" >
						<div class="col-md-12 bottommargin text-right">
							<img src="images/Punta-Palermo.png" style="height: 100%">
						</div>
						
						<div class="col-md-12 text-right">
							<h3 class="nomargin"><strong class="weight-bold text-red ">PUNTA PALERMO</strong></h3>
							<h3 class="text-red weight-light text-right" style="margin-bottom: 15px">Desde</h3>
						</div>

						<div class="col-md-12 row nomargin nopadding text-center noabsolute">
							<div class="col-md-3 nopadding  cuadro-descripcion-res" style="height:  105px">
								<div class="nopadding">
									<p class="text-red nomargin text-center">ÁREA DE</p>
									<p class="text-red nomargin text-center">VIVIENDA</p>
								</div>
								<div  class="descripcion-res" >
									<h3 class="nomargin text-center"><strong class="weight-bold text-red">105<sup>2</sup></strong></h3>
								</div>
							</div>
							<div class="col-md-3 nopadding cuadro-descripcion-res" style="height:  105px">
								<div class="nopadding">
									<p class="text-red nomargin text-center">ÁREA DE </p>
									<p class="text-red nomargin text-center">LOTE</p>
								</div>
								<div class="descripcion-res">
									<h3 class="nomargin text-center"><strong class="weight-bold text-red">2<sup>2</sup></strong></h3>
								</div>
							</div>
							<div class="col-md-3 nopadding cuadro-descripcion-res cuadro-descripcion-res-noborder" style="height:  105px">
								<div class="nopadding">
									<p class="text-red nomargin text-center">RECAMARAS</p>
								</div>
								<div class="descripcion-res">
									<h3 class="nomargin text-center"><strong class="weight-bold text-red">4</strong></h3>
								</div>
							</div>
							<div class="col-md-3 nopadding" style="height:  105px">
								<div class="nopadding">
									<p class="text-red nomargin text-center">BAÑOS</p>
								</div>
								<div class="descripcion-res">
									<h3 class="nomargin text-center"><strong class="weight-bold text-red">3</strong></h3>
								</div>
							</div>
						</div>
						<div class="col-md-12 text-md-right	 btn-desarrollo">
							<a href="desarrollo/puntapalermo"><button type="button" class="btn btn-danger weight-light" style="margin-top: 12px; padding: 8px 40px;">VER DESARROLLO</button></a>
						</div>	
					</div>
				</div>


				<div class="col-lg-12 row  nopadding residence ">
					<div class="col-xl-7 col-lg-6 col-md-5 nopadding residence-img-left">
						<img src="images/mexico-Montecarlo.jpg" style="height: 100%">	
					</div>
					<div class="col-lg-9  col-xl-6  col-md-9 nopadding bg-red residence-text-right">
						<div style="padding: 6%8%">
							<h2><strong class="weight-bold text-light">HIDALGO-TIZAYUCA</strong></h2>
							<h3 class="weight-light text-light nobottommargin"> Un nuevo desarrollo ubicaco en Tecámac. Estado de México.  Pensando en gente exigente que aprecia los detalles de vivir bien</h3>
							<h3 class="weight-light text-light"></h3>
						</div>
						<div class="tres-cuadros-right">
							<div class="bg-yellow cuadros">
							</div>
							<div class="bg-yellow cuadros">
							</div>
							<div class="bg-yellow cuadros">
							</div>
						</div>
					</div>
					<div class="col-xl-5 col-lg-6 col-md-7   content-descripcion-right" >
						<div class="col-md-12 bottommargin">
							<img src="images/Montecarlo.png" style="height: 100%">
						</div>
						
						<div class="col-md-12">
							<h3 class="nomargin"><strong class="weight-bold text-red">MONTECARLO</strong></h3>
							<h3 class="text-red weight-light" style="margin-bottom: 15px">Desde</h3>
						</div>

						<div class="col-md-12 row nomargin nopadding text-center noabsolute">
							<div class="col-md-3 nopadding  cuadro-descripcion-res" style="height:  105px">
								<div class="nopadding">
									<p class="text-red nomargin text-center">ÁREA DE</p>
									<p class="text-red nomargin text-center">VIVIENDA</p>
								</div>
								<div  class="descripcion-res" >
									<h3 class="nomargin text-center"><strong class="weight-bold text-red">105<sup>2</sup></strong></h3>
								</div>
							</div>
							<div class="col-md-3 nopadding cuadro-descripcion-res" style="height:  105px">
								<div class="nopadding">
									<p class="text-red nomargin text-center">ÁREA DE </p>
									<p class="text-red nomargin text-center">LOTE</p>
								</div>
								<div class="descripcion-res">
									<h3 class="nomargin text-center"><strong class="weight-bold text-red">2<sup>2</sup></strong></h3>
								</div>
							</div>
							<div class="col-md-3 nopadding cuadro-descripcion-res cuadro-descripcion-res-noborder" style="height:  105px">
								<div class="nopadding">
									<p class="text-red nomargin text-center">RECAMARAS</p>
								</div>
								<div class="descripcion-res">
									<h3 class="nomargin text-center"><strong class="weight-bold text-red">4</strong></h3>
								</div>
							</div>
							<div class="col-md-3 nopadding" style="height:  105px">
								<div class="nopadding">
									<p class="text-red nomargin text-center">BAÑOS</p>
								</div>
								<div class="descripcion-res">
									<h3 class="nomargin text-center"><strong class="weight-bold text-red">3</strong></h3>
								</div>
							</div>
						</div>
						<div class="col-md-12 text-md-left btn-desarrollo">
						<a href="desarrollo/montecarlo">	<button type="button" class="btn btn-danger weight-light" style="margin-top: 12px; padding: 8px 40px;">VER DESARROLLO</button></a>
						</div>	
					</div>
				</div>

				<div class="col-12 text-center" style="padding-top: 25px;">
					<a  style="color: red;padding:5px 3%;; height: 50px" class="enviar-form buscar-todos button button-3d button-rounded  button-yellow button-light weight-bold">VER TODOS LOS DESARROLLOS</a>
					<form method="POST" id="null-form">
						<input type="hidden" name="null">
					</form>
				</div>
		</div>


		<div class="padding-section">
			<div class="contenedor-escritorio-mobil col-12">
				<div class="text-center col-md-12 bottommargin topmargin">
					<h2 class="text-color bottommargin-lg">
						<strong class="weight-light">CONOCE</strong>
						<strong class="weight-bold">NUESTROS DESARROLLOS</strong>
					</h2>
				</div>
					<div id="related-portfolio" class="owl-carousel owl-carousel-full portfolio-carousel portfolio-notitle portfolio-nomargin footer-stick carousel-widget" data-margin="0" data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="1" data-items-md="3" data-items-lg="4">

						<div class="oc-item">
							<div class="rounded-home col-12 col-sm-8 offset-sm-2">
								<div  class="text-center" style="max-height: 450px">
									<img class="rounded" src="images/HIDALGO---TIZAYUCA.jpg" style="max-width:  100%">
								</div>
								<div class="col-12 text-left topmargin-sm-mobile">
									<h3 class="text-red nomargin">HIDALGO</h3>
									<h3 class="text-red nomargin">TIZAYUCA</h3>
									<p class="text-red"> Un nuevo desarrollo ubicaco en Tecámac. Estado de México.  Pensando en gente exigente que aprecia los detalles de vivir bien</p>
									<p class="nomargin">Área de Vivienda:105M2</p>
									<p class="nomargin">Área de Lote: 2 M2</p>
									<p class="nomargin">Recamaras:4</p>
									<p>Baños:2</p>

								<div class="col-12 text-center btn-residence">
									<a href="desarrollo/ibiza"> <button type="button" class="btn btn-danger weight-light">VER DESARROLLO</button></a>
								</div>

								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="rounded-home col-12 col-sm-8 offset-sm-2">
								<div  class="text-center" style="max-height: 450px">
									<img class="rounded" src="images/mexico-Punta-Palermo.jpg" style="max-width:  100%">
								</div>
								<div class="col-12 text-left topmargin-sm-mobile">
									<h3 class="text-red nomargin">ESTADO DE MÉXICO</h3>
									<h3 class="text-red nomargin">TECÁMAC</h3>
									<p class="text-red"> Un nuevo desarrollo ubicaco en Tecámac. Estado de México.  Pensando en gente exigente que aprecia los detalles de vivir bien</p>
									<p class="nomargin">Área de Vivienda:105M2</p>
									<p class="nomargin">Área de Lote: 2 M2</p>
									<p class="nomargin">Recamaras:4</p>
									<p>Baños:2</p>

								<div class="col-12 text-center btn-residence">
									<a href="desarrollo/puntapalermo"> <button type="button" class="btn btn-danger weight-light">VER DESARROLLO</button></a>
								</div>

								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="rounded-home col-12 col-sm-8 offset-sm-2">
								<div  class="text-center" style="max-height: 450px">
									<img class="rounded" src="images/mexico-Montecarlo.jpg" style="max-width:  100%">
								</div>
								<div class="col-12 text-left topmargin-sm-mobile">
									<h3 class="text-red nomargin">ESTADO DE MÉXICO</h3>
									<h3 class="text-red nomargin">TECÁMAC</h3>
									<p class="text-red"> Un nuevo desarrollo ubicaco en Tecámac. Estado de México.  Pensando en gente exigente que aprecia los detalles de vivir bien</p>
									<p class="nomargin">Área de Vivienda:105M2</p>
									<p class="nomargin">Área de Lote: 2 M2</p>
									<p class="nomargin">Recamaras:4</p>
									<p>Baños:2</p>

								<div class="col-12 text-center btn-residence">
									<a href="desarrollo/montecarlo"> <button type="button" class="btn btn-danger weight-light">VER DESARROLLO</button></a>
								</div>

								</div>
							</div>
						</div>
					</div><!-- .portfolio-carousel end -->
				</div>
			</div>





			<div class="col-lg-12  padding-section opciones" style="">
					<div class="text-center col-12 " style="width: 100%; padding-top: 40px">
						<h2 class="text-color">
							<strong class="weight-light">CONOCE TODAS</strong>
							<strong class="weight-bold">LAS OPCIONES DE FINACIAMIENTO</strong>
						</h2>
						<h2 class="text-color bottommargin">
							<strong class="weight-light">CON LAS QUE CONTAMOS</strong>
						</h2>
						<h4 class="weight-light">
							No solo trabajamos con el Infonavit como opción de crédito. Tenemos para ti diferentes alternativas según tu presupuesto. 		
						</h4>
					</div>

					<div class="col-12 col-md-11 row nomargin" style="position: absolute; bottom: 10%	">
						<div class="col-md-6 text-md-right text-center" >
							<a href="contactanos"><button type="button" class="btn btn-danger weight-bold" style="margin-top: 12px; padding: 6px 40px;">COTIZA YA</button></a>
						</div>
						<div class="col-md-6 text-md-left text-center">
							<a href="contactanos"><button type="button" class="btn btn-danger weight-bold" style="margin-top: 12px; padding: 6px 40px;">AGENDA TU VISITA</button></a>
						</div>
					</div>
			</div>



			<div class="col-lg-12 bg-red row nomargin cinta-roja">
				<div class="text-center col-md-6 offset-md-1">
					<h2 class="text-light nomargin">
						<strong class="weight-light">VE SI</strong>
						<strong class="weight-bold">CALIFICAS</strong>
						<strong class="weight-light">PARA UNA</strong>
						<strong class="weight-bold">VIVIENDA</strong>
					</h2>
				</div>
				<div id="contendor-btn-precalificate" class="text-md-left text-center col-md-5 ">
					<a href="precalifica" style="color: red;padding: 0%20%" class="button button-3d button-rounded  button-yellow button-bold">PRECALIFÍCATE</a>
				</div>
			</div>

			<div class="col-lg-12 bg-gray row nomargin" style="width: 100%; padding: 75px 0px " >
				<div class="text-center col-md-12">
					<h2 class="text-color nomargin">
						<strong class="weight-light">CONTACTA A</strong>
						<strong class="weight-bold">NUESTRO EQUIPO</strong>
						<strong class="weight-light">DAVIVIR</strong>
					</h2>
				</div>

				<div class="col-lg-12 nomargin-mobile row  ">
					<div class="col-lg-6 norightmargin nomargin-mobile topmargin-lg row">
						<div class="col-lg-6 text-center">
							<img style="max-width: 220px" src="images/RECEPCION.jpg">
						</div>
						<div class="col-lg-6 topmargin-lg-mobile text-center text-lg-left" style="position: relative;">
							<div class="col-md-4 offset-md-4 col-lg-12 offset-lg-0 noleftpadding">
								<h3 class="text-red nomargin">RECEPCIÓN</h3>
								<p> En nuestras oficinas conseguirás la atención personalizada que necesitas, directamente con nuestros asesores. 
								</p>
							</div>
							<div class="modulo-contactanos">
								<h6 class="text-color weight-bold ">LUN A VIE | DE 9 AM A 4 PM</h6>
								<a href=""><img style="max-width: 40px" src="images/Telefono.png"></a>
								<a href="contactanos"><img style="max-width: 40px" src="images/Mensaje.png"></a>
								<a href=""><img style="max-width: 40px" src="images/Whatsapp.png"></a>			
							</div>

						</div>
					</div>

					<div class="col-lg-6 norightmargin topmargin-lg nomargin-mobile row">
						<div class="col-lg-6 text-center">
							<img style="max-width: 220px" src="images/CALL-CENTER.jpg">
						</div>
						<div class="col-lg-6 topmargin-lg-mobile text-center text-lg-left" style="position: relative;">
							<div class="col-md-4 offset-md-4 col-lg-12 offset-lg-0 noleftpadding">
								<h3 class="text-red nomargin">CALL CENTER</h3>
								<p>¿Sin tiempo para acercarte a nuestras oficinas? Obtén una atención con respuesta rápida y oportuna desde el Call Center de DAVIVIR. 
								</p>
							</div>
							<div class="modulo-contactanos">
								<h6 class="text-color weight-bold ">LUN A VIE | DE 9 AM A 4 PM</h6>
								<a href=""><img style="max-width: 40px" src="images/Telefono.png"></a>
								<a href="contactanos"><img style="max-width: 40px" src="images/Mensaje.png"></a>
								<a href=""><img style="max-width: 40px" src="images/Whatsapp.png"></a>			
							</div>
								
							</div>
					</div>
				</div>

			</div>


			<div class="col-lg-12 bg row padding-section nomargin" style="background-color: #fff;">
				<div class="text-center col-md-12">
					<h2 class="text-color bottommargin-lg">
						<strong class="weight-light">ESTO DICEN NUESTROS</strong>
						<strong class="weight-bold">CLIENTES Y AMIGOS</strong>
					</h2>
				</div>
				<div class="col-lg-4 row testimonial-davivir">
					<div class="col-4 bg-gray text-center" style="padding: 5%">
						<img style="max-width: 75px" src="images/Jesus-Parra.png">
					</div>
					<div class="col-8 bg-gray" style="padding: 5%">
						<p>“Lo mejor de Davivir no son solamente sus desarrollos, sino el capital humano con el que cuentan para acompañarte durante todo el proceso de una decisión tan importante, como lo es la compra de tu vivienda.”
						</p>
						<h6 class="text-color weight-bold nomargin">Jesús Parra</h6>
						<p>Montercarlo</p>
					</div>	
				</div>

				<div class="col-lg-4 row testimonial-davivir">
					<div class="col-4 bg-gray text-center" style="padding: 5%">
						<img style="max-width: 75px" src="images/Mirlenis-Martinez.png">
					</div>
					<div class="col-8 bg-gray" style="padding: 5%">
						<p>“Los desarrollos de Davivir están realmente pensados para las familias, ya que cubren las necesidades específicas de cada caso.”
						</p>
						<h6 class="text-color weight-bold nomargin">Mirlenis Martínez</h6>
						<p>Bosques de Ibiza</p>
					</div>	
				</div>

				<div class="col-lg-4 row testimonial-davivir">
					<div class="col-4 bg-gray text-center" style="padding: 5%">
						<img style="max-width: 75px" src="images/Victor-casabuenas.png">
					</div>
					<div class="col-8 bg-gray" style="padding: 5%">
						<p>“Si existe algo que deba destacar de Davivir son sus alternativas de financiamiento, no importa el tipo de crédito que manejes, seguro tienen una opción para ti.”
						</p>
						<h6 class="text-color weight-bold nomargin">Victor Casabuenas</h6>
						<p>Montecarlo</p>
					</div>	
				</div>

			</div>

			<div class="col-lg-12 bg-gray row nomargin padding-section nomargin" >

				<div class="text-center col-md-12">
					<h2 class="text-color bottommargin-lg">
						<strong class="weight-light">PULICACIONES</strong>
						<strong class="weight-bold">Y TIPS DAVIVIR</strong>
					</h2>
				</div>
				<div class="col-12 row nomargin nopadding">
					<div class="col-lg-6 row norightmargin nopadding noleftmargin topmargin-sm-mobile">
						<div class="col-md-6">
							<img style="min-width: 100%" src="images/CONSERVA-TU-ROPA.jpg">
						</div>
						<div class="col-md-5">
							<h6 class="text-color weight-bold nomargin toppaddingmobile">CONSERVA TU ROPA COMO SI FUERA EL PRIMER DÍA</h6>
							<p>Coloca unas gotas de limón sobre el oxido de la ropa...</p>
							<a href="" style="text-decoration: underline!important; color: #555;"><P>VER MÁS</P></a>
							
						</div>			
					</div>
					<div class="col-lg-6 row norightmargin nopadding noleftmargin topmargin-sm-mobile">
						<div class="col-md-6">
							<img style="min-width: 100%" src="images/liberate-del-mal.jpg">
						</div>
						<div class="col-md-5">
							<h6 class="text-color weight-bold nomargin toppaddingmobile">LIBÉRATE DEL MAL OLOR EN LA ROPA</h6>
							<p>Para absorver la humedad de los clóset distrubuye pedazos de tiza por todos...</p>
							<a href="" style="text-decoration: underline!important; color: #555;"><P>VER MÁS</P></a>
						</div>
						
					</div>
					
				</div>

				<div class="text-center col-md-12 topmargin-lg">
					<button type="button" class="btn btn-danger weight-light" style="padding: 15px 60px;">VER TODAS LAS NOTICIAS</button>
				</div>

			</div>

			
			<div class="col-lg-12 row nomargin  col-padding text-center" style="background: url('images/YA-ERES-CLIENTE-DAVIVIR.jpg') center center no-repeat; background-size: cover; padding: 5%5%">
				

				<div class="col-md-6">
					<h1 class="bottommargin-sm topmargin-sm rightmargin-sm leftmargin-sm" style="color: white;">¿YA ERES CLIENTE DAVIVIR?</h1>
					<h2 class="text-color bottommargin-lg">
							<strong class="weight-light" style="color: white;">Aquí podemos asesorarte con tu vivienda</strong>
					</h2>
					<h2 class="text-color bottommargin-sm">
							<strong class="weight-light" style="color: white;">Línea de atención al cliente</strong>
					</h2>
					<a href="tel:5555801213">
						
						<h2 class="text-color bottommargin-sm">
								<strong class="weight-bold" style="color: white;">(55) 5580-1213</strong>
						</h2>
					</a>
					<h2 class="text-color bottommargin-sm">
							<strong class="weight-bold" style="color: white;">o escríbenos</strong>
					</h2>
				</div>
				<div class="col-md-6 topmargin-sm" style="padding-top: 10px">
						
					<form >
						<div class="form-group">
							<input type="text" class="form-control" id="name" placeholder="Nombre">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="lastName" placeholder="Apellido">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="phone" placeholder="Teléfono">
						</div>
						<div class="form-group">
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="¿En qué podemos ayudarte?"></textarea>
						</div>

						</form>
						<div class="col-md-12  text-right nopadding" >
							<div class="form-check nopadding">
								<label class="weight-light form-check-label" style="color: white; padding-right: 40px" for="exampleCheck1">	
									<strong >Acepto</strong> 
									<a href="aviso" target="_blank"> <strong class="text-yellow">AVISO PRIVACIDAD</strong> </a>
								</label>
								<input type="checkbox" class="form-check-input" id="exampleCheck1" style="    margin-top: 8px;">
							</div>
						</div>
						<div class="col-md-12  text-center" style="padding-top: 30px" >

							<button type="button" class="btn button-yellow weight-bold text-red" style="padding: 15px 75px;">ENVIAR</button>
						</div>
				</div>
			</div>


<!---------------------------- BUSCADOR----------------------------------- -->

					<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="padding-left: 19px!important">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
								    <h5 class="modal-title" id="exampleModalLabel"></h5>
								    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								    </button>
								</div>
								<div class="modal-body row" id="modal-body">

								   
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
								</div>
							</div>
					  	</div>
					</div>


		</section><!-- #content end -->
@endsection

@section('scripts')
<script type="text/javascript">
 $(document).ready(function(){   	

 	$(document).ready(function() {

    $('.enviar-form').click(function(){

    	if ($(this).hasClass("buscar-desktop")) {
        	var dataString = $('#desktop-form').serialize();
    	}

    	if ($(this).hasClass("buscar-mobile")) {
        	var dataString = $('#mobile-form').serialize();
    	}

    	if ($(this).hasClass("buscar-todos")) {
        	var dataString = $('#null-form').serialize();
    	}

        $.ajax({
            type: "POST",
            url: "busqueda",
            async: false,
            data: dataString,
            success: function(data) {
            	$('#exampleModal').modal('show')
            	console.log(data.busqueda)
            	$(".busqueda").remove();
            	if (data.busqueda==false) {
            		var mensaje = document.createElement("div");
					mensaje.setAttribute("class","col-12 busqueda text-center");
					mensaje.innerHTML = "<h4 class='text-red weight-bold topmargin-sm bottommargin-sm'>NO SE HAN ENCONTRADO RESULTADOS DE ACUERDO A LA BUSQUEDA </BR> TENEMOS ESTAS OTRAS OPCIONES PARA TI</h4>"
					document.getElementById('modal-body').appendChild(mensaje);

            	}

            	  for (j in data.datos) {
       	
            	var contenedor = document.createElement("div");
				contenedor.setAttribute("class","col-md-6 col-lg-4 col-xl-3 col-sm-6 col-xs-12 busqueda");
				document.getElementById('modal-body').appendChild(contenedor);

				var shadow = document.createElement("div");
				shadow.setAttribute("class","shadow mb-5 bg-white rounded padding-buscador");
				contenedor.appendChild(shadow);

				var contImagen = document.createElement("div");
				shadow.appendChild(contImagen);
				
				//images/desarrollo/sanpatricio/Adare/fachada.jpg
				var imagen = document.createElement("img");
				imagen.setAttribute("src",data.datos[j].images);
				imagen.setAttribute("style","width: 100%");
				imagen.setAttribute("style","max-height: 500px");
				contImagen.appendChild(imagen);

				shadow.appendChild(contImagen);
				var titulo = document.createElement("div");
				titulo.setAttribute("class","margin-side-xs");
				titulo.innerHTML = "<h4 class='text-red weight-bold topmargin-sm bottommargin-sm'>MODELO:"+ data.datos[j].modelo+"</h4>"
				shadow.appendChild(titulo);

				var info = document.createElement("div");
				info.setAttribute("class","margin-side-xs");
				shadow.appendChild(info);

				var descripcion1 = document.createElement("h6");
				descripcion1.setAttribute("class","nomargin");
				descripcion1.innerHTML = "Terreno desde: 75.00 M2"
				info.appendChild(descripcion1);

				var descripcion2 = document.createElement("h6");
				descripcion2.setAttribute("class","nomargin");
				descripcion2.innerHTML = "Construcción:  71.75 M2"
				info.appendChild(descripcion2);

				var descripcion3 = document.createElement("h6");
				descripcion3.setAttribute("class","nomargin");
				descripcion3.innerHTML = "Precio: $"+data.datos[j].precio+"*"
				info.appendChild(descripcion3);

				var btn = document.createElement("div");
				btn.setAttribute("class","col-12 text-center");
				btn.innerHTML = "<a href="+data.datos[j].url+" target='_blank'><button type='button' class='btn btn-danger weight-light' style='margin-top: 12px; padding: 8px 40px;'>VER MODELO</button></a>"
				shadow.appendChild(btn);
		       	}

            }
        });

    });
});
 });

</script>

@endsection