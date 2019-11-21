<div class="container">
	<p class="h2">
		Agregar costo/gasto
	</p>
	<div class="card rounded border-top-danger">
		<div class="card-body">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<form class="sendForm" action="{$get_url}costos/guardar" method="post">
						<div class="response"></div>
						<div class="form-group row">
							<label for="nombre" class="col-4 col-form-label">Nombre</label>
							<div class="col-6">
								<input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre"  value="{if isset($registro)}{$registro.nombre}{/if}">
							</div>
						</div>
						<div class="form-group row">
							<label for="monto" class="col-4 col-form-label">Monto</label>
							<div class="col-6">
								<input type="text" name="monto" class="form-control moneda" id="monto" placeholder="Monto"  value="{if isset($registro)}{$registro.monto}{/if}">
							</div>
						</div>
						<div class="form-group row">
							<label for="tipo" class="col-4 col-form-label">Tipo</label>
							<div class="col-6">
								<select name="inicial" class="form-control" id="tipo">
									<option value="1" {if isset($registro) && $registro.inicial == 1}selected=""{/if}>Inicial</option>
									<option value="0" {if isset($registro) && $registro.inicial == 0}selected=""{/if}>Final</option>
								</select>
							</div>
						</div>
						<input type="hidden" name="id" value="{if isset($registro)}{$registro.id}{/if}">
						<input type="submit" class="save btn btn-dark" value="Guardar">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>