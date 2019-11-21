<div class="container">
	<p class="h2">
		Perfil
	</p>
	<div class="card rounded border-top-danger">
		<div class="card-body">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<form class="sendForm" action="{$base_url}auth/perfil/guardar" method="post">
						<div class="response"></div>
						<div class="form-group row">
							<label for="documento" class="col-4 col-form-label">N° Documento</label>
							<div class="col-4">
								<input type="text" name="documento" class="form-control documento" id="documento" placeholder="N° Documento"  value="{if isset($registro)}{$registro.documento}{/if}">
							</div>
						</div>
						<div class="form-group row">
							<label for="email" class="col-4 col-form-label">Correo</label>
							<div class="col-5">
								<input type="email" name="email" class="form-control validacion_doc" id="email" placeholder="Correo"  value="{if isset($registro)}{$registro.email}{/if}">
							</div>
						</div>
						<div class="form-group row">
							<label for="password" class="col-4 col-form-label">Contraseña</label>
							<div class="col-8">
								<input type="password" name="clave" class="form-control" id="password" placeholder="Contraseña" value="">
							</div>
						</div>
						<div class="form-group row">
							<label for="repassword" class="col-4 col-form-label">Contraseña</label>
							<div class="col-8">
								<input type="password" name="clavem" class="form-control" id="repassword" placeholder="Contraseña" value="">
							</div>
						</div>
						<input type="submit" class="save btn btn-dark" value="Guardar">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>