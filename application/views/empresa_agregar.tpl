<div class="container">
	<p class="h2">
		Agregar empresa
	</p>
	<div class="card rounded border-top-danger">
		<div class="card-body">
			<div class="row">
				<div class="col-6">
					<form class="sendForm" action="{$base_url}empresa/agregar" method="post">
						<div class="response"></div>
						<div class="form-group row">
							<label for="razon_social" class="col-4 col-form-label">Razón Social</label>
							<div class="col-6">
								<input type="text" name="razon_social" class="form-control" id="razon_social" placeholder="Razón Social">
							</div>
						</div>
						<div class="form-group row">
							<label for="ruc" class="col-4 col-form-label">RUC</label>
							<div class="col-4">
								<input type="text" name="ruc" class="form-control" id="ruc" placeholder="RUC">
							</div>
						</div>
						<div class="form-group row">
							<label for="nombre" class="col-4 col-form-label">Nombre</label>
							<div class="col-5">
								<input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
							</div>
						</div>
						<div class="form-group row">
							<label for="email" class="col-4 col-form-label">Correo</label>
							<div class="col-5">
								<input type="email" name="email" class="form-control" id="email" placeholder="Correo">
							</div>
						</div>
						<div class="form-group row">
							<label for="direccion" class="col-4 col-form-label">Dirección</label>
							<div class="col-8">
								<input type="text" name="direccion" class="form-control" id="direccion" placeholder="Dirección">
							</div>
						</div>
						<input type="submit" class="save btn btn-dark" value="Guardar">
					</form>
				</div>
				<div class="col-3">
					{if isset($registro)}
					<div class="card">
						<img class="card-img-top" src="{$base_url}public/imagen/usuario/empty.png" alt="empleado">
						<div class="card-body">
							<h5 class="card-title">Nombre SAC</h5>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item"><i class="fa fa-envelope text-primary"></i> correo@correo.com</li>
							<li class="list-group-item"><i class="fa fa-map-marker-alt text-danger"></i> dirección</li>
							<li class="list-group-item"><i class="fa fa-id-card"></i> 17829384954</li>
						</ul>
					</div>
					{/if}
				</div>
			</div>
		</div>
	</div>
</div>