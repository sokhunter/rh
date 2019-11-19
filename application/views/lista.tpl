<div class="container">
	<p class="h2">
		{$titulo_tabla}
		{if isset($btn_agregar)}
		<a class="btn bg-dark text-white float-right" href="{$btn_agregar}">Agregar</a>
		{/if}
	</p>
	<div class="card rounded border-top-danger">
		<div class="card-body">
			<div class="response"></div>
			{if isset($cartera)}
				<form action="{$get_url}cartera/listar" method="post">
					<div class="row">
						{if isset($cartera_emp)}
						<div class="col-2 form-group">
							<label for="filtro_empleado">N° Doc. Empleado</label>
						</div>
						<div class="col-3 form-group">
							<input type="text" class="form-control" name="filtro_empleado" value="{$filtro_empleado}" id="filtro_empresa">
						</div>
						{/if}
						<div class="col-2 form-group">
						    <label for="filtro_fecha">Fecha de emisión</label>
						</div>
						<div class="col-3 form-group">
							<input type="date" class="form-control" name="filtro_fecha" value="{$filtro_fecha}" id="filtro_fecha">
						</div>
						<div class="col-1 form-group">
							<input type="submit" class="btn btn-secondary btn-sm" value="Filtrar">
						</div>
					</div>
				</form>
			{/if}
			{$tabla}
		</div>
	</div>
</div>