<div class="container">
	<p class="h2">
		Agregar empresa
	</p>
	<div class="card rounded border-top-danger">
		<div class="card-body">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<form class="sendForm" action="{$get_url}empresa/guardar" method="post">
						<div class="response"></div>
						<div class="form-group row">
							<label for="documento" class="col-4 col-form-label">RUC</label>
							<div class="col-4">
								<input type="text" name="documento" class="form-control documento" id="documento" placeholder="RUC"  value="{if isset($registro)}{$registro.documento}{/if}">
							</div>
						</div>
						<div class="form-group row">
							<label for="razon_social" class="col-4 col-form-label">Razón Social</label>
							<div class="col-6">
								<input type="text" name="razon_social" class="form-control validacion_doc" id="razon_social" placeholder="Razón Social" value="{if isset($registro)}{$registro.razon_social}{/if}">
							</div>
						</div>
						<div class="form-group row">
							<label for="email" class="col-4 col-form-label">Correo</label>
							<div class="col-5">
								<input type="email" name="email" class="form-control" id="email" placeholder="Correo" value="{if isset($registro)}{$registro.email}{/if}">
							</div>
						</div>
						<div class="form-group row">
							<label for="direccion" class="col-4 col-form-label">Dirección</label>
							<div class="col-8">
								<input type="text" name="direccion" class="form-control validacion_doc" id="direccion" placeholder="Dirección" value="{if isset($registro)}{$registro.direccion}{/if}">
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
						<input type="hidden" name="id" value="{if isset($registro)}{$registro.id}{/if}">
						<input type="submit" class="save btn btn-dark" value="Guardar">
					</form>
				</div>
				<div class="col-3">
					{if isset($registro)}
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">{$registro.razon_social}</h5>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item"><i class="fa fa-user text-warning"></i> {$registro.usuario}</li>
							<li class="list-group-item"><i class="fa fa-envelope text-primary"></i> {$registro.email}</li>
							<li class="list-group-item"><i class="fa fa-map-marker-alt text-danger"></i> {$registro.direccion}</li>
							<li class="list-group-item"><i class="fa fa-id-card"></i> {$registro.documento}</li>
						</ul>
					</div>
					{/if}
				</div>
			</div>
		</div>
	</div>
</div>