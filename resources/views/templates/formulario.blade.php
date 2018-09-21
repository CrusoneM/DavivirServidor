					<form id="form-davivir">
						<div class="form-group">
							<input type="text" class="form-control" name="firstLastName" id="firstLastName" placeholder="Nombre y Apellido">
							<label id="firstLastName-error" class="error" for="firstLastName" style="display: none;float: right;">Requerido.</label>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="email" id="email" placeholder="Email">
							<label id="email-error" class="error" for="email" style="display: none;float: right;">Requerido.</label>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="phone" id="phone" placeholder="Teléfono">
							<label id="phone-error" class="error" for="phone" style="display: none;float: right;">Requerido.</label>
						</div>
						<div class="form-group">
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="¿En qué podemos ayudarte?"></textarea>
						</div>

						<div class="col-md-12  text-right nopadding" >
							<div class="form-check nopadding">
								<label class="weight-light form-check-label" style="color: white; padding-right: 40px" for="exampleCheck1">	
									<strong >Acepto</strong> 
									<a href="" class="gotoTop"> <strong class="text-yellow">términos y condiciones</strong> </a>
								</label>
								<input type="checkbox" required="" id="check" class="form-check-input" id="exampleCheck1" style="    margin-top: 8px;">
							</div>
								<label id="check-error" class="error" for="" style="display: none;float: right; 	">Requerido.</label>
						</div>
						<div class="col-md-12  text-center" style="padding-top: 30px" >
							<button type="button" onclick="verificar()"  class="btn button-yellow weight-bold text-red" style="padding: 15px 80px;">ENVIAR</button>
						</div>
					</form>