<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	<li class="nav-item {if $active == 'rh'}active{/if}">
		<a class="nav-link" href="{$base_url}empresa/home">RH <span class="sr-only">(current)</span></a>
	</li>
	<li class="nav-item {if $active == 'empleado'}active{/if}">
		<a class="nav-link" href="{$base_url}empresa/empleado/listar">Empleados <span class="sr-only">(current)</span></a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#" data-toggle="modal" data-target="#tasa_descuento">
			Tasa de descuento 
			<span class="sr-only">(current)</span>
		</a>
	</li>
</ul>
<div class="modal fade" id="tasa_descuento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tasa de descuento</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form class="sendForm" action="{$get_url}tasa_descuento/guardar" method="post">
				<div class="modal-body">
					<div class="response"></div>
					<div class="form-group">
						<label for="valor" class="col-form-label">Valor:</label>
						<input type="number" max="100" min="0" step=".0000001" name="valor" class="form-control tasa" id="valor" value="{$session.sys_tasa}">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<input type="submit" class="save btn btn-dark" value="Guardar">
				</div>
			</form>
		</div>
	</div>
</div>