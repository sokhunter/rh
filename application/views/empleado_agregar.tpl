<div class="container">
	<p class="h2">
		Agregar empleado
	</p>
	<div class="card rounded border-top-danger">
		<div class="card-body">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<form class="sendForm" action="{$get_url}empleado/guardar" method="post">
						<div class="response"></div>
						<div class="form-group row">
							<label for="documento" class="col-4 col-form-label">DNI</label>
							<div class="col-4">
								<input type="text" name="dni" class="form-control" id="documento" placeholder="DNI"  value="{if isset($registro)}{$registro.documento}{/if}">
							</div>
							<div class="col-2">
								<a href="#" id="validar_documento" class="btn btn-secondary btn-sm" data-type="3">Validar</a>
							</div>
						</div>
						<div class="form-group row">
							<label for="nombre" class="col-4 col-form-label">Nombre</label>
							<div class="col-6">
								<input {if !isset($registro)}disabled=""{/if} type="text" name="nombre" class="form-control validacion_doc" id="nombre" placeholder="Nombre"  value="{if isset($registro)}{$registro.nombre}{/if}">
							</div>
						</div>
						<div class="form-group row">
							<label for="a_paterno" class="col-4 col-form-label">Apellido paterno</label>
							<div class="col-5">
								<input disabled="" type="text" name="a_paterno" class="form-control validacion_doc" id="a_paterno" placeholder="Apellido paterno"  value="{if isset($registro)}{$registro.a_paterno}{/if}">
							</div>
						</div>
						<div class="form-group row">
							<label for="a_materno" class="col-4 col-form-label">Apellido materno</label>
							<div class="col-5">
								<input disabled="" type="text" name="a_materno" class="form-control validacion_doc" id="a_materno" placeholder="Apellido materno"  value="{if isset($registro)}{$registro.a_materno}{/if}">
							</div>
						</div>
						<div class="form-group row">
							<label for="email" class="col-4 col-form-label">Correo</label>
							<div class="col-5">
								<input disabled="" type="email" name="email" class="form-control validacion_doc" id="email" placeholder="Correo"  value="{if isset($registro)}{$registro.email}{/if}">
							</div>
						</div>
						{if isset($session_id)}
						<div class="form-group row">
							<label for="cargo" class="col-4 col-form-label">Cargo</label>
							<div class="col-5">
								<select name="cargo" class="form-control" id="cargo">
									<option>Seleccione un cargo</option>
									{foreach $cargos as $c}
									<option value="{$c.id}">{$c.nombre}</option>
									{/foreach}
								</select>
							</div>
						</div>
						{/if}
						<input type="hidden" name="session_id" value="{if isset($session_id)}{$session_id}{/if}">
						<input type="hidden" name="id" value="{if isset($registro)}{$registro.id}{/if}">
						<input type="submit" class="save btn btn-dark" value="Guardar">
					</form>
				</div>
				<div class="col-3">
					{if isset($registro)}
					<div class="card">
						{if empty($registro.imagen)}
						<img class="card-img-top" src="{$base_url}public/imagen/usuario/empty.png" alt="empleado">
						{else}
						<img class="card-img-top" src="{$base_url}public/imagen/usuario/{$registro.imagen}" alt="empleado">
						{/if}
						<div class="card-body">
							<h5 class="card-title">{$registro.nombre} {$registro.a_paterno} {$registro.a_materno}</h5>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item"><i class="fa fa-user text-warning"></i> {$registro.usuario}</li>
							<li class="list-group-item"><i class="fa fa-envelope text-primary"></i> {$registro.email}</li>
							<li class="list-group-item"><i class="fa fa-id-card"></i> {$registro.documento}</li>
						</ul>
					</div>
					{/if}
				</div>
			</div>
		</div>
	</div>
</div>